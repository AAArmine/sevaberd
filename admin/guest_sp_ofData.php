<?php
include "../db_configuration/configuration.php";

// -----------delete
if (isset($_POST['baseId'])) {
    $sql_unlink_img  = mysqli_query($con, "SELECT image_offers FROM guest_special_offers_am WHERE id='" . $_POST['baseId'] . "'");
    $row_am = mysqli_fetch_assoc($sql_unlink_img);
    // delete image
    $path = '../img_admin/' . $row_am['image_offers'];
    unlink($path);

    $sql_am = mysqli_query($con, "DELETE FROM guest_special_offers_am WHERE id='" . $_POST['baseId'] . "'");
    $sql_en = mysqli_query($con, "DELETE FROM guest_special_offers_en WHERE id='" . $_POST['baseId'] . "'");
    $sql_ru = mysqli_query($con, "DELETE FROM guest_special_offers_ru WHERE id='" . $_POST['baseId'] . "'");
}

// -----------display new sp offer img name
if (isset($_POST['filename'])) {
    echo $_POST['filename'];
}

// -----submit sp offer
if (isset($_POST['sp-offers-am-title'])) {

    $newvalue = explode('.', $_FILES['sp_offer_img']['name']);

    $newname = $newvalue[0] . uniqid() . "." . end($newvalue);
    $newDestination = '../img_admin/' . $newname;
    move_uploaded_file($_FILES['sp_offer_img']['tmp_name'], $newDestination);

    $sql_insert_offer_am = mysqli_query($con, "INSERT INTO guest_special_offers_am (image_offers, title_offers, text_offers) VALUES ('" . $newname . "', '" . $_POST['sp-offers-am-title'] . "', '" . $_POST['sp-offers-am-text'] . "')");
    $sql_insert_offer_en = mysqli_query($con, "INSERT INTO guest_special_offers_en (image_offers, title_offers, text_offers) VALUES ('" . $newname . "', '" . $_POST['sp-offers-en-title'] . "', '" . $_POST['sp-offers-en-text'] . "')");
    $sql_insert_offer_ru = mysqli_query($con, "INSERT INTO guest_special_offers_ru (image_offers, title_offers, text_offers) VALUES ('" . $newname . "', '" . $_POST['sp-offers-ru-title'] . "', '" . $_POST['sp-offers-ru-text'] . "')");
}

// make changes

if (isset($_POST['title_arr_am'])) {
    for ($i = 0; $i < count($_POST['title_arr_am']); $i++) {
        $sql = mysqli_query($con, "UPDATE guest_special_offers_am SET title_offers='" . $_POST['title_arr_am'][$i] . "' WHERE id='" . $_POST['sp_of_ids'][$i] . "' ");
        $sql = mysqli_query($con, "UPDATE guest_special_offers_am SET text_offers='" . $_POST['text_arr_am'][$i] . "' WHERE id='" . $_POST['sp_of_ids'][$i] . "' ");
    }
}
if (isset($_POST['title_arr_en'])) {
    for ($i = 0; $i < count($_POST['title_arr_en']); $i++) {
        $sql = mysqli_query($con, "UPDATE guest_special_offers_en SET title_offers='" . $_POST['title_arr_en'][$i] . "' WHERE id='" . $_POST['sp_of_ids'][$i] . "' ");
        $sql = mysqli_query($con, "UPDATE guest_pecial_offers_en SET text_offers='" . $_POST['text_arr_en'][$i] . "' WHERE id='" . $_POST['sp_of_ids'][$i] . "' ");
    }
    //    print_r($_POST['title_arr_en']);
}


if (isset($_POST['title_arr_ru'])) {
    for ($i = 0; $i < count($_POST['title_arr_ru']); $i++) {
        $sql = mysqli_query($con, "UPDATE guest_special_offers_ru SET title_offers='" . $_POST['title_arr_ru'][$i] . "' WHERE id='" . $_POST['sp_of_ids'][$i] . "' ");
        $sql = mysqli_query($con, "UPDATE guest_special_offers_ru SET text_offers='" . $_POST['text_arr_ru'][$i] . "' WHERE id='" . $_POST['sp_of_ids'][$i] . "' ");
    }
}
