<?php
include "../db_configuration/configuration.php";

// -----------delete
if (isset($_POST['baseId'])) {

    $sql_unlink_img  = mysqli_query($con, "SELECT image_tourism FROM tourism_am WHERE id='" . $_POST['baseId'] . "'");

    $row_am = mysqli_fetch_assoc($sql_unlink_img);
    // delete image
    $path = '../img_admin/' . $row_am['image_tourism'];
    unlink($path);

    $sql_am = mysqli_query($con, "DELETE FROM tourism_am WHERE id='" . $_POST['baseId'] . "'");
    $sql_en = mysqli_query($con, "DELETE FROM tourism_en WHERE id='" . $_POST['baseId'] . "'");
    $sql_ru = mysqli_query($con, "DELETE FROM tourism_ru WHERE id='" . $_POST['baseId'] . "'");
}

// -----------display new tourism img name
if (isset($_POST['filename'])) {
    echo $_POST['filename'];
}
// -----add tourism

if (isset($_POST['tourism-am-title'])) {
    $newvalue = explode('.', $_FILES['tourism_img']['name']);

    $newname = $newvalue[0] . uniqid() . "." . end($newvalue);
    $newDestination = '../img_admin/' . $newname;
    move_uploaded_file($_FILES['tourism_img']['tmp_name'], $newDestination);

    $sql_insert_tourism_am = mysqli_query($con, "INSERT INTO tourism_am (image_tourism, title_tourism, text_tourism) VALUES ('" . $newname . "', '" . $_POST['tourism-am-title'] . "', '" . $_POST['tourism-am-text'] . "')");
    $sql_insert_tourism_en = mysqli_query($con, "INSERT INTO tourism_en (image_tourism, title_tourism, text_tourism) VALUES ('" . $newname . "', '" . $_POST['tourism-en-title'] . "', '" . $_POST['tourism-en-text'] . "')");
    $sql_insert_tourism_ru = mysqli_query($con, "INSERT INTO tourism_ru (image_tourism, title_tourism, text_tourism) VALUES ('" . $newname . "', '" . $_POST['tourism-ru-title'] . "', '" . $_POST['tourism-ru-text'] . "')");
    echo $_POST['tourism-am-title'];
}

// make changes

if (isset($_POST['title_arr_am'])) {
    for ($i = 0; $i < count($_POST['title_arr_am']); $i++) {
        $sql = mysqli_query($con, "UPDATE tourism_am SET title_tourism='" . $_POST['title_arr_am'][$i] . "' WHERE id='" . $_POST['tourism_ids'][$i] . "' ");
        $sql = mysqli_query($con, "UPDATE tourism_am SET text_tourism='" . $_POST['text_arr_am'][$i] . "' WHERE id='" . $_POST['tourism_ids'][$i] . "' ");
    }
}
if (isset($_POST['title_arr_en'])) {
    for ($i = 0; $i < count($_POST['title_arr_en']); $i++) {
        $sql = mysqli_query($con, "UPDATE tourism_en SET title_tourism='" . $_POST['title_arr_en'][$i] . "' WHERE id='" . $_POST['tourism_ids'][$i] . "' ");
        $sql = mysqli_query($con, "UPDATE tourism_en SET text_tourism='" . $_POST['text_arr_en'][$i] . "' WHERE id='" . $_POST['tourism_ids'][$i] . "' ");
    }
    //    print_r($_POST['title_arr_en']);
}


if (isset($_POST['title_arr_ru'])) {
    for ($i = 0; $i < count($_POST['title_arr_ru']); $i++) {
        $sql = mysqli_query($con, "UPDATE tourism_ru SET title_tourism='" . $_POST['title_arr_ru'][$i] . "' WHERE id='" . $_POST['tourism_ids'][$i] . "' ");
        $sql = mysqli_query($con, "UPDATE tourism_ru SET text_tourism='" . $_POST['text_arr_ru'][$i] . "' WHERE id='" . $_POST['tourism_ids'][$i] . "' ");
    }
}
