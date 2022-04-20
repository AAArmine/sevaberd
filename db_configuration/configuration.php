<?php
$host = "localhost";
$database = "sevaberd";
$username = "sevaberd";
$password = "QmxrqVkBOiSCgkoF";

$con = mysqli_connect($host, $username, $password, $database);
if (!$con) {
    die('error_get_last()' . mysqli_error());
} else {
    mysqli_query($con, "SET NAMES 'utf8'");
}
