<?php

// guesthouse main
$sql_guesthouse_main_am = "SELECT * from guesthouse_main_am where id='1'";
$result_guesthouse_main_am = mysqli_query($con, $sql_guesthouse_main_am);
if (mysqli_num_rows($result_guesthouse_main_am)) {
    $row_main_am = mysqli_fetch_assoc($result_guesthouse_main_am);
}

$sql_guesthouse_main_en = "SELECT * from guesthouse_main_en where id='1'";
$result_guesthouse_main_en = mysqli_query($con, $sql_guesthouse_main_en);
if (mysqli_num_rows($result_guesthouse_main_en)) {
    $row_main_en = mysqli_fetch_assoc($result_guesthouse_main_en);
}

$sql_guesthouse_main_ru = "SELECT * from guesthouse_main_ru where id='1'";
$result_guesthouse_main_ru = mysqli_query($con, $sql_guesthouse_main_ru);
if (mysqli_num_rows($result_guesthouse_main_ru)) {
    $row_main_ru = mysqli_fetch_assoc($result_guesthouse_main_ru);
}

// guesthouse about

$sql_guesthouse_about_am = "SELECT * from guesthouse_about_am where id='1'";
$result_guesthouse_about_am = mysqli_query($con, $sql_guesthouse_about_am);
if (mysqli_num_rows($result_guesthouse_about_am)) {
    $row_about_am = mysqli_fetch_assoc($result_guesthouse_about_am);
}

$sql_guesthouse_about_en = "SELECT * from guesthouse_about_en where id='1'";
$result_guesthouse_about_en = mysqli_query($con, $sql_guesthouse_about_en);
if (mysqli_num_rows($result_guesthouse_about_en)) {
    $row_about_en = mysqli_fetch_assoc($result_guesthouse_about_en);
}

$sql_guesthouse_about_ru = "SELECT * from guesthouse_about_ru where id='1'";
$result_guesthouse_about_ru = mysqli_query($con, $sql_guesthouse_about_ru);
if (mysqli_num_rows($result_guesthouse_about_ru)) {
    $row_about_ru = mysqli_fetch_assoc($result_guesthouse_about_ru);
}

// gusthouse values

$sql_values_am = "SELECT * from guesthouse_values_am";
$result_values_am = mysqli_query($con, $sql_values_am);

$sql_values_en = "SELECT * from guesthouse_values_en";
$result_values_en = mysqli_query($con, $sql_values_en);

$sql_values_ru = "SELECT * from guesthouse_values_ru";
$result_values_ru = mysqli_query($con, $sql_values_ru);


// guesthouse sp offers
$sql_sp_offers_am = "SELECT * from guest_special_offers_am";
$result_sp_offers_am = mysqli_query($con, $sql_sp_offers_am);

$sql_sp_offers_en = "SELECT * from guest_special_offers_en";
$result_sp_offers_en = mysqli_query($con, $sql_sp_offers_en);

$sql_sp_offers_ru = "SELECT * from guest_special_offers_ru";
$result_sp_offers_ru = mysqli_query($con, $sql_sp_offers_ru);


// opinions
$sql_opinions_am = "SELECT * from opinions_am";
$result_opinions_am = mysqli_query($con, $sql_opinions_am);

$sql_opinions_en = "SELECT * from opinions_en";
$result_opinions_en = mysqli_query($con, $sql_opinions_en);

$sql_opinions_ru = "SELECT * from opinions_ru";
$result_opinions_ru = mysqli_query($con, $sql_opinions_ru);


// rooms menu

$sql_rooms_am = "SELECT * from rooms_am";
$result_rooms_am = mysqli_query($con, $sql_rooms_am);

$sql_rooms_en = "SELECT * from rooms_en";
$result_rooms_en = mysqli_query($con, $sql_rooms_en);

$sql_rooms_ru = "SELECT * from rooms_ru";
$result_rooms_ru = mysqli_query($con, $sql_rooms_ru);
// rooms limit 3
$sql_rooms_am_limit = "SELECT * from rooms_am limit 3";
$result_rooms_am_limit = mysqli_query($con, $sql_rooms_am_limit);

$sql_rooms_en_limit = "SELECT * from rooms_en limit 3";
$result_rooms_en_limit = mysqli_query($con, $sql_rooms_en_limit);

$sql_rooms_ru_limit = "SELECT * from rooms_ru limit 3";
$result_rooms_ru_limit = mysqli_query($con, $sql_rooms_ru_limit);


