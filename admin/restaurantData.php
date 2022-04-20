<?php
include "../db_configuration/configuration.php";

if (isset($_POST['rest_main_title_am']) || isset($_POST['rest_main_text_am'])) {
    $sql = mysqli_query($con, "UPDATE restaurant_main_am set title_main='" . $_POST['rest_main_title_am'] . "', text_main= '" . $_POST['rest_main_text_am'] . "' ");
}

if (isset($_POST['rest_main_title_en']) || isset($_POST['rest_main_text_en'])) {
    $sql = mysqli_query($con, "UPDATE restaurant_main_en set title_main='" . $_POST['rest_main_title_en'] . "', text_main= '" . $_POST['rest_main_text_en'] . "' ");
}

if (isset($_POST['rest_main_title_ru']) || isset($_POST['rest_main_text_ru'])) {
    $sql = mysqli_query($con, "UPDATE restaurant_main_ru set title_main='" . $_POST['rest_main_title_ru'] . "', text_main= '" . $_POST['rest_main_text_ru'] . "'");
}

// restaurant about

if (isset($_POST['rest_about_title_am']) || isset($_POST['rest_about_text_am'])) {
    $sql = mysqli_query($con, "UPDATE restaurant_about_am set title_about='" . $_POST['rest_about_title_am'] . "', text_about= '" . $_POST['rest_about_text_am'] . "' ");
}

if (isset($_POST['rest_about_title_en']) || isset($_POST['rest_about_text_en'])) {
    $sql = mysqli_query($con, "UPDATE restaurant_about_en set title_about='" . $_POST['rest_about_title_en'] . "', text_about= '" . $_POST['rest_about_text_en'] . "' ");
}

if (isset($_POST['rest_about_title_ru']) || isset($_POST['rest_about_text_ru'])) {
    $sql = mysqli_query($con, "UPDATE restaurant_about_ru set title_about='" . $_POST['rest_about_title_ru'] . "', text_about= '" . $_POST['rest_about_text_ru'] . "'");
}
//restaurant advantages
if (isset($_POST['title_adv_arr_am'])) {
    for ($i = 0; $i < count($_POST['title_adv_arr_am']); $i++) {
        $sql = mysqli_query($con, "UPDATE restaurant_adv_am SET title_adv='" . $_POST['title_adv_arr_am'][$i] . "', text_adv='" . $_POST['text_adv_arr_am'][$i] . "' WHERE id='" . $_POST['adv_ids_arr'][$i] . "' ");
    }
}
if (isset($_POST['title_adv_arr_en'])) {
    for ($i = 0; $i < count($_POST['title_adv_arr_en']); $i++) {
        $sql = mysqli_query($con, "UPDATE restaurant_adv_en SET title_adv='" . $_POST['title_adv_arr_en'][$i] . "', text_adv='" . $_POST['text_adv_arr_en'][$i] . "' WHERE id='" . $_POST['adv_ids_arr'][$i] . "' ");
    }
}

if (isset($_POST['title_adv_arr_ru'])) {
    for ($i = 0; $i < count($_POST['title_adv_arr_ru']); $i++) {
        $sql = mysqli_query($con, "UPDATE restaurant_adv_ru SET title_adv='" . $_POST['title_adv_arr_ru'][$i] . "', text_adv='" . $_POST['text_adv_arr_ru'][$i] . "' WHERE id='" . $_POST['adv_ids_arr'][$i] . "' ");
    }
}

//your events with us
if (isset($_POST['restaurant_events_name'])) {

    for ($i = 0; $i < count($_POST['restaurant_events_name']); $i++) {

        if ($_FILES['restaurant_events_img']['name'][$i] !== '') {

            $newvalue = explode('.', $_FILES['restaurant_events_img']['name'][$i]);
            $newname = $newvalue[0] . uniqid() . "." . end($newvalue);
            $newDestination = '../img_admin/' . $newname;
            move_uploaded_file($_FILES['restaurant_events_img']['tmp_name'][$i], $newDestination);
            // echo $_POST['eventid'];
            $sql_unlink_img  = mysqli_query($con, "SELECT img_event FROM restaurant_events_am WHERE id='" . $_POST['eventid'][$i] . "'");
            $row_am = mysqli_fetch_assoc($sql_unlink_img);
            // delete image
            $path = '../img_admin/' . $row_am['img_event'];
            unlink($path);


            $sql = mysqli_query($con, "UPDATE restaurant_events_am SET name_event='" . $_POST['restaurant_events_name'][$i] . "', desc_event='" . $_POST['restaurant_events_desc'][$i] . "', img_event='" . $newname . "' WHERE id='" . $_POST['eventid'][$i] . "' ");
            $sql1 = mysqli_query($con, "UPDATE restaurant_events_en SET img_event='" . $newname . "' WHERE id='" . $_POST['eventid'][$i] . "' ");
            $sql2 = mysqli_query($con, "UPDATE restaurant_events_ru SET img_event='" . $newname . "' WHERE id='" . $_POST['eventid'][$i] . "' ");
        } else {

            $sql = mysqli_query($con, "UPDATE restaurant_events_am SET name_event='" . $_POST['restaurant_events_name'][$i] . "', desc_event='" . $_POST['restaurant_events_desc'][$i] . "' WHERE id='" . $_POST['eventid'][$i] . "' ");
        }
    }
}

if (isset($_POST['rest_events_title_arr_en'])) {
    for($i=0; $i<3; $i++){
        $k = $i + 1;
        $sql = mysqli_query($con, "UPDATE restaurant_events_en SET name_event='". $_POST['rest_events_title_arr_en'][$i]."', desc_event='".$_POST['rest_events_text_arr_en'][$i]."' WHERE id='".$k."' ");
    }

}

if (isset($_POST['rest_events_title_arr_ru'])) {
    for($i=0; $i<3; $i++){
        $k = $i + 1;
        $sql = mysqli_query($con, "UPDATE restaurant_events_ru SET name_event='". $_POST['rest_events_title_arr_ru'][$i]."', desc_event='".$_POST['rest_events_text_arr_ru'][$i]."' WHERE id='".$k."' ");
    }

}
// if (isset($_POST['fav_dishname_arr_en'])) {
//     for ($i = 0; $i < count($_POST['fav_dishname_arr_en']); $i++) {
//         $sql = mysqli_query($con, "UPDATE menu_fav_en SET name_fav_menu='" . $_POST['fav_dishname_arr_en'][$i] . "' WHERE id='" . $_POST['fav_dish_ids'][$i] . "' ");
//         $sql = mysqli_query($con, "UPDATE menu_fav_en SET desc_fav_menu='" . $_POST['fav_dishtext_arr_en'][$i] . "' WHERE id='" . $_POST['fav_dish_ids'][$i] . "' ");
//     }
// }

// if (isset($_POST['fav_dishname_arr_ru'])) {
//     for ($i = 0; $i < count($_POST['fav_dishname_arr_ru']); $i++) {
//         $sql = mysqli_query($con, "UPDATE menu_fav_ru SET name_fav_menu='" . $_POST['fav_dishname_arr_ru'][$i] . "' WHERE id='" . $_POST['fav_dish_ids'][$i] . "' ");
//         $sql = mysqli_query($con, "UPDATE menu_fav_ru SET desc_fav_menu='" . $_POST['fav_dishtext_arr_ru'][$i] . "' WHERE id='" . $_POST['fav_dish_ids'][$i] . "' ");
//     }
// }
