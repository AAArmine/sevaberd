<?php
include "../db_configuration/configuration.php";

// -----------delete
if (isset($_POST['baseId'])) {
    $sql_unlink_img  = mysqli_query($con, "SELECT menu_img FROM menu_am WHERE id='" . $_POST['baseId'] . "'");
    $row_am = mysqli_fetch_assoc($sql_unlink_img);
    // delete image
    $path = '../img_admin/' . $row_am['menu_img'];
    unlink($path);

    $sql_am = mysqli_query($con, "DELETE FROM menu_am WHERE id='" . $_POST['baseId'] . "'");
    $sql_en = mysqli_query($con, "DELETE FROM menu_en WHERE id='" . $_POST['baseId'] . "'");
    $sql_ru = mysqli_query($con, "DELETE FROM menu_ru WHERE id='" . $_POST['baseId'] . "'");
}

// -----------display new menu img name
if (isset($_POST['filename'])) {
    echo $_POST['filename'];
}

// -----submit new menu
if (isset($_POST['menu-am-name'])) {
    echo $_POST['menu_category'];
    // print_r($_FILES['sp_offer_img']);
    //returns filename from a specified path -> basename()
    // echo basename($_FILES['sp_offer_img']['name']);
    // $for_companies = isset($_POST['submit-for-companies-checked']) ? 'checked' : "NULL";

    $newvalue = explode('.', $_FILES['menu_img']['name']);

    $newname = $newvalue[0] . uniqid() . "." . end($newvalue);
    $newDestination = '../img_admin/' . $newname;
    move_uploaded_file($_FILES['menu_img']['tmp_name'], $newDestination);

    $sql_insert_menu_am = mysqli_query($con, "INSERT INTO menu_am (menu_name, menu_description, menu_img, category, price) VALUES ('" . $_POST['menu-am-name'] . "', '" . $_POST['menu-am-text'] . "', '" . $newname . "', '" . $_POST['menu_category'] . "', '" . $_POST['menu_price'] . "')");
    if ($_POST['menu_category'] == 'Տաք ուտեստներ') {
        $sql_insert_menu_en = mysqli_query($con, "INSERT INTO menu_en (menu_name, menu_description, menu_img, category, price) VALUES ('" . $_POST['menu-en-name'] . "', '" . $_POST['menu-en-text'] . "', '" . $newname . "', 'Hot dishes', '" . $_POST['menu_price'] . "')");
        $sql_insert_menu_ru = mysqli_query($con, "INSERT INTO menu_ru (menu_name, menu_description, menu_img, category, price) VALUES ('" . $_POST['menu-ru-name'] . "', '" . $_POST['menu-ru-text'] . "', '" . $newname . "', 'Горячие блюда', '" . $_POST['menu_price'] . "')");
    }
    if ($_POST['menu_category'] == 'Նախաուտեստներ') {
        $sql_insert_menu_en = mysqli_query($con, "INSERT INTO menu_en (menu_name, menu_description, menu_img, category, price) VALUES ('" . $_POST['menu-en-name'] . "', '" . $_POST['menu-en-text'] . "', '" . $newname . "', 'Appetizers', '" . $_POST['menu_price'] . "')");
        $sql_insert_menu_ru = mysqli_query($con, "INSERT INTO menu_ru (menu_name, menu_description, menu_img, category, price) VALUES ('" . $_POST['menu-ru-name'] . "', '" . $_POST['menu-ru-text'] . "', '" . $newname . "', 'Закуски', '" . $_POST['menu_price'] . "')");
    }
    if ($_POST['menu_category'] == 'Աղցաններ') {
        $sql_insert_menu_en = mysqli_query($con, "INSERT INTO menu_en (menu_name, menu_description, menu_img, category, price) VALUES ('" . $_POST['menu-en-name'] . "', '" . $_POST['menu-en-text'] . "', '" . $newname . "', 'Salads', '" . $_POST['menu_price'] . "')");
        $sql_insert_menu_ru = mysqli_query($con, "INSERT INTO menu_ru (menu_name, menu_description, menu_img, category, price) VALUES ('" . $_POST['menu-ru-name'] . "', '" . $_POST['menu-ru-text'] . "', '" . $newname . "', 'Салаты', '" . $_POST['menu_price'] . "')");
    }
    if ($_POST['menu_category'] == 'Խմիչքներ') {
        $sql_insert_menu_en = mysqli_query($con, "INSERT INTO menu_en (menu_name, menu_description, menu_img, category, price) VALUES ('" . $_POST['menu-en-name'] . "', '" . $_POST['menu-en-text'] . "', '" . $newname . "', 'Drinks', '" . $_POST['menu_price'] . "')");
        $sql_insert_menu_ru = mysqli_query($con, "INSERT INTO menu_ru (menu_name, menu_description, menu_img, category, price) VALUES ('" . $_POST['menu-ru-name'] . "', '" . $_POST['menu-ru-text'] . "', '" . $newname . "', 'Напитки', '" . $_POST['menu_price'] . "')");
    }
    if ($_POST['menu_category'] == 'Աղանդեր') {
        $sql_insert_menu_en = mysqli_query($con, "INSERT INTO menu_en (menu_name, menu_description, menu_img, category, price) VALUES ('" . $_POST['menu-en-name'] . "', '" . $_POST['menu-en-text'] . "', '" . $newname . "', 'Desserts', '" . $_POST['menu_price'] . "')");
        $sql_insert_menu_ru = mysqli_query($con, "INSERT INTO menu_ru (menu_name, menu_description, menu_img, category, price) VALUES ('" . $_POST['menu-ru-name'] . "', '" . $_POST['menu-ru-text'] . "', '" . $newname . "', 'Десерты', '" . $_POST['menu_price'] . "')");
    }
    if ($_POST['menu_category'] == 'Խավարտներ') {
        $sql_insert_menu_en = mysqli_query($con, "INSERT INTO menu_en (menu_name, menu_description, menu_img, category, price) VALUES ('" . $_POST['menu-en-name'] . "', '" . $_POST['menu-en-text'] . "', '" . $newname . "', 'Garnishes', '" . $_POST['menu_price'] . "')");
        $sql_insert_menu_ru = mysqli_query($con, "INSERT INTO menu_ru (menu_name, menu_description, menu_img, category, price) VALUES ('" . $_POST['menu-ru-name'] . "', '" . $_POST['menu-ru-text'] . "', '" . $newname . "', 'Гарниры', '" . $_POST['menu_price'] . "')");
    }
}



// make changes in whole menu
if (isset($_POST['all_menu_nameArr'])) {

    for ($i = 0; $i < count($_POST['all_menu_idArr']); $i++) {
        $sql = mysqli_query($con, "UPDATE menu_am SET menu_name='" . $_POST['all_menu_nameArr'][$i] . "', menu_description	='" . $_POST['all_menu_descArr'][$i] . "', category='" . $_POST['categoryArr'][$i] . "' WHERE id='" . $_POST['all_menu_idArr'][$i] . "' ");
        if ($_POST['categoryArr'][$i] == 'Տաք ուտեստներ') {
            $sql = mysqli_query($con, "UPDATE menu_en SET category='Hot dishes' WHERE id='" . $_POST['all_menu_idArr'][$i] . "' ");
            $sql = mysqli_query($con, "UPDATE menu_ru SET category='Горячие блюда' WHERE id='" . $_POST['all_menu_idArr'][$i] . "' ");
        }
        if ($_POST['categoryArr'][$i] == 'Նախաուտեստներ') {
            $sql = mysqli_query($con, "UPDATE menu_en SET category='Appetizers' WHERE id='" . $_POST['all_menu_idArr'][$i] . "' ");
            $sql = mysqli_query($con, "UPDATE menu_ru SET category='Закуски' WHERE id='" . $_POST['all_menu_idArr'][$i] . "' ");
        }
        if ($_POST['categoryArr'][$i] == 'Աղցաններ') {
            $sql = mysqli_query($con, "UPDATE menu_en SET category='Salads' WHERE id='" . $_POST['all_menu_idArr'][$i] . "' ");
            $sql = mysqli_query($con, "UPDATE menu_ru SET category='Салаты' WHERE id='" . $_POST['all_menu_idArr'][$i] . "' ");
        }
        if ($_POST['categoryArr'][$i] == 'Խմիչքներ') {
            $sql = mysqli_query($con, "UPDATE menu_en SET category='Drinks' WHERE id='" . $_POST['all_menu_idArr'][$i] . "' ");
            $sql = mysqli_query($con, "UPDATE menu_ru SET category='Напитки' WHERE id='" . $_POST['all_menu_idArr'][$i] . "' ");
        }
        if ($_POST['categoryArr'][$i] == 'Աղանդեր') {
            $sql = mysqli_query($con, "UPDATE menu_en SET category='Desserts' WHERE id='" . $_POST['all_menu_idArr'][$i] . "' ");
            $sql = mysqli_query($con, "UPDATE menu_ru SET category='Десерты' WHERE id='" . $_POST['all_menu_idArr'][$i] . "' ");
        }
        if ($_POST['categoryArr'][$i] == 'Խավարտներ') {
            $sql = mysqli_query($con, "UPDATE menu_en SET category='Garnishes' WHERE id='" . $_POST['all_menu_idArr'][$i] . "' ");
            $sql = mysqli_query($con, "UPDATE menu_ru SET category='Гарниры' WHERE id='" . $_POST['all_menu_idArr'][$i] . "' ");
        }
    }
}
if (isset($_POST['all_menu_nameArr_en'])) {
    for ($i = 0; $i < count($_POST['all_menu_idArr']); $i++) {
        $sql = mysqli_query($con, "UPDATE menu_en SET menu_name='" . $_POST['all_menu_nameArr_en'][$i] . "', menu_description	='" . $_POST['all_menu_descArr'][$i] . "' WHERE id='" . $_POST['all_menu_idArr'][$i] . "' ");
    }
}
if (isset($_POST['all_menu_nameArr_ru'])) {
    for ($i = 0; $i < count($_POST['all_menu_idArr']); $i++) {
        $sql = mysqli_query($con, "UPDATE menu_ru SET menu_name='" . $_POST['all_menu_nameArr_ru'][$i] . "', menu_description	='" . $_POST['all_menu_descArr'][$i] . "' WHERE id='" . $_POST['all_menu_idArr'][$i] . "' ");
    }
}



// make changes in fav menu
// change img

if (isset($_POST['fav_change_dishname'])) {
    for ($i = 0; $i < count($_POST['fav_change_dishname']); $i++) {
        if ($_FILES['menu_fav_img']['name'][$i] !== '') {
            $newvalue = explode('.', $_FILES['menu_fav_img']['name'][$i]);
            $newname = $newvalue[0] . uniqid() . "." . end($newvalue);
            $newDestination = '../img_admin/' . $newname;
            move_uploaded_file($_FILES['menu_fav_img']['tmp_name'][$i], $newDestination);

            $sql_unlink_img  = mysqli_query($con, "SELECT menu_img FROM menu_fav_am WHERE id='" . $_POST['favid'][$i] . "'");
            $row_am = mysqli_fetch_assoc($sql_unlink_img);
            // delete image
            $path = '../img_admin/' . $row_am['menu_img'];
            unlink($path);


            $sql = mysqli_query($con, "UPDATE menu_fav_am SET name_fav_menu='" . $_POST['fav_change_dishname'][$i] . "', desc_fav_menu='" . $_POST['fav_change_dishdesc'][$i] . "', menu_img='" . $newname . "' WHERE id='" . $_POST['favid'][$i] . "' ");
            $sql1 = mysqli_query($con, "UPDATE menu_fav_en SET menu_img='" . $newname . "' WHERE id='" . $_POST['favid'][$i] . "' ");
            $sql2 = mysqli_query($con, "UPDATE menu_fav_ru SET menu_img='" . $newname . "' WHERE id='" . $_POST['favid'][$i] . "' ");
        } else {
            $sql = mysqli_query($con, "UPDATE menu_fav_am SET name_fav_menu='" . $_POST['fav_change_dishname'][$i] . "', desc_fav_menu='" . $_POST['fav_change_dishdesc'][$i] . "' WHERE id='" . $_POST['favid'][$i] . "' ");
        }
    }
}


if (isset($_POST['fav_dishname_arr_en'])) {
    for ($i = 0; $i < count($_POST['fav_dishname_arr_en']); $i++) {
        $sql = mysqli_query($con, "UPDATE menu_fav_en SET name_fav_menu='" . $_POST['fav_dishname_arr_en'][$i] . "' WHERE id='" . $_POST['fav_dish_ids'][$i] . "' ");
        $sql = mysqli_query($con, "UPDATE menu_fav_en SET desc_fav_menu='" . $_POST['fav_dishtext_arr_en'][$i] . "' WHERE id='" . $_POST['fav_dish_ids'][$i] . "' ");
    }
}

if (isset($_POST['fav_dishname_arr_ru'])) {
    for ($i = 0; $i < count($_POST['fav_dishname_arr_ru']); $i++) {
        $sql = mysqli_query($con, "UPDATE menu_fav_ru SET name_fav_menu='" . $_POST['fav_dishname_arr_ru'][$i] . "' WHERE id='" . $_POST['fav_dish_ids'][$i] . "' ");
        $sql = mysqli_query($con, "UPDATE menu_fav_ru SET desc_fav_menu='" . $_POST['fav_dishtext_arr_ru'][$i] . "' WHERE id='" . $_POST['fav_dish_ids'][$i] . "' ");
    }
}


// change image all menu
if (isset($_POST['menu_Id']) && $_FILES['menu_change_img']['name'] != '') {
    $newvalue = explode('.', $_FILES['menu_change_img']['name']);
    $newname = $newvalue[0] . uniqid() . "." . end($newvalue);
    $newDestination = '../img_admin/' . $newname;
    move_uploaded_file($_FILES['menu_change_img']['tmp_name'], $newDestination);

    $sql_unlink_img  = mysqli_query($con, "SELECT menu_img FROM menu_am WHERE id='" . $_POST['menu_Id'] . "'");
    $row_am = mysqli_fetch_assoc($sql_unlink_img);
    // delete image
    $path = '../img_admin/' . $row_am['menu_img'];
    unlink($path);
    $sql = mysqli_query($con, "UPDATE menu_am SET menu_img='" . $newname . "' WHERE id='" . $_POST['menu_Id'] . "' ");
    $sql = mysqli_query($con, "UPDATE menu_en SET menu_img='" . $newname . "' WHERE id='" . $_POST['menu_Id'] . "' ");
    $sql = mysqli_query($con, "UPDATE menu_ru SET menu_img='" . $newname . "' WHERE id='" . $_POST['menu_Id'] . "' ");
}
