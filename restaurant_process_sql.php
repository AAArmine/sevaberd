<?php
$sql_restaurant_main_am = "SELECT * from restaurant_main_am where id='1'";
$result_restaurant_main_am = mysqli_query($con, $sql_restaurant_main_am);
if (mysqli_num_rows($result_restaurant_main_am)) {
    $row_main_am = mysqli_fetch_assoc($result_restaurant_main_am);
}

$sql_restaurant_main_en = "SELECT * from restaurant_main_en where id='1'";
$result_restaurant_main_en = mysqli_query($con, $sql_restaurant_main_en);
if (mysqli_num_rows($result_restaurant_main_en)) {
    $row_main_en = mysqli_fetch_assoc($result_restaurant_main_en);
}

$sql_restaurant_main_ru = "SELECT * from restaurant_main_ru where id='1'";
$result_restaurant_main_ru = mysqli_query($con, $sql_restaurant_main_ru);
if (mysqli_num_rows($result_restaurant_main_ru)) {
    $row_main_ru = mysqli_fetch_assoc($result_restaurant_main_ru);
}


//  restourant about
$sql_restaurant_about_am = "SELECT * from restaurant_about_am where id='1'";
$result_restaurant_about_am = mysqli_query($con, $sql_restaurant_about_am);
if (mysqli_num_rows($result_restaurant_about_am)) {
    $row_about_am = mysqli_fetch_assoc($result_restaurant_about_am);
}

$sql_restaurant_about_en = "SELECT * from restaurant_about_en where id='1'";
$result_restaurant_about_en = mysqli_query($con, $sql_restaurant_about_en);
if (mysqli_num_rows($result_restaurant_about_en)) {
    $row_about_en = mysqli_fetch_assoc($result_restaurant_about_en);
}

$sql_restaurant_about_ru = "SELECT * from restaurant_about_ru where id='1'";
$result_restaurant_about_ru = mysqli_query($con, $sql_restaurant_about_ru);
if (mysqli_num_rows($result_restaurant_about_ru)) {
    $row_about_ru = mysqli_fetch_assoc($result_restaurant_about_ru);
}


//restaurant advantages
// am
$sql_restaurant_adv_am1 = "SELECT * from restaurant_adv_am where id='1'";
$result_restaurant_adv_am1 = mysqli_query($con, $sql_restaurant_adv_am1);
if (mysqli_num_rows($result_restaurant_adv_am1)) {
    $row_adv_am1 = mysqli_fetch_assoc($result_restaurant_adv_am1);
}
$sql_restaurant_adv_am2 = "SELECT * from restaurant_adv_am where id='2'";
$result_restaurant_adv_am2 = mysqli_query($con, $sql_restaurant_adv_am2);
if (mysqli_num_rows($result_restaurant_adv_am2)) {
    $row_adv_am2 = mysqli_fetch_assoc($result_restaurant_adv_am2);
}
$sql_restaurant_adv_am3 = "SELECT * from restaurant_adv_am where id='3'";
$result_restaurant_adv_am3 = mysqli_query($con, $sql_restaurant_adv_am3);
if (mysqli_num_rows($result_restaurant_adv_am3)) {
    $row_adv_am3 = mysqli_fetch_assoc($result_restaurant_adv_am3);
}
$sql_restaurant_adv_am4 = "SELECT * from restaurant_adv_am where id='4'";
$result_restaurant_adv_am4 = mysqli_query($con, $sql_restaurant_adv_am4);
if (mysqli_num_rows($result_restaurant_adv_am4)) {
    $row_adv_am4 = mysqli_fetch_assoc($result_restaurant_adv_am4);
}
// en
$sql_restaurant_adv_en1 = "SELECT * from restaurant_adv_en where id='1'";
$result_restaurant_adv_en1 = mysqli_query($con, $sql_restaurant_adv_en1);
if (mysqli_num_rows($result_restaurant_adv_en1)) {
    $row_adv_en1 = mysqli_fetch_assoc($result_restaurant_adv_en1);
}
$sql_restaurant_adv_en2 = "SELECT * from restaurant_adv_en where id='2'";
$result_restaurant_adv_en2 = mysqli_query($con, $sql_restaurant_adv_en2);
if (mysqli_num_rows($result_restaurant_adv_en2)) {
    $row_adv_en2 = mysqli_fetch_assoc($result_restaurant_adv_en2);
}
$sql_restaurant_adv_en3 = "SELECT * from restaurant_adv_en where id='3'";
$result_restaurant_adv_en3 = mysqli_query($con, $sql_restaurant_adv_en3);
if (mysqli_num_rows($result_restaurant_adv_en3)) {
    $row_adv_en3 = mysqli_fetch_assoc($result_restaurant_adv_en3);
}
$sql_restaurant_adv_en4 = "SELECT * from restaurant_adv_en where id='4'";
$result_restaurant_adv_en4 = mysqli_query($con, $sql_restaurant_adv_en4);
if (mysqli_num_rows($result_restaurant_adv_en4)) {
    $row_adv_en4 = mysqli_fetch_assoc($result_restaurant_adv_en4);
}
//ru
$sql_restaurant_adv_ru1 = "SELECT * from restaurant_adv_ru where id='1'";
$result_restaurant_adv_ru1 = mysqli_query($con, $sql_restaurant_adv_ru1);
if (mysqli_num_rows($result_restaurant_adv_ru1)) {
    $row_adv_ru1 = mysqli_fetch_assoc($result_restaurant_adv_ru1);
}
$sql_restaurant_adv_ru2 = "SELECT * from restaurant_adv_ru where id='2'";
$result_restaurant_adv_ru2 = mysqli_query($con, $sql_restaurant_adv_ru2);
if (mysqli_num_rows($result_restaurant_adv_ru2)) {
    $row_adv_ru2 = mysqli_fetch_assoc($result_restaurant_adv_ru2);
}
$sql_restaurant_adv_ru3 = "SELECT * from restaurant_adv_ru where id='3'";
$result_restaurant_adv_ru3 = mysqli_query($con, $sql_restaurant_adv_ru3);
if (mysqli_num_rows($result_restaurant_adv_ru3)) {
    $row_adv_ru3 = mysqli_fetch_assoc($result_restaurant_adv_ru3);
}
$sql_restaurant_adv_ru4 = "SELECT * from restaurant_adv_ru where id='4'";
$result_restaurant_adv_ru4 = mysqli_query($con, $sql_restaurant_adv_ru4);
if (mysqli_num_rows($result_restaurant_adv_ru4)) {
    $row_adv_ru4 = mysqli_fetch_assoc($result_restaurant_adv_ru4);
}

// manu favorite dishes

$sql_manu_fav_am1 = "SELECT * from menu_fav_am where id='1'";
$result_manu_fav_am1 = mysqli_query($con, $sql_manu_fav_am1);
if (mysqli_num_rows($result_manu_fav_am1)) {
    $row_manu_fav_am1 = mysqli_fetch_assoc($result_manu_fav_am1);
}

$sql_manu_fav_am2 = "SELECT * from menu_fav_am where id='2'";
$result_manu_fav_am2 = mysqli_query($con, $sql_manu_fav_am2);
if (mysqli_num_rows($result_manu_fav_am2)) {
    $row_manu_fav_am2 = mysqli_fetch_assoc($result_manu_fav_am2);
}

$sql_manu_fav_am3 = "SELECT * from menu_fav_am where id='3'";
$result_manu_fav_am3 = mysqli_query($con, $sql_manu_fav_am3);
if (mysqli_num_rows($result_manu_fav_am3)) {
    $row_manu_fav_am3 = mysqli_fetch_assoc($result_manu_fav_am3);
}

$sql_manu_fav_am4 = "SELECT * from menu_fav_am where id='4'";
$result_manu_fav_am4 = mysqli_query($con, $sql_manu_fav_am4);
if (mysqli_num_rows($result_manu_fav_am4)) {
    $row_manu_fav_am4 = mysqli_fetch_assoc($result_manu_fav_am4);
}


// en
$sql_manu_fav_en1 = "SELECT * from menu_fav_en where id='1'";
$result_manu_fav_en1 = mysqli_query($con, $sql_manu_fav_en1);
if (mysqli_num_rows($result_manu_fav_en1)) {
    $row_manu_fav_en1 = mysqli_fetch_assoc($result_manu_fav_en1);
}

$sql_manu_fav_en2 = "SELECT * from menu_fav_en where id='2'";
$result_manu_fav_en2 = mysqli_query($con, $sql_manu_fav_en2);
if (mysqli_num_rows($result_manu_fav_en2)) {
    $row_manu_fav_en2 = mysqli_fetch_assoc($result_manu_fav_en2);
}

$sql_manu_fav_en3 = "SELECT * from menu_fav_en where id='3'";
$result_manu_fav_en3 = mysqli_query($con, $sql_manu_fav_en3);
if (mysqli_num_rows($result_manu_fav_en3)) {
    $row_manu_fav_en3 = mysqli_fetch_assoc($result_manu_fav_en3);
}

$sql_manu_fav_en4 = "SELECT * from menu_fav_en where id='4'";
$result_manu_fav_en4 = mysqli_query($con, $sql_manu_fav_en4);
if (mysqli_num_rows($result_manu_fav_en4)) {
    $row_manu_fav_en4 = mysqli_fetch_assoc($result_manu_fav_en4);
}


// ru

$sql_manu_fav_ru1 = "SELECT * from menu_fav_ru where id='1'";
$result_manu_fav_ru1 = mysqli_query($con, $sql_manu_fav_ru1);
if (mysqli_num_rows($result_manu_fav_ru1)) {
    $row_manu_fav_ru1 = mysqli_fetch_assoc($result_manu_fav_ru1);
}

$sql_manu_fav_ru2 = "SELECT * from menu_fav_ru where id='2'";
$result_manu_fav_ru2 = mysqli_query($con, $sql_manu_fav_ru2);
if (mysqli_num_rows($result_manu_fav_ru2)) {
    $row_manu_fav_ru2 = mysqli_fetch_assoc($result_manu_fav_ru2);
}

$sql_manu_fav_ru3 = "SELECT * from menu_fav_ru where id='3'";
$result_manu_fav_ru3 = mysqli_query($con, $sql_manu_fav_ru3);
if (mysqli_num_rows($result_manu_fav_ru3)) {
    $row_manu_fav_ru3 = mysqli_fetch_assoc($result_manu_fav_ru3);
}

$sql_manu_fav_ru4 = "SELECT * from menu_fav_ru where id='4'";
$result_manu_fav_ru4 = mysqli_query($con, $sql_manu_fav_ru4);
if (mysqli_num_rows($result_manu_fav_ru4)) {
    $row_manu_fav_ru4 = mysqli_fetch_assoc($result_manu_fav_ru4);
}


// special offers 
$sql_sp_offers_am = "SELECT * from rest_special_offers_am";
$result_sp_offers_am = mysqli_query($con, $sql_sp_offers_am);

$sql_sp_offers_en = "SELECT * from rest_special_offers_en";
$result_sp_offers_en = mysqli_query($con, $sql_sp_offers_en);

$sql_sp_offers_ru = "SELECT * from rest_special_offers_ru";
$result_sp_offers_ru = mysqli_query($con, $sql_sp_offers_ru);

// special days
$sql_sp_days_am = "SELECT * from rest_special_days_am";
$result_sp_days_am = mysqli_query($con, $sql_sp_days_am);

$sql_sp_days_en = "SELECT * from rest_special_days_en";
$result_sp_days_en = mysqli_query($con, $sql_sp_days_en);

$sql_sp_days_ru = "SELECT * from rest_special_days_ru";
$result_sp_days_ru = mysqli_query($con, $sql_sp_days_ru);

//your events with us
//am
$sql_restaurant_events_am1 = "SELECT * from restaurant_events_am where id='1'";
$result_restaurant_events_am1 = mysqli_query($con, $sql_restaurant_events_am1);
if (mysqli_num_rows($result_restaurant_events_am1)) {
    $row_restaurant_events_am1 = mysqli_fetch_assoc($result_restaurant_events_am1);
}

$sql_restaurant_events_am2 = "SELECT * from restaurant_events_am  where id='2'";
$result_restaurant_events_am2 = mysqli_query($con, $sql_restaurant_events_am2);
if (mysqli_num_rows($result_restaurant_events_am2)) {
    $row_restaurant_events_am2 = mysqli_fetch_assoc($result_restaurant_events_am2);
}

$sql_restaurant_events_am3 = "SELECT * from restaurant_events_am  where id='3'";
$result_restaurant_events_am3 = mysqli_query($con, $sql_restaurant_events_am3);
if (mysqli_num_rows($result_restaurant_events_am3)) {
    $row_restaurant_events_am3 = mysqli_fetch_assoc($result_restaurant_events_am3);
}

//en
$sql_restaurant_events_en1 = "SELECT * from restaurant_events_en where id='1'";
$result_restaurant_events_en1 = mysqli_query($con, $sql_restaurant_events_en1);
if (mysqli_num_rows($result_restaurant_events_en1)) {
    $row_restaurant_events_en1 = mysqli_fetch_assoc($result_restaurant_events_en1);
}

$sql_restaurant_events_en2 = "SELECT * from restaurant_events_en  where id='2'";
$result_restaurant_events_en2 = mysqli_query($con, $sql_restaurant_events_en2);
if (mysqli_num_rows($result_restaurant_events_en2)) {
    $row_restaurant_events_en2 = mysqli_fetch_assoc($result_restaurant_events_en2);
}

$sql_restaurant_events_en3 = "SELECT * from restaurant_events_en  where id='3'";
$result_restaurant_events_en3 = mysqli_query($con, $sql_restaurant_events_en3);
if (mysqli_num_rows($result_restaurant_events_en3)) {
    $row_restaurant_events_en3 = mysqli_fetch_assoc($result_restaurant_events_en3);
}

//ru
$sql_restaurant_events_ru1 = "SELECT * from restaurant_events_ru where id='1'";
$result_restaurant_events_ru1 = mysqli_query($con, $sql_restaurant_events_ru1);
if (mysqli_num_rows($result_restaurant_events_ru1)) {
    $row_restaurant_events_ru1 = mysqli_fetch_assoc($result_restaurant_events_ru1);
}

$sql_restaurant_events_ru2 = "SELECT * from restaurant_events_ru  where id='2'";
$result_restaurant_events_ru2 = mysqli_query($con, $sql_restaurant_events_ru2);
if (mysqli_num_rows($result_restaurant_events_ru2)) {
    $row_restaurant_events_ru2 = mysqli_fetch_assoc($result_restaurant_events_ru2);
}

$sql_restaurant_events_ru3 = "SELECT * from restaurant_events_ru  where id='3'";
$result_restaurant_events_ru3 = mysqli_query($con, $sql_restaurant_events_ru3);
if (mysqli_num_rows($result_restaurant_events_ru3)) {
    $row_restaurant_events_ru3 = mysqli_fetch_assoc($result_restaurant_events_ru3);
}


// opinions
$sql_opinions_am = "SELECT * from opinions_am";
$result_opinions_am = mysqli_query($con, $sql_opinions_am);

$sql_opinions_en = "SELECT * from opinions_en";
$result_opinions_en = mysqli_query($con, $sql_opinions_en);

$sql_opinions_ru = "SELECT * from opinions_ru";
$result_opinions_ru = mysqli_query($con, $sql_opinions_ru);
