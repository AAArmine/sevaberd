<?php

// village

$sql_village= "SELECT * from village where id='1'";
$result_village = mysqli_query($con, $sql_village);
if (mysqli_num_rows($result_village)) {
    $row_village= mysqli_fetch_assoc($result_village);
}


// zipline

$sql_zipline= "SELECT * from zipline where id='1'";
$result_zipline = mysqli_query($con, $sql_zipline);
if (mysqli_num_rows($result_zipline)) {
    $row_zipline= mysqli_fetch_assoc($result_zipline);
}

// shooting

$sql_shooting= "SELECT * from shooting where id='1'";
$result_shooting = mysqli_query($con, $sql_shooting);
if (mysqli_num_rows($result_shooting)) {
    $row_shooting= mysqli_fetch_assoc($result_shooting);
}



// staff
$sql_staff_am = "SELECT * from staff_am";
$result_staff_am = mysqli_query($con, $sql_staff_am);

$sql_staff_en = "SELECT * from staff_en";
$result_staff_en = mysqli_query($con, $sql_staff_en);

$sql_staff_ru = "SELECT * from staff_ru";
$result_staff_ru = mysqli_query($con, $sql_staff_ru);