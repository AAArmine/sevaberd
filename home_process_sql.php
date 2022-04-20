<?php
$sql_main_dir_am1 = "SELECT * from main_directions_am where id='1'";
$result_main_dir_am1 = mysqli_query($con, $sql_main_dir_am1);
if (mysqli_num_rows($result_main_dir_am1)) {
    $row_am1 = mysqli_fetch_assoc($result_main_dir_am1);
}

$sql_main_dir_am2 = "SELECT * from main_directions_am where id='2'";
$result_main_dir_am2 = mysqli_query($con, $sql_main_dir_am2);
if (mysqli_num_rows($result_main_dir_am2)) {
    $row_am2 = mysqli_fetch_assoc($result_main_dir_am2);
}

$sql_main_dir_am3 = "SELECT * from main_directions_am where id='3'";
$result_main_dir_am3 = mysqli_query($con, $sql_main_dir_am3);
if (mysqli_num_rows($result_main_dir_am3)) {
    $row_am3 = mysqli_fetch_assoc($result_main_dir_am3);
}


$sql_main_dir_en1 = "SELECT * from main_directions_en where id='1'";
$result_main_dir_en1 = mysqli_query($con, $sql_main_dir_en1);
if (mysqli_num_rows($result_main_dir_en1)) {
    $row_en1 = mysqli_fetch_assoc($result_main_dir_en1);
}

$sql_main_dir_en2 = "SELECT * from main_directions_en where id='2'";
$result_main_dir_en2 = mysqli_query($con, $sql_main_dir_en2);
if (mysqli_num_rows($result_main_dir_en2)) {
    $row_en2 = mysqli_fetch_assoc($result_main_dir_en2);
}

$sql_main_dir_en3 = "SELECT * from main_directions_en where id='3'";
$result_main_dir_en3 = mysqli_query($con, $sql_main_dir_en3);
if (mysqli_num_rows($result_main_dir_en3)) {
    $row_en3 = mysqli_fetch_assoc($result_main_dir_en3);
}

$sql_main_dir_ru1 = "SELECT * from main_directions_ru where id='1'";
$result_main_dir_ru1 = mysqli_query($con, $sql_main_dir_ru1);
if (mysqli_num_rows($result_main_dir_ru1)) {
    $row_ru1 = mysqli_fetch_assoc($result_main_dir_ru1);
}

$sql_main_dir_ru2 = "SELECT * from main_directions_ru where id='2'";
$result_main_dir_ru2 = mysqli_query($con, $sql_main_dir_ru2);
if (mysqli_num_rows($result_main_dir_ru2)) {
    $row_ru2 = mysqli_fetch_assoc($result_main_dir_ru2);
}

$sql_main_dir_ru3 = "SELECT * from main_directions_ru where id='3'";
$result_main_dir_ru3 = mysqli_query($con, $sql_main_dir_ru3);
if (mysqli_num_rows($result_main_dir_ru3)) {
    $row_ru3 = mysqli_fetch_assoc($result_main_dir_ru3);
}

// special offers
$sql_sp_offers_am = "SELECT * from special_offers_am";
$result_sp_offers_am = mysqli_query($con, $sql_sp_offers_am);

$sql_sp_offers_en = "SELECT * from special_offers_en";
$result_sp_offers_en = mysqli_query($con, $sql_sp_offers_en);

$sql_sp_offers_ru = "SELECT * from special_offers_ru";
$result_sp_offers_ru = mysqli_query($con, $sql_sp_offers_ru);

// tourism
$sql_tourism_am = "SELECT * from tourism_am";
$result_tourism_am = mysqli_query($con, $sql_tourism_am);

$sql_tourism_en = "SELECT * from tourism_en";
$result_tourism_en = mysqli_query($con, $sql_tourism_en);

$sql_tourism_ru = "SELECT * from tourism_ru";
$result_tourism_ru = mysqli_query($con, $sql_tourism_ru);

// opinions
$sql_opinions_am = "SELECT * from opinions_am";
$result_opinions_am = mysqli_query($con, $sql_opinions_am);

$sql_opinions_en = "SELECT * from opinions_en";
$result_opinions_en = mysqli_query($con, $sql_opinions_en);

$sql_opinions_ru = "SELECT * from opinions_ru";
$result_opinions_ru = mysqli_query($con, $sql_opinions_ru);
