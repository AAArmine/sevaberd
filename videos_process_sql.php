<?php

    $pageIndex = isset($_GET['pageIndex']) ? $_GET['pageIndex'] : '';
    if ($pageIndex == '' || $pageIndex == 1) {
    $pageDisplay = 0;
    } else {
    $pageDisplay = $pageIndex * 6 - 6;
    }


    $pageIndex2 = isset($_GET['pageIndex2']) ? $_GET['pageIndex2'] : '';
    if ($pageIndex2 == '' || $pageIndex2 == 1) {
    $pageDisplay2 = 0;
    } else {
    $pageDisplay2 = $pageIndex2 * 6 - 6;
    }

    $pageIndex3 = isset($_GET['pageIndex3']) ? $_GET['pageIndex3'] : '';
    if ($pageIndex3 == '' || $pageIndex3 == 1) {
    $pageDisplay3 = 0;
    } else {
    $pageDisplay3 = $pageIndex3 * 6 - 6;
    }

    $pageIndex4 = isset($_GET['pageIndex4']) ? $_GET['pageIndex4'] : '';
    if ($pageIndex4 == '' || $pageIndex4 == 1) {
    $pageDisplay4 = 0;
    } else {
    $pageDisplay4 = $pageIndex4 * 6 - 6;
    }

    $pageIndex5 = isset($_GET['pageIndex5']) ? $_GET['pageIndex5'] : '';
    if ($pageIndex5 == '' || $pageIndex5 == 1) {
    $pageDisplay5 = 0;
    } else {
    $pageDisplay5 = $pageIndex5 * 6 - 6;
    }

    $pageIndex6 = isset($_GET['pageIndex6']) ? $_GET['pageIndex6'] : '';
    if ($pageIndex6 == '' || $pageIndex6 == 1) {
    $pageDisplay6 = 0;
    } else {
    $pageDisplay6 = $pageIndex6 * 6 - 6;
    }

    $pageIndex7 = isset($_GET['pageIndex7']) ? $_GET['pageIndex7'] : '';
    if ($pageIndex7 == '' || $pageIndex7 == 1) {
    $pageDisplay7 = 0;
    } else {
    $pageDisplay7 = $pageIndex7 * 6 - 6;
    }

    $pageIndex8 = isset($_GET['pageIndex8']) ? $_GET['pageIndex8'] : '';
    if ($pageIndex8 == '' || $pageIndex8 == 1) {
    $pageDisplay8 = 0;
    } else {
    $pageDisplay8 = $pageIndex8 * 6 - 6;
    }


    $sql_videos_cat1 = "SELECT * from videos where category_en='Restaurant' limit " . $pageDisplay . ",6";
    $result_videos_cat1 = mysqli_query($con, $sql_videos_cat1);

    $sql_videos_cat2 = "SELECT * from videos where category_en='Guesthouse' limit " . $pageDisplay2 . ",6";
    $result_videos_cat2 = mysqli_query($con, $sql_videos_cat2);

    $sql_videos_cat3 = "SELECT * from videos where category_en='Hiking' limit " . $pageDisplay3 . ",6";
    $result_videos_cat3 = mysqli_query($con, $sql_videos_cat3);

    $sql_videos_cat4 = "SELECT * from videos where category_en='Mountaineering' limit " . $pageDisplay4 . ",6";
    $result_videos_cat4 = mysqli_query($con, $sql_videos_cat4);

    $sql_videos_cat5 = "SELECT * from videos where category_en='Mountain biking tours' limit " . $pageDisplay5 . ",6";
    $result_videos_cat5 = mysqli_query($con, $sql_videos_cat5);

    $sql_videos_cat6 = "SELECT * from videos where category_en='Ski tours' limit " . $pageDisplay6 . ",6";
    $result_videos_cat6 = mysqli_query($con, $sql_videos_cat6);

    $sql_videos_cat7 = "SELECT * from videos where category_en='Quad byke/ATV' limit " . $pageDisplay7 . ",6";
    $result_videos_cat7 = mysqli_query($con, $sql_videos_cat7);

    $sql_videos_cat8 = "SELECT * from videos where category_en='Riding' limit " . $pageDisplay8 . ",6";
    $result_videos_cat8 = mysqli_query($con, $sql_videos_cat8);


    $result_cat1 = mysqli_query($con, "SELECT * FROM videos where category_en='Restaurant'");
    $rowsNumber_cat1 = mysqli_num_rows($result_cat1);
    $perPage_cat1 = $rowsNumber_cat1 / 6;
    $numPages_cat1 = ceil($perPage_cat1);


    $result_cat2 = mysqli_query($con, "SELECT * FROM videos where category_en='Guesthouse'");
    $rowsNumber_cat2 = mysqli_num_rows($result_cat2);
    $perPage_cat2 = $rowsNumber_cat2 / 6;
    $numPages_cat2 = ceil($perPage_cat2);

    $result_cat3 = mysqli_query($con, "SELECT * FROM videos where category_en='Hiking'");
    $rowsNumber_cat3 = mysqli_num_rows($result_cat3);
    $perPage_cat3 = $rowsNumber_cat3 / 6;
    $numPages_cat3 = ceil($perPage_cat3);

    $result_cat4 = mysqli_query($con, "SELECT * FROM videos where category_en='Mountaineering'");
    $rowsNumber_cat4 = mysqli_num_rows($result_cat4);
    $perPage_cat4 = $rowsNumber_cat4 / 6;
    $numPages_cat4 = ceil($perPage_cat4);

    $result_cat5 = mysqli_query($con, "SELECT * FROM videos where category_en='Mountain biking tours'");
    $rowsNumber_cat5 = mysqli_num_rows($result_cat5);
    $perPage_cat5 = $rowsNumber_cat5 / 6;
    $numPages_cat5 = ceil($perPage_cat5);

    $result_cat6 = mysqli_query($con, "SELECT * FROM videos where category_en='Ski tours'");
    $rowsNumber_cat6 = mysqli_num_rows($result_cat6);
    $perPage_cat6 = $rowsNumber_cat6 / 6;
    $numPages_cat6 = ceil($perPage_cat6);

    $result_cat7 = mysqli_query($con, "SELECT * FROM videos where category_en='Quad byke/ATV'");
    $rowsNumber_cat7 = mysqli_num_rows($result_cat7);
    $perPage_cat7 = $rowsNumber_cat7 / 6;
    $numPages_cat7 = ceil($perPage_cat7);


    $result_cat8 = mysqli_query($con, "SELECT * FROM videos where category_en='Riding'");
    $rowsNumber_cat8 = mysqli_num_rows($result_cat8);
    $perPage_cat8 = $rowsNumber_cat8 / 6;
    $numPages_cat8 = ceil($perPage_cat8);
?>