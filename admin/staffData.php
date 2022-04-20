<?php
include "../db_configuration/configuration.php";

// -----------display new staff img name
if (isset($_POST['filename'])) {
    echo $_POST['filename'];
}

// -----add staff

if (isset($_POST['staff-am-name'])) {
    $newvalue = explode('.', $_FILES['staff_img']['name']);

    $newname = $newvalue[0] . uniqid() . "." . end($newvalue);
    $newDestination = '../img_admin/' . $newname;
    move_uploaded_file($_FILES['staff_img']['tmp_name'], $newDestination);

    $sql_insert_staff_am = mysqli_query($con, "INSERT INTO staff_am (image_st, name_st, position) VALUES ('" . $newname . "', '" . $_POST['staff-am-name'] . "', '" . $_POST['staff-am-text'] . "')");
    $sql_insert_staff_en = mysqli_query($con, "INSERT INTO staff_en (image_st, name_st, position) VALUES ('" . $newname . "', '" . $_POST['staff-en-name'] . "', '" . $_POST['staff-en-text'] . "')");
    $sql_insert_stinions_ru = mysqli_query($con, "INSERT INTO staff_ru (image_st, name_st, position) VALUES ('" . $newname . "', '" . $_POST['staff-ru-name'] . "', '" . $_POST['staff-ru-text'] . "')");
}


// -----------delete
if (isset($_POST['baseId'])) {

    $sql_unlink_img  = mysqli_query($con, "SELECT image_st FROM staff_am WHERE id='" . $_POST['baseId'] . "'");

    $row_am = mysqli_fetch_assoc($sql_unlink_img);
    // delete image
    $path = '../img_admin/' . $row_am['image_st'];
    unlink($path);

    $sql_am = mysqli_query($con, "DELETE FROM staff_am WHERE id='" . $_POST['baseId'] . "'");
    $sql_en = mysqli_query($con, "DELETE FROM staff_en WHERE id='" . $_POST['baseId'] . "'");
    $sql_ru = mysqli_query($con, "DELETE FROM staff_ru WHERE id='" . $_POST['baseId'] . "'");
}


// -----------make changes

if (isset($_POST['title_arr_am'])) {
    for ($i = 0; $i < count($_POST['title_arr_am']); $i++) {
        $sql = mysqli_query($con, "UPDATE staff_am SET name_st='" . $_POST['title_arr_am'][$i] . "' WHERE id='" . $_POST['staff_ids'][$i] . "' ");
        $sql = mysqli_query($con, "UPDATE staff_am SET position='" . $_POST['text_arr_am'][$i] . "' WHERE id='" . $_POST['staff_ids'][$i] . "' ");
    }
}
if (isset($_POST['title_arr_en'])) {
    for ($i = 0; $i < count($_POST['title_arr_en']); $i++) {
        $sql = mysqli_query($con, "UPDATE staff_en SET name_st='" . $_POST['title_arr_en'][$i] . "' WHERE id='" . $_POST['staff_ids'][$i] . "' ");
        $sql = mysqli_query($con, "UPDATE staff_en SET position='" . $_POST['text_arr_en'][$i] . "' WHERE id='" . $_POST['staff_ids'][$i] . "' ");
    }
}

if (isset($_POST['title_arr_ru'])) {
    for ($i = 0; $i < count($_POST['title_arr_ru']); $i++) {
        $sql = mysqli_query($con, "UPDATE staff_ru SET name_st='" . $_POST['title_arr_ru'][$i] . "' WHERE id='" . $_POST['staff_ids'][$i] . "' ");
        $sql = mysqli_query($con, "UPDATE staff_ru SET position='" . $_POST['text_arr_ru'][$i] . "' WHERE id='" . $_POST['staff_ids'][$i] . "' ");
    }
}
