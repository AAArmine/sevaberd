<?php
include "../db_configuration/configuration.php";

// -----------delete
if (isset($_POST['baseId'])) {
    $sql_unlink_img  = mysqli_query($con, "SELECT image FROM news_am WHERE id='" . $_POST['baseId'] . "'");
    $row_am = mysqli_fetch_assoc($sql_unlink_img);
    // delete image
    $path = '../img_admin/' . $row_am['image'];
    unlink($path);

    $sql_am = mysqli_query($con, "DELETE FROM news_am WHERE id='" . $_POST['baseId'] . "'");
    $sql_en = mysqli_query($con, "DELETE FROM news_en WHERE id='" . $_POST['baseId'] . "'");
    $sql_ru = mysqli_query($con, "DELETE FROM news_ru WHERE id='" . $_POST['baseId'] . "'");
}

// -----------display new news img name
if (isset($_POST['filename'])) {
    echo $_POST['filename'];
}

// -----submit news
if (isset($_POST['newss-am-title'])) {

    $newvalue = explode('.', $_FILES['news_img']['name']);

    $newname = $newvalue[0] . uniqid() . "." . end($newvalue);
    $newDestination = '../img_admin/' . $newname;
    move_uploaded_file($_FILES['news_img']['tmp_name'], $newDestination);
    if ($_POST['news_category'] == 'category 1') {
        $sql_insert_news_am = mysqli_query($con, "INSERT INTO news_am (image, title, text, category) VALUES ('" . $newname . "', '" . $_POST['newss-am-title'] . "', '" . $_POST['newss-am-text'] . "', 'Հայաստան')");
        $sql_insert_news_en = mysqli_query($con, "INSERT INTO news_en (image, title, text, category) VALUES ('" . $newname . "', '" . $_POST['newss-en-title'] . "', '" . $_POST['newss-en-text'] . "', 'Armenia')");
        $sql_insert_news_ru = mysqli_query($con, "INSERT INTO news_ru (image, title, text, category) VALUES ('" . $newname . "', '" . $_POST['newss-ru-title'] . "', '" . $_POST['newss-ru-text'] . "', 'Армения')");
    }
    if ($_POST['news_category'] == 'category 2') {
        $sql_insert_news_am = mysqli_query($con, "INSERT INTO news_am (image, title, text, category) VALUES ('" . $newname . "', '" . $_POST['newss-am-title'] . "', '" . $_POST['newss-am-text'] . "', 'Կոտայքի մարզ')");
        $sql_insert_news_en = mysqli_query($con, "INSERT INTO news_en (image, title, text, category) VALUES ('" . $newname . "', '" . $_POST['newss-en-title'] . "', '" . $_POST['newss-en-text'] . "', 'Kotayk Region')");
        $sql_insert_news_ru = mysqli_query($con, "INSERT INTO news_ru (image, title, text, category) VALUES ('" . $newname . "', '" . $_POST['newss-ru-title'] . "', '" . $_POST['newss-ru-text'] . "', 'Котайкская область')");
    }
    if ($_POST['news_category'] == 'category 3') {
        $sql_insert_news_am = mysqli_query($con, "INSERT INTO news_am (image, title, text, category) VALUES ('" . $newname . "', '" . $_POST['newss-am-title'] . "', '" . $_POST['newss-am-text'] . "', 'Սևաբերդ')");
        $sql_insert_news_en = mysqli_query($con, "INSERT INTO news_en (image, title, text, category) VALUES ('" . $newname . "', '" . $_POST['newss-en-title'] . "', '" . $_POST['newss-en-text'] . "', 'Sevaberd')");
        $sql_insert_news_ru = mysqli_query($con, "INSERT INTO news_ru (image, title, text, category) VALUES ('" . $newname . "', '" . $_POST['newss-ru-title'] . "', '" . $_POST['newss-ru-text'] . "', 'Севаберд')");
    }
    if ($_POST['news_category'] == 'category 4') {
        $sql_insert_news_am = mysqli_query($con, "INSERT INTO news_am (image, title, text, category) VALUES ('" . $newname . "', '" . $_POST['newss-am-title'] . "', '" . $_POST['newss-am-text'] . "', 'Պատմամշակութային վայրեր')");
        $sql_insert_news_en = mysqli_query($con, "INSERT INTO news_en (image, title, text, category) VALUES ('" . $newname . "', '" . $_POST['newss-en-title'] . "', '" . $_POST['newss-en-text'] . "', 'Historical and cultural places')");
        $sql_insert_news_ru = mysqli_query($con, "INSERT INTO news_ru (image, title, text, category) VALUES ('" . $newname . "', '" . $_POST['newss-ru-title'] . "', '" . $_POST['newss-ru-text'] . "', 'Исторические и культурные объекты')");
    }
    if ($_POST['news_category'] == 'category 5') {
        $sql_insert_news_am = mysqli_query($con, "INSERT INTO news_am (image, title, text, category) VALUES ('" . $newname . "', '" . $_POST['newss-am-title'] . "', '" . $_POST['newss-am-text'] . "', 'Ժամանցի վայրեր')");
        $sql_insert_news_en = mysqli_query($con, "INSERT INTO news_en (image, title, text, category) VALUES ('" . $newname . "', '" . $_POST['newss-en-title'] . "', '" . $_POST['newss-en-text'] . "', 'Entertainment')");
        $sql_insert_news_ru = mysqli_query($con, "INSERT INTO news_ru (image, title, text, category) VALUES ('" . $newname . "', '" . $_POST['newss-ru-title'] . "', '" . $_POST['newss-ru-text'] . "', 'Развлекательные заведения')");
    }
}

// make changes


if (isset($_POST['title_arr_am'])) {
    for ($i = 0; $i < count($_POST['title_arr_am']); $i++) {
        if ($_POST['category_arr'][$i] == "category 1") {
            $sql_am = mysqli_query($con, "UPDATE news_am SET category='Հայաստան', text='" . $_POST['text_arr_am'][$i] . "', title='" . $_POST['title_arr_am'][$i] . "', date_current='" . $_POST['date_arr'][$i] . "'   WHERE id='" . $_POST['news_ids'][$i] . "' ");
            $sql_en = mysqli_query($con, "UPDATE news_en SET category='Armenia', date_current='" . $_POST['date_arr'][$i] . "' WHERE id='" . $_POST['news_ids'][$i] . "' ");
            $sql_ru = mysqli_query($con, "UPDATE news_ru SET category='Армения', date_current='" . $_POST['date_arr'][$i] . "' WHERE id='" . $_POST['news_ids'][$i] . "' ");
        } elseif ($_POST['category_arr'][$i] == "category 2") {
            $sql_am = mysqli_query($con, "UPDATE news_am SET category='Կոտայքի մարզ', text='" . $_POST['text_arr_am'][$i] . "', title='" . $_POST['title_arr_am'][$i] . "', date_current='" . $_POST['date_arr'][$i] . "'   WHERE id='" . $_POST['news_ids'][$i] . "' ");
            $sql_en = mysqli_query($con, "UPDATE news_en SET category='Kotayk Region', date_current='" . $_POST['date_arr'][$i] . "' WHERE id='" . $_POST['news_ids'][$i] . "' ");
            $sql_ru = mysqli_query($con, "UPDATE news_ru SET category='Котайкская область', date_current='" . $_POST['date_arr'][$i] . "' WHERE id='" . $_POST['news_ids'][$i] . "' ");
        } elseif ($_POST['category_arr'][$i] == "category 3") {
            $sql_am = mysqli_query($con, "UPDATE news_am SET category='Սևաբերդ', text='" . $_POST['text_arr_am'][$i] . "', title='" . $_POST['title_arr_am'][$i] . "', date_current='" . $_POST['date_arr'][$i] . "'   WHERE id='" . $_POST['news_ids'][$i] . "' ");
            $sql_en = mysqli_query($con, "UPDATE news_en SET category='Sevaberd', date_current='" . $_POST['date_arr'][$i] . "' WHERE id='" . $_POST['news_ids'][$i] . "' ");
            $sql_ru = mysqli_query($con, "UPDATE news_ru SET category='Севаберд', date_current='" . $_POST['date_arr'][$i] . "' WHERE id='" . $_POST['news_ids'][$i] . "' ");
        } elseif ($_POST['category_arr'][$i] == "category 4") {
            $sql_am = mysqli_query($con, "UPDATE news_am SET category='Պատմամշակութային վայրեր', text='" . $_POST['text_arr_am'][$i] . "', title='" . $_POST['title_arr_am'][$i] . "', date_current='" . $_POST['date_arr'][$i] . "'   WHERE id='" . $_POST['news_ids'][$i] . "' ");
            $sql_en = mysqli_query($con, "UPDATE news_en SET category='Historical and cultural places', date_current='" . $_POST['date_arr'][$i] . "' WHERE id='" . $_POST['news_ids'][$i] . "' ");
            $sql_ru = mysqli_query($con, "UPDATE news_ru SET category='Исторические и культурные объекты', date_current='" . $_POST['date_arr'][$i] . "' WHERE id='" . $_POST['news_ids'][$i] . "' ");
        } elseif ($_POST['category_arr'][$i] == "category 5") {
            $sql_am = mysqli_query($con, "UPDATE news_am SET category='Ժամանցի վայրեր', text='" . $_POST['text_arr_am'][$i] . "', title='" . $_POST['title_arr_am'][$i] . "', date_current='" . $_POST['date_arr'][$i] . "'   WHERE id='" . $_POST['news_ids'][$i] . "' ");
            $sql_en = mysqli_query($con, "UPDATE news_en SET category='Entertainment', date_current='" . $_POST['date_arr'][$i] . "' WHERE id='" . $_POST['news_ids'][$i] . "' ");
            $sql_ru = mysqli_query($con, "UPDATE news_ru SET category='Развлекательные заведения', date_current='" . $_POST['date_arr'][$i] . "' WHERE id='" . $_POST['news_ids'][$i] . "' ");
        }
    }
}



if (isset($_POST['title_arr_en'])) {
    for ($i = 0; $i < count($_POST['title_arr_en']); $i++) {
        $sql = mysqli_query($con, "UPDATE news_en SET title='" . $_POST['title_arr_en'][$i] . "' WHERE id='" . $_POST['news_ids'][$i] . "' ");
        $sql = mysqli_query($con, "UPDATE news_en SET text='" . $_POST['text_arr_en'][$i] . "' WHERE id='" . $_POST['news_ids'][$i] . "' ");
    }
    //    print_r($_POST['title_arr_en']);
}


if (isset($_POST['title_arr_ru'])) {
    for ($i = 0; $i < count($_POST['title_arr_ru']); $i++) {
        $sql = mysqli_query($con, "UPDATE news_ru SET title='" . $_POST['title_arr_ru'][$i] . "' WHERE id='" . $_POST['news_ids'][$i] . "' ");
        $sql = mysqli_query($con, "UPDATE news_ru SET text='" . $_POST['text_arr_ru'][$i] . "' WHERE id='" . $_POST['news_ids'][$i] . "' ");
    }
}
