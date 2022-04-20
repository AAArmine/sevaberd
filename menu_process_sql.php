<?php
$pageIndex = isset($_GET['pageIndex']) ? $_GET['pageIndex'] : '';
if ($pageIndex == '' || $pageIndex == 1) {
    $pageDisplay = 0;
} else {
    $pageDisplay = $pageIndex * 6 - 6;
}



$sql_menu_am = "SELECT * from menu_am limit " . $pageDisplay . ",6";
$result_menu_am = mysqli_query($con, $sql_menu_am);

$sql_menu_hotDishes_am = "SELECT * from menu_am where category='Տաք ուտեստներ' limit " . $pageDisplay . ",6";
$result_menu_hotDishes_am = mysqli_query($con, $sql_menu_hotDishes_am);

$sql_menu_salads_am = "SELECT * from menu_am where category='Աղցաններ' limit " . $pageDisplay . ",6";
$result_menu_salads_am = mysqli_query($con, $sql_menu_salads_am);

$sql_menu_appetizers_am = "SELECT * from menu_am where category='Նախաուտեստներ' limit " . $pageDisplay . ",6";
$result_menu_appetizers_am = mysqli_query($con, $sql_menu_appetizers_am);

$sql_menu_garnishes_am = "SELECT * from menu_am where category='Խավարտներ' limit " . $pageDisplay . ",6";
$result_menu_garnishes_am = mysqli_query($con, $sql_menu_garnishes_am);

$sql_menu_desserts_am = "SELECT * from menu_am where category='Աղանդեր' limit " . $pageDisplay . ",6";
$result_menu_desserts_am = mysqli_query($con, $sql_menu_desserts_am);

$sql_menu_drinks_am = "SELECT * from menu_am where category='Խմիչքներ' limit " . $pageDisplay . ",6";
$result_menu_drinks_am = mysqli_query($con, $sql_menu_drinks_am);

// en.......
$sql_menu_en = "SELECT * from menu_en limit " . $pageDisplay . ",6";
$result_menu_en = mysqli_query($con, $sql_menu_en);

$sql_menu_hotDishes_en = "SELECT * from menu_en where category='Hot dishes' limit " . $pageDisplay . ",6";
$result_menu_hotDishes_en = mysqli_query($con, $sql_menu_hotDishes_en);

$sql_menu_salads_en = "SELECT * from menu_en where category='Salads' limit " . $pageDisplay . ",6";
$result_menu_salads_en = mysqli_query($con, $sql_menu_salads_en);

$sql_menu_appetizers_en = "SELECT * from menu_en where category='Appetizers' limit " . $pageDisplay . ",6";
$result_menu_appetizers_en = mysqli_query($con, $sql_menu_appetizers_en);

$sql_menu_garnishes_en = "SELECT * from menu_en where category='Garnishes' limit " . $pageDisplay . ",6";
$result_menu_garnishes_en = mysqli_query($con, $sql_menu_garnishes_en);

$sql_menu_desserts_en = "SELECT * from menu_en where category='Desserts' limit " . $pageDisplay . ",6";
$result_menu_desserts_en = mysqli_query($con, $sql_menu_desserts_en);

$sql_menu_drinks_en = "SELECT * from menu_en where category='Drinks' limit " . $pageDisplay . ",6";
$result_menu_drinks_en = mysqli_query($con, $sql_menu_drinks_en);


// ru.......
$sql_menu_ru = "SELECT * from menu_ru limit " . $pageDisplay . ",6";
$result_menu_ru = mysqli_query($con, $sql_menu_ru);

$sql_menu_hotDishes_ru = "SELECT * from menu_ru where category='Горячие блюда' limit " . $pageDisplay . ",6";
$result_menu_hotDishes_ru = mysqli_query($con, $sql_menu_hotDishes_ru);

$sql_menu_salads_ru = "SELECT * from menu_ru where category='Салаты' limit " . $pageDisplay . ",6";
$result_menu_salads_ru = mysqli_query($con, $sql_menu_salads_ru);

$sql_menu_appetizers_ru = "SELECT * from menu_ru where category='Закуски' limit " . $pageDisplay . ",6";
$result_menu_appetizers_ru = mysqli_query($con, $sql_menu_appetizers_ru);

$sql_menu_garnishes_ru = "SELECT * from menu_ru where category='Гарниры' limit " . $pageDisplay . ",6";
$result_menu_garnishes_ru = mysqli_query($con, $sql_menu_garnishes_ru);

$sql_menu_desserts_ru = "SELECT * from menu_ru where category='Десерты' limit " . $pageDisplay . ",6";
$result_menu_desserts_ru = mysqli_query($con, $sql_menu_desserts_ru);

$sql_menu_drinks_ru = "SELECT * from menu_ru where category='Напитки' limit " . $pageDisplay . ",6";
$result_menu_drinks_ru = mysqli_query($con, $sql_menu_drinks_ru);