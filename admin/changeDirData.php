<?php
include "../db_configuration/configuration.php";
if(isset($_POST['title_arr_am']) || isset($_POST['text_arr_am'])){
    for($i=0; $i<3; $i++){
        $k = $i + 1;
        $sql = mysqli_query($con, "UPDATE main_directions_am SET dir_title='". $_POST['title_arr_am'][$i]."' WHERE id='".$k."' ");
        $sql1 = mysqli_query($con, "UPDATE main_directions_am SET dir_text='". $_POST['text_arr_am'][$i]."' WHERE id='".$k."' ");
    }
}

if(isset($_POST['title_arr_en']) || isset($_POST['text_arr_en'])){
    for($i=0; $i<3; $i++){
        $k = $i + 1;
        $sql = mysqli_query($con, "UPDATE main_directions_en SET dir_title='". $_POST['title_arr_en'][$i]."' WHERE id='".$k."' ");
        $sql1 = mysqli_query($con, "UPDATE main_directions_en SET dir_text='". $_POST['text_arr_en'][$i]."' WHERE id='".$k."' ");
    }
}

if(isset($_POST['title_arr_ru']) || isset($_POST['text_arr_ru'])){
    for($i=0; $i<3; $i++){
        $k = $i + 1;
        $sql = mysqli_query($con, "UPDATE main_directions_ru SET dir_title='". $_POST['title_arr_ru'][$i]."' WHERE id='".$k."' ");
        $sql1 = mysqli_query($con, "UPDATE main_directions_ru SET dir_text='". $_POST['text_arr_ru'][$i]."' WHERE id='".$k."' ");
    }
}


?>