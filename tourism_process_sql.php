<?php

// tourism main
$sql_tourism_main_am = "SELECT * from tourism_main_am where id='1'";
$result_tourism_main_am = mysqli_query($con, $sql_tourism_main_am);
if (mysqli_num_rows($result_tourism_main_am)) {
    $row_main_am = mysqli_fetch_assoc($result_tourism_main_am);
}

$sql_tourism_main_en = "SELECT * from tourism_main_en where id='1'";
$result_tourism_main_en = mysqli_query($con, $sql_tourism_main_en);
if (mysqli_num_rows($result_tourism_main_en)) {
    $row_main_en = mysqli_fetch_assoc($result_tourism_main_en);
}

$sql_tourism_main_ru = "SELECT * from tourism_main_ru where id='1'";
$result_tourism_main_ru = mysqli_query($con, $sql_tourism_main_ru);
if (mysqli_num_rows($result_tourism_main_ru)) {
    $row_main_ru = mysqli_fetch_assoc($result_tourism_main_ru);
}

// tourism about

$sql_tourism_about_am = "SELECT * from tourism_about_am where id='1'";
$result_tourism_about_am = mysqli_query($con, $sql_tourism_about_am);
if (mysqli_num_rows($result_tourism_about_am)) {
    $row_about_am = mysqli_fetch_assoc($result_tourism_about_am);
}

$sql_tourism_about_en = "SELECT * from tourism_about_en where id='1'";
$result_tourism_about_en = mysqli_query($con, $sql_tourism_about_en);
if (mysqli_num_rows($result_tourism_about_en)) {
    $row_about_en = mysqli_fetch_assoc($result_tourism_about_en);
}

$sql_tourism_about_ru = "SELECT * from tourism_about_ru where id='1'";
$result_tourism_about_ru = mysqli_query($con, $sql_tourism_about_ru);
if (mysqli_num_rows($result_tourism_about_ru)) {
    $row_about_ru = mysqli_fetch_assoc($result_tourism_about_ru);
}

// by numbers

$sql_by_numbers_am = "SELECT * from by_numbers_am";
$result_by_numbers_am = mysqli_query($con, $sql_by_numbers_am);

$sql_by_numbers_en = "SELECT * from by_numbers_en";
$result_by_numbers_en = mysqli_query($con, $sql_by_numbers_en);

$sql_by_numbers_ru = "SELECT * from by_numbers_ru";
$result_by_numbers_ru = mysqli_query($con, $sql_by_numbers_ru);


// tourism
$sql_tourism_am = "SELECT * from tourism_am";
$result_tourism_am = mysqli_query($con, $sql_tourism_am);

$sql_tourism_en = "SELECT * from tourism_en";
$result_tourism_en = mysqli_query($con, $sql_tourism_en);

$sql_tourism_ru = "SELECT * from tourism_ru";
$result_tourism_ru = mysqli_query($con, $sql_tourism_ru);

// special offers
$sql_sp_offers_am = "SELECT * from special_offers_am";
$result_sp_offers_am = mysqli_query($con, $sql_sp_offers_am);

$sql_sp_offers_en = "SELECT * from special_offers_en";
$result_sp_offers_en = mysqli_query($con, $sql_sp_offers_en);

$sql_sp_offers_ru = "SELECT * from special_offers_ru";
$result_sp_offers_ru = mysqli_query($con, $sql_sp_offers_ru);

