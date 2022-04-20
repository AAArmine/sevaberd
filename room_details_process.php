<?php
if (isset($_GET['room_id'])) {
    $room_id = $_GET['room_id'];
    $room_opt_am = [];
    $room_opt_en = [];
    $room_opt_ru = [];
    if ($lang_menu == "am") {
        $sql_rooms_am = "SELECT * FROM rooms_am WHERE id=" . $room_id . "";
        $result_rooms_am = mysqli_query($con, $sql_rooms_am);
        if (mysqli_num_rows($result_rooms_am) == 1) {
            $row_rooms_am  = mysqli_fetch_assoc($result_rooms_am);
            $code_am = $row_rooms_am['code'];
            $decription_am = $row_rooms_am['description'];
            $image_am = $row_rooms_am['image'];
            $price_am = $row_rooms_am['price'];
            for ($i = 1; $i < 8; $i++) {
                array_push($room_opt_am, $row_rooms_am['option_' . $i . '']);
            }
        }
    }
    if ($lang_menu == "en") {
        $sql_rooms_en = "SELECT * FROM rooms_en WHERE id=" . $room_id . "";
        $result_rooms_en = mysqli_query($con, $sql_rooms_en);
        if (mysqli_num_rows($result_rooms_en) == 1) {
            $row_rooms_en  = mysqli_fetch_assoc($result_rooms_en);
            $code_en = $row_rooms_en['code'];
            $decription_en = $row_rooms_en['description'];
            $image_en = $row_rooms_en['image'];
            $price_en = $row_rooms_en['price'];
            for ($i = 1; $i < 8; $i++) {
                array_push($room_opt_en, $row_rooms_en['option_' . $i . '']);
            }
        }
    }
    if ($lang_menu == "ru") {
        $sql_rooms_ru = "SELECT * FROM rooms_ru WHERE id=" . $room_id . "";
        $result_rooms_ru = mysqli_query($con, $sql_rooms_ru);
        if (mysqli_num_rows($result_rooms_ru) == 1) {
            $row_rooms_ru  = mysqli_fetch_assoc($result_rooms_ru);
            $code_ru = $row_rooms_ru['code'];
            $decription_ru = $row_rooms_ru['description'];
            $image_ru = $row_rooms_ru['image'];
            $price_ru = $row_rooms_ru['price'];
            for ($i = 1; $i < 8; $i++) {
                array_push($room_opt_ru, $row_rooms_ru['option_' . $i . '']);
            }
        }
    }
    $sql_rooms_am = "SELECT * from rooms_am WHERE NOT id = " . $room_id . "";
    $result_rooms_am = mysqli_query($con, $sql_rooms_am);

    $sql_rooms_en = "SELECT * from rooms_en WHERE NOT id = " . $room_id . "";
    $result_rooms_en = mysqli_query($con, $sql_rooms_en);

    $sql_rooms_ru = "SELECT * from rooms_ru WHERE NOT id = " . $room_id . "";
    $result_rooms_ru = mysqli_query($con, $sql_rooms_ru);
}
