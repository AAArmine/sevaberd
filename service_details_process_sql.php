<?php
if (isset($_GET['service_id'])) {
    $service_id = $_GET['service_id'];
    if ($lang_menu == "am") {
        $sql_service_am = "SELECT * FROM services_am WHERE id=" . $service_id . "";
        $result_service_am = mysqli_query($con, $sql_service_am);

        if (mysqli_num_rows($result_service_am) == 1) {
            $row_service_am  = mysqli_fetch_assoc($result_service_am);
            $title_am = $row_service_am['title'];
            $text_am = $row_service_am['text'];
            $image_am = $row_service_am['image'];
            
        }
    }
    if ($lang_menu == "en") {
        $sql_service_en = "SELECT * FROM services_en WHERE id=" . $service_id . "";
        $result_service_en = mysqli_query($con, $sql_service_en);

        if (mysqli_num_rows($result_service_en) == 1) {
            $row_service_en  = mysqli_fetch_assoc($result_service_en);
            $title_en = $row_service_en['title'];
            $text_en = $row_service_en['text'];
            $image_en = $row_service_en['image'];
            
        }
    }
    if ($lang_menu == "ru") {
        $sql_service_ru = "SELECT * FROM services_ru WHERE id=" . $service_id . "";
        $result_service_ru = mysqli_query($con, $sql_service_ru);

        if (mysqli_num_rows($result_service_ru) == 1) {
            $row_service_ru  = mysqli_fetch_assoc($result_service_ru);
            $title_ru = $row_service_ru['title'];
            $text_ru = $row_service_ru['text'];
            $image_ru = $row_service_ru['image'];
            
        }
    }
}
?>