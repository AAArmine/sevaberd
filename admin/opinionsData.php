<?php
include "../db_configuration/configuration.php";

// -----------display new opinion img name
if (isset($_POST['filename'])) {
    echo $_POST['filename'];
}

// -----add opinion

if (isset($_POST['opinion-am-name'])) {
    $newvalue = explode('.', $_FILES['opinions_img']['name']);

    $newname = $newvalue[0] . uniqid() . "." . end($newvalue);
    $newDestination = '../img_admin/' . $newname;
    move_uploaded_file($_FILES['opinions_img']['tmp_name'], $newDestination);

    $sql_insert_opinions_am = mysqli_query($con, "INSERT INTO opinions_am (image_op, name_op, opinion) VALUES ('" . $newname . "', '" . $_POST['opinion-am-name'] . "', '" . $_POST['opinion-am-text'] . "')");
    $sql_insert_opinions_en = mysqli_query($con, "INSERT INTO opinions_en (image_op, name_op, opinion) VALUES ('" . $newname . "', '" . $_POST['opinion-en-name'] . "', '" . $_POST['opinion-en-text'] . "')");
    $sql_insert_opinions_ru = mysqli_query($con, "INSERT INTO opinions_ru (image_op, name_op, opinion) VALUES ('" . $newname . "', '" . $_POST['opinion-ru-name'] . "', '" . $_POST['opinion-ru-text'] . "')");
}


// -----------delete
if (isset($_POST['baseId'])) {

    $sql_unlink_img  = mysqli_query($con, "SELECT image_op FROM opinions_am WHERE id='" . $_POST['baseId'] . "'");

    $row_am = mysqli_fetch_assoc($sql_unlink_img);
    // delete image
    $path = '../img_admin/' . $row_am['image_op'];
    unlink($path);

    $sql_am = mysqli_query($con, "DELETE FROM opinions_am WHERE id='" . $_POST['baseId'] . "'");
    $sql_en = mysqli_query($con, "DELETE FROM opinions_en WHERE id='" . $_POST['baseId'] . "'");
    $sql_ru = mysqli_query($con, "DELETE FROM opinions_ru WHERE id='" . $_POST['baseId'] . "'");
}


// -----------make changes

if (isset($_POST['title_arr_am'])) {
    for ($i = 0; $i < count($_POST['title_arr_am']); $i++) {
        $sql = mysqli_query($con, "UPDATE opinions_am SET name_op='" . $_POST['title_arr_am'][$i] . "' WHERE id='" . $_POST['opinions_ids'][$i] . "' ");
        $sql = mysqli_query($con, "UPDATE opinions_am SET opinion='" . $_POST['text_arr_am'][$i] . "' WHERE id='" . $_POST['opinions_ids'][$i] . "' ");
    }
}
if (isset($_POST['title_arr_en'])) {
    for ($i = 0; $i < count($_POST['title_arr_en']); $i++) {
        $sql = mysqli_query($con, "UPDATE opinions_en SET name_op='" . $_POST['title_arr_en'][$i] . "' WHERE id='" . $_POST['opinions_ids'][$i] . "' ");
        $sql = mysqli_query($con, "UPDATE opinions_en SET opinion='" . $_POST['text_arr_en'][$i] . "' WHERE id='" . $_POST['opinions_ids'][$i] . "' ");
    }
}

if (isset($_POST['title_arr_ru'])) {
    for ($i = 0; $i < count($_POST['title_arr_ru']); $i++) {
        $sql = mysqli_query($con, "UPDATE opinions_ru SET name_op='" . $_POST['title_arr_ru'][$i] . "' WHERE id='" . $_POST['opinions_ids'][$i] . "' ");
        $sql = mysqli_query($con, "UPDATE opinions_ru SET opinion='" . $_POST['text_arr_ru'][$i] . "' WHERE id='" . $_POST['opinions_ids'][$i] . "' ");
    }
}
