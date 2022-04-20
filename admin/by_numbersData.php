<?php
include "../db_configuration/configuration.php";
if(isset($_POST['numbers_arr_am']) || isset($_POST['text_arr_am'])){
    for($i=0; $i<4; $i++){
        $k = $i + 1;
        $sql = mysqli_query($con, "UPDATE by_numbers_am SET value='". $_POST['numbers_arr_am'][$i]."' WHERE id='".$k."' ");
        $sql1 = mysqli_query($con, "UPDATE by_numbers_am SET name='". $_POST['text_arr_am'][$i]."' WHERE id='".$k."' ");
    }
}

if(isset($_POST['numbers_arr_en']) || isset($_POST['text_arr_en'])){
    echo 'es';
    for($i=0; $i<4; $i++){
        $k = $i + 1;
        $sql = mysqli_query($con, "UPDATE by_numbers_en SET value='". $_POST['numbers_arr_en'][$i]."' WHERE id='".$k."' ");
        $sql1 = mysqli_query($con, "UPDATE by_numbers_en SET name='". $_POST['text_arr_en'][$i]."' WHERE id='".$k."' ");
    }
    
}

if(isset($_POST['numbers_arr_ru']) || isset($_POST['text_arr_ru'])){
    for($i=0; $i<4; $i++){
        $k = $i + 1;
        $sql = mysqli_query($con, "UPDATE by_numbers_ru SET value='". $_POST['numbers_arr_ru'][$i]."' WHERE id='".$k."' ");
        $sql1 = mysqli_query($con, "UPDATE by_numbers_ru SET name='". $_POST['text_arr_ru'][$i]."' WHERE id='".$k."' ");
    }
}

?>