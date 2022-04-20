
<?php
// services
$sql_services_am = "SELECT * from services_am";
$result_services_am = mysqli_query($con, $sql_services_am);

$sql_services_en = "SELECT * from services_en";
$result_services_en = mysqli_query($con, $sql_services_en);

$sql_services_ru = "SELECT * from services_ru";
$result_services_ru = mysqli_query($con, $sql_services_ru);
