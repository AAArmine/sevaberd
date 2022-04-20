<?php
include "../db_configuration/configuration.php";

// -----------delete
if (isset($_POST['baseId'])) {

    $sql_unlink_img  = mysqli_query($con, "SELECT image FROM services_am WHERE id='" . $_POST['baseId'] . "'");

    $row_am = mysqli_fetch_assoc($sql_unlink_img);
    // delete image
    $path = '../img_admin/' . $row_am['image'];
    unlink($path);

    $sql_am = mysqli_query($con, "DELETE FROM services_am WHERE id='" . $_POST['baseId'] . "'");
    $sql_en = mysqli_query($con, "DELETE FROM services_en WHERE id='" . $_POST['baseId'] . "'");
    $sql_ru = mysqli_query($con, "DELETE FROM services_ru WHERE id='" . $_POST['baseId'] . "'");
}

// -----------display new services img name
if (isset($_POST['filename'])) {
    echo $_POST['filename'];
}
// -----add services

if (isset($_POST['services-am-title'])) {
    $newvalue = explode('.', $_FILES['services_img']['name']);

    $newname = $newvalue[0] . uniqid() . "." . end($newvalue);
    $newDestination = '../img_admin/' . $newname;
    move_uploaded_file($_FILES['services_img']['tmp_name'], $newDestination);

    $sql_insert_services_am = mysqli_query($con, "INSERT INTO services_am (image, title, text) VALUES ('" . $newname . "', '" . $_POST['services-am-title'] . "', '" . $_POST['services-am-text'] . "')");
    $sql_insert_services_en = mysqli_query($con, "INSERT INTO services_en (image, title, text) VALUES ('" . $newname . "', '" . $_POST['services-en-title'] . "', '" . $_POST['services-en-text'] . "')");
    $sql_insert_services_ru = mysqli_query($con, "INSERT INTO services_ru (image, title, text) VALUES ('" . $newname . "', '" . $_POST['services-ru-title'] . "', '" . $_POST['services-ru-text'] . "')");
    echo $_POST['services-am-title'];
}

// make changes

if (isset($_POST['title_arr_am'])) {
    for ($i = 0; $i < count($_POST['title_arr_am']); $i++) {
        $sql = mysqli_query($con, "UPDATE services_am SET title='" . $_POST['title_arr_am'][$i] . "', text='" . $_POST['text_arr_am'][$i] . "' WHERE id='" . $_POST['services_ids'][$i] . "' ");
    }
}
if (isset($_POST['title_arr_en'])) {
    for ($i = 0; $i < count($_POST['title_arr_en']); $i++) {
        $sql = mysqli_query($con, "UPDATE services_en SET title='" . $_POST['title_arr_en'][$i] . "', text='" . $_POST['text_arr_en'][$i] . "' WHERE id='" . $_POST['services_ids'][$i] . "' ");
    }
}


if (isset($_POST['title_arr_ru'])) {
    for ($i = 0; $i < count($_POST['title_arr_ru']); $i++) {
        $sql = mysqli_query($con, "UPDATE services_ru SET title='" . $_POST['title_arr_ru'][$i] . "', text='" . $_POST['text_arr_ru'][$i] . "' WHERE id='" . $_POST['services_ids'][$i] . "' ");
    }
}
