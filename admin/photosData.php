<?php
include "../db_configuration/configuration.php";

// -----------delete
if (isset($_POST['baseId'])) {

    $sql_unlink_photo  = mysqli_query($con, "SELECT name FROM photos WHERE id='" . $_POST['baseId'] . "'");

    $row = mysqli_fetch_assoc($sql_unlink_photo);
    // delete photo
    $path = '../photos/' . $row['name'];
    echo $path;
    unlink($path);
    echo $path;

    $sql = mysqli_query($con, "DELETE FROM photos WHERE id='" . $_POST['baseId'] . "'");
}

// -----add photos

if (isset($_POST['photo_category'])) {
    $result = '';
    $newvalue = explode('.', $_FILES['photo_input']['name']);

    $maxsize = 41943040;
    // Դուք հաջողությամբ ներմուծեցիք
    // Ներմուծված տեսանյութի չափը գերազանցում է թույլատրելին:

    $newname = $newvalue[0] . uniqid() . "." . end($newvalue);
    $newDestination = '../photos/' . $newname;
    $extension = strtolower(pathinfo($newDestination, PATHINFO_EXTENSION));
    $extension_arr = array('tif', 'tiff', 'bmp', 'jpg', 'jpeg', 'gif', 'png', 'eps', 'raw', 'cr2', 'nef', 'orf', 'sr2', 'Webp', 'SVG', 'CGM', 'Exif');
    if (in_array($extension, $extension_arr)) {
        if ($_FILES['photo_input']['size'] > $maxsize) {
            $result = 'Ներմուծված լուսանկարի չափը գերազանցում է թույլատրելին:';
        } else {
            move_uploaded_file($_FILES['photo_input']['tmp_name'], $newDestination);
            if($_POST['photo_category']=='category 1'){
                $sql_photos = mysqli_query($con, "INSERT INTO photos (name, category_am, category_en, category_ru) VALUES ('" . $newname . "', 'Ռեստորան', 'Restaurant', 'Ресторан')");
            }
            if($_POST['photo_category']=='category 2'){
                $sql_photos = mysqli_query($con, "INSERT INTO photos (name, category_am, category_en, category_ru) VALUES ('" . $newname . "', 'Հյուրատուն', 'Guesthouse', 'Гостевой дом')");
            }
            if($_POST['photo_category']=='category 3'){
                $sql_photos = mysqli_query($con, "INSERT INTO photos (name, category_am, category_en, category_ru) VALUES ('" . $newname . "', 'Քայլարշավներ', 'Hiking', 'Пеший туризм')");
            }
            if($_POST['photo_category']=='category 4'){
                $sql_photos = mysqli_query($con, "INSERT INTO photos (name, category_am, category_en, category_ru) VALUES ('" . $newname . "', 'Լեռնագնացություն', 'Mountaineering', 'Альпинизм')");
            }
            if($_POST['photo_category']=='category 5'){
                $sql_photos = mysqli_query($con, "INSERT INTO photos (name, category_am, category_en, category_ru) VALUES ('" . $newname . "', 'Լեռնահեծանվային տուրեր', 'Mountain biking tours', 'Туры на горных велосипедах')");
            }
            if($_POST['photo_category']=='category 6'){
                $sql_photos = mysqli_query($con, "INSERT INTO photos (name, category_am, category_en, category_ru) VALUES ('" . $newname . "', 'Դահուկային տուրեր', 'Ski tours', 'Лыжные туры')");
            }
            if($_POST['photo_category']=='category 7'){
                $sql_photos = mysqli_query($con, "INSERT INTO photos (name, category_am, category_en, category_ru) VALUES ('" . $newname . "', 'Կվադրոցիկլ', 'Quad byke/ATV', 'Квадроцикл')");
            }
            if($_POST['photo_category']=='category 8'){
                $sql_photos = mysqli_query($con, "INSERT INTO photos (name, category_am, category_en, category_ru) VALUES ('" . $newname . "', 'Ձիավարություն', 'Riding', 'Верховая езда')");
            }
            $result = 'Դուք հաջողությամբ ներմուծեցիք';
        }
    } else {
        $result = 'ֆայլի անվավեր ընդլայնում';
    }
    echo $result;
    // move_uploaded_file($_FILES['services_img']['tmp_name'], $newDestination);

    // $sql_insert_services_am = mysqli_query($con, "INSERT INTO services_am (image, title, text) VALUES ('" . $newname . "', '" . $_POST['services-am-title'] . "', '" . $_POST['services-am-text'] . "')");
    // $sql_insert_services_en = mysqli_query($con, "INSERT INTO services_en (image, title, text) VALUES ('" . $newname . "', '" . $_POST['services-en-title'] . "', '" . $_POST['services-en-text'] . "')");
    // $sql_insert_services_ru = mysqli_query($con, "INSERT INTO services_ru (image, title, text) VALUES ('" . $newname . "', '" . $_POST['services-ru-title'] . "', '" . $_POST['services-ru-text'] . "')");
    // echo $_POST['services-am-title'];
}

// make changes

if (isset($_POST['photoCategory_arr'])) {
    for ($i = 0; $i < count($_POST['photoCategory_arr']); $i++) {
        if ($_POST['photoCategory_arr'][$i] == "category 1") {
            $sql = mysqli_query($con, "UPDATE photos SET category_am='Ռեստորան', category_en='Restaurant', category_ru='Ресторан'  WHERE id='" . $_POST['photo_ids'][$i] . "' ");
        } elseif ($_POST['photoCategory_arr'][$i] == "category 2") {
            $sql = mysqli_query($con, "UPDATE photos SET category_am='Հյուրատուն', category_en='Guesthouse', category_ru='Гостевой дом'  WHERE id='" . $_POST['photo_ids'][$i] . "' ");
        } elseif ($_POST['photoCategory_arr'][$i] == "category 3") {
            $sql = mysqli_query($con, "UPDATE photos SET category_am='Քայլարշավներ', category_en='Hiking', category_ru='Пеший туризм'  WHERE id='" . $_POST['photo_ids'][$i] . "' ");
        } elseif ($_POST['photoCategory_arr'][$i] == "category 4") {
            $sql = mysqli_query($con, "UPDATE photos SET category_am='Լեռնագնացություն', category_en='Mountaineering', category_ru='Альпинизм'  WHERE id='" . $_POST['photo_ids'][$i] . "' ");
        } elseif ($_POST['photoCategory_arr'][$i] == "category 5") {
            $sql = mysqli_query($con, "UPDATE photos SET category_am='Լեռնահեծանվային տուրեր', category_en='Mountain biking tours', category_ru='Туры на горных велосипедах'  WHERE id='" . $_POST['photo_ids'][$i] . "' ");
        } elseif ($_POST['photoCategory_arr'][$i] == "category 6") {
            $sql = mysqli_query($con, "UPDATE photos SET category_am='Դահուկային տուրեր', category_en='Ski tours', category_ru='Лыжные туры'  WHERE id='" . $_POST['photo_ids'][$i] . "' ");
        } elseif ($_POST['photoCategory_arr'][$i] == "category 7") {
            $sql = mysqli_query($con, "UPDATE photos SET category_am='Կվադրոցիկլ', category_en='Quad byke/ATV', category_ru='Квадроцикл'  WHERE id='" . $_POST['photo_ids'][$i] . "' ");
        } elseif ($_POST['photoCategory_arr'][$i] == "category 8") {
            $sql = mysqli_query($con, "UPDATE photos SET category_am='Ձիավարություն', category_en='Riding', category_ru='Верховая езда'  WHERE id='" . $_POST['photo_ids'][$i] . "' ");
        }
    }
}
