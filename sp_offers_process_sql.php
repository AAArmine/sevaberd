
<?php
// all sp offers
$sql_special_offers_am= "SELECT * from special_offers_am";
$result_special_offers_am = mysqli_query($con, $sql_special_offers_am);

$sql_special_offers_en = "SELECT * from special_offers_en";
$result_special_offers_en = mysqli_query($con, $sql_special_offers_en);

$sql_special_offers_ru = "SELECT * from special_offers_ru";
$result_special_offers_ru = mysqli_query($con, $sql_special_offers_ru);

//for companies sp offers
$sql_special_offers_comp_am= "SELECT * from special_offers_am where for_companies='checked'";
$result_special_offers_comp_am = mysqli_query($con, $sql_special_offers_comp_am);

$sql_special_offers_comp_en = "SELECT * from special_offers_en where for_companies='checked'";
$result_special_offers_comp_en = mysqli_query($con, $sql_special_offers_comp_en);

$sql_special_offers_comp_ru = "SELECT * from special_offers_ru where for_companies='checked'";
$result_special_offers_comp_ru = mysqli_query($con, $sql_special_offers_comp_ru);

