<?php
if (isset($_GET['offer_id'])) {
    $offer_id = $_GET['offer_id'];

    if ($lang_menu == "am") {
        $sql_offers_am = "SELECT * FROM special_offers_am WHERE id=" . $offer_id . "";
        $result_offers_am = mysqli_query($con, $sql_offers_am);
        if (mysqli_num_rows($result_offers_am) == 1) {
            $row_offers_am  = mysqli_fetch_assoc($result_offers_am);
            $title_am = $row_offers_am['title_offers'];
            $text_am = $row_offers_am['text_offers'];
            $image_am = $row_offers_am['image_offers'];

        }
    }
    if ($lang_menu == "en") {
        $sql_offers_en = "SELECT * FROM special_offers_en WHERE id=" . $offer_id . "";
        $result_offers_en = mysqli_query($con, $sql_offers_en);
        if (mysqli_num_rows($result_offers_en) == 1) {
            $row_offers_en  = mysqli_fetch_assoc($result_offers_en);
            $title_en = $row_offers_en['title_offers'];
            $text_en = $row_offers_en['text_offers'];
            $image_en = $row_offers_en['image_offers'];

        }
    }
    if ($lang_menu == "ru") {
        $sql_offers_ru = "SELECT * FROM special_offers_ru WHERE id=" . $offer_id . "";
        $result_offers_ru = mysqli_query($con, $sql_offers_ru);
        if (mysqli_num_rows($result_offers_ru) == 1) {
            $row_offers_ru  = mysqli_fetch_assoc($result_offers_ru);
            $title_ru = $row_offers_ru['title_offers'];
            $text_ru = $row_offers_ru['text_offers'];
            $image_ru = $row_offers_ru['image_offers'];

        }
    }


    // $sql_rooms_am = "SELECT * from rooms_am WHERE NOT id = " . $room_id . "";
    // $result_rooms_am = mysqli_query($con, $sql_rooms_am);

    // $sql_rooms_en = "SELECT * from rooms_en WHERE NOT id = " . $room_id . "";
    // $result_rooms_en = mysqli_query($con, $sql_rooms_en);

    // $sql_rooms_ru = "SELECT * from rooms_ru WHERE NOT id = " . $room_id . "";
    // $result_rooms_ru = mysqli_query($con, $sql_rooms_ru);
}
