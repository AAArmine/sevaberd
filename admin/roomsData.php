<?php
include "../db_configuration/configuration.php";

// -----------delete rooms
if (isset($_POST['baseId'])) {
    $sql_unlink_img  = mysqli_query($con, "SELECT image FROM rooms_am WHERE id='" . $_POST['baseId'] . "'");
    $row_am = mysqli_fetch_assoc($sql_unlink_img);
    // delete image

    $path = '../img_admin/' . $row_am['image'];
    unlink($path);

    $sql_am = mysqli_query($con, "DELETE FROM rooms_am WHERE id='" . $_POST['baseId'] . "'");
    $sql_en = mysqli_query($con, "DELETE FROM rooms_en WHERE id='" . $_POST['baseId'] . "'");
    $sql_ru = mysqli_query($con, "DELETE FROM rooms_ru WHERE id='" . $_POST['baseId'] . "'");

}


// -----submit room
if (isset($_POST['room-am-code'])) {

    echo 'hasav';
    $newvalue = explode('.', $_FILES['room_img']['name']);

    $newname = $newvalue[0] . uniqid() . "." . end($newvalue);
    $newDestination = '../img_admin/' . $newname;
    move_uploaded_file($_FILES['room_img']['tmp_name'], $newDestination);

    $sql_insert_room_am = mysqli_query($con, "INSERT INTO rooms_am 
    (code, description, image, price, option_1, option_2, option_3, option_4, option_5, option_6, option_7) 
    VALUES 
    ('" . $_POST['room-am-code'] . "', 
    '" . $_POST['room-am-desc'] . "', 
    '" . $newname . "', 
    '" . $_POST['room-am-price'] . "', 
    '" . $_POST['room-am-opt1'] . "',
    '" . $_POST['room-am-opt2'] . "',
    '" . $_POST['room-am-opt3'] . "',
    '" . $_POST['room-am-opt4'] . "',
    '" . $_POST['room-am-opt5'] . "',
    '" . $_POST['room-am-opt6'] . "',
    '" . $_POST['room-am-opt7'] . "'
    )");

$sql_insert_room_en= mysqli_query($con, "INSERT INTO rooms_en
(code, description, image, price, option_1, option_2, option_3, option_4, option_5, option_6, option_7) 
VALUES 
('" . $_POST['room-en-code'] . "', 
'" . $_POST['room-en-desc'] . "', 
'" . $newname . "', 
'" . $_POST['room-en-price'] . "', 
'" . $_POST['room-en-opt1'] . "',
'" . $_POST['room-en-opt2'] . "',
'" . $_POST['room-en-opt3'] . "',
'" . $_POST['room-en-opt4'] . "',
'" . $_POST['room-en-opt5'] . "',
'" . $_POST['room-en-opt6'] . "',
'" . $_POST['room-en-opt7'] . "'
)");

$sql_insert_room_ru= mysqli_query($con, "INSERT INTO rooms_ru
(code, description, image, price, option_1, option_2, option_3, option_4, option_5, option_6, option_7) 
VALUES 
('" . $_POST['room-ru-code'] . "', 
'" . $_POST['room-ru-desc'] . "', 
'" . $newname . "', 
'" . $_POST['room-ru-price'] . "', 
'" . $_POST['room-ru-opt1'] . "',
'" . $_POST['room-ru-opt2'] . "',
'" . $_POST['room-ru-opt3'] . "',
'" . $_POST['room-ru-opt4'] . "',
'" . $_POST['room-ru-opt5'] . "',
'" . $_POST['room-ru-opt6'] . "',
'" . $_POST['room-ru-opt7'] . "'
)");


}



// make changes

if(isset($_POST['codes_arr_am'])){
    for($i=0; $i<count($_POST['codes_arr_am']); $i++){
        $sql = mysqli_query($con, "UPDATE rooms_am SET 
        code='". $_POST['codes_arr_am'][$i]."', 
        description='". $_POST['desc_arr_am'][$i]."', 
        price='". $_POST['price'][$i]."', 
        option_1 ='". $_POST['option1'][$i]."', 
        option_2 ='". $_POST['option2'][$i]."', 
        option_3 ='". $_POST['option3'][$i]."',
        option_4 ='". $_POST['option4'][$i]."',
        option_5 ='". $_POST['option5'][$i]."',
        option_6 ='". $_POST['option6'][$i]."',
        option_7 ='". $_POST['option7'][$i]."'
        WHERE id='".$_POST['room_ids'][$i]."' ");
    }
}

if(isset($_POST['codes_arr_en'])){
    for($i=0; $i<count($_POST['codes_arr_en']); $i++){
        $sql = mysqli_query($con, "UPDATE rooms_en SET 
        code='". $_POST['codes_arr_en'][$i]."', 
        description='". $_POST['desc_arr_en'][$i]."', 
        price='". $_POST['price'][$i]."', 
        option_1 ='". $_POST['option1'][$i]."', 
        option_2 ='". $_POST['option2'][$i]."', 
        option_3 ='". $_POST['option3'][$i]."',
        option_4 ='". $_POST['option4'][$i]."',
        option_5 ='". $_POST['option5'][$i]."',
        option_6 ='". $_POST['option6'][$i]."',
        option_7 ='". $_POST['option7'][$i]."'
        WHERE id='".$_POST['room_ids'][$i]."' ");
    }
}
if(isset($_POST['codes_arr_ru'])){
    for($i=0; $i<count($_POST['codes_arr_ru']); $i++){
        $sql = mysqli_query($con, "UPDATE rooms_ru SET 
        code='". $_POST['codes_arr_ru'][$i]."', 
        description='". $_POST['desc_arr_ru'][$i]."', 
        price='". $_POST['price'][$i]."', 
        option_1 ='". $_POST['option1'][$i]."', 
        option_2 ='". $_POST['option2'][$i]."', 
        option_3 ='". $_POST['option3'][$i]."',
        option_4 ='". $_POST['option4'][$i]."',
        option_5 ='". $_POST['option5'][$i]."',
        option_6 ='". $_POST['option6'][$i]."',
        option_7 ='". $_POST['option7'][$i]."'
        WHERE id='".$_POST['room_ids'][$i]."' ");
    }
}






