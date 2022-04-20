<?php
    $pageIndex = isset($_GET['pageIndex']) ? $_GET['pageIndex'] : '';
    if ($pageIndex == '' || $pageIndex == 1) {
    $pageDisplay = 0;
    } else {
    $pageDisplay = $pageIndex * 3 - 3;
    }

    $pageIndex1 = isset($_GET['pageIndex1']) ? $_GET['pageIndex1'] : '';
    if ($pageIndex1 == '' || $pageIndex1 == 1) {
    $pageDisplay1 = 0;
    } else {
    $pageDisplay1 = $pageIndex1 * 3 - 3;
    }

    $pageIndex2 = isset($_GET['pageIndex2']) ? $_GET['pageIndex2'] : '';
    if ($pageIndex2 == '' || $pageIndex2 == 1) {
    $pageDisplay2 = 0;
    } else {
    $pageDisplay2 = $pageIndex2 * 3 - 3;
    }

    $pageIndex3 = isset($_GET['pageIndex3']) ? $_GET['pageIndex3'] : '';
    if ($pageIndex3 == '' || $pageIndex3 == 1) {
    $pageDisplay3 = 0;
    } else {
    $pageDisplay3 = $pageIndex3 * 3 - 3;
    }

    $pageIndex4 = isset($_GET['pageIndex4']) ? $_GET['pageIndex4'] : '';
    if ($pageIndex4 == '' || $pageIndex4 == 1) {
    $pageDisplay4 = 0;
    } else {
    $pageDisplay4 = $pageIndex4 * 3 - 3;
    }

    $pageIndex5 = isset($_GET['pageIndex5']) ? $_GET['pageIndex5'] : '';
    if ($pageIndex5 == '' || $pageIndex5 == 1) {
    $pageDisplay5 = 0;
    } else {
    $pageDisplay5 = $pageIndex5 * 3 - 3;
    }



    $sql_blog_all_am = "SELECT * from blog_am limit " . $pageDisplay . ",3";
    $result_blog_all_am = mysqli_query($con, $sql_blog_all_am);

    $sql_blog_cat1_am = "SELECT * from blog_am where category='Հայաստան' limit " . $pageDisplay1 . ",3";
    $result_blog_cat1_am = mysqli_query($con, $sql_blog_cat1_am);

    $sql_blog_cat2_am = "SELECT * from blog_am where category='Կոտայքի մարզ' limit " . $pageDisplay2 . ",3";
    $result_blog_cat2_am = mysqli_query($con, $sql_blog_cat2_am);

    $sql_blog_cat3_am = "SELECT * from blog_am where category='Սևաբերդ' limit " . $pageDisplay3 . ",3";
    $result_blog_cat3_am = mysqli_query($con, $sql_blog_cat3_am);

    $sql_blog_cat4_am = "SELECT * from blog_am where category='Պատմամշակութային վայրեր' limit " . $pageDisplay4 . ",3";
    $result_blog_cat4_am = mysqli_query($con, $sql_blog_cat4_am);

    $sql_blog_cat5_am = "SELECT * from blog_am where category='Ժամանցի վայրեր' limit " . $pageDisplay5 . ",3";
    $result_blog_cat5_am = mysqli_query($con, $sql_blog_cat5_am);




    $sql_blog_all_en = "SELECT * from blog_en limit " . $pageDisplay . ",3";
    $result_blog_all_en = mysqli_query($con, $sql_blog_all_en);

    $sql_blog_cat1_en = "SELECT * from blog_en where category='Armenia' limit " . $pageDisplay1 . ",3";
    $result_blog_cat1_en = mysqli_query($con, $sql_blog_cat1_en);

    $sql_blog_cat2_en = "SELECT * from blog_en where category='Kotayk Region' limit " . $pageDisplay2 . ",3";
    $result_blog_cat2_en = mysqli_query($con, $sql_blog_cat2_en);

    $sql_blog_cat3_en = "SELECT * from blog_en where category='Sevaberd' limit " . $pageDisplay3 . ",3";
    $result_blog_cat3_en = mysqli_query($con, $sql_blog_cat3_en);

    $sql_blog_cat4_en = "SELECT * from blog_en where category='Historical and cultural places' limit " . $pageDisplay4 . ",3";
    $result_blog_cat4_en = mysqli_query($con, $sql_blog_cat4_en);

    $sql_blog_cat5_en = "SELECT * from blog_en where category='Entertainment' limit " . $pageDisplay5 . ",3";
    $result_blog_cat5_en = mysqli_query($con, $sql_blog_cat5_en);




    $sql_blog_all_ru = "SELECT * from blog_ru limit " . $pageDisplay . ",3";
    $result_blog_all_ru = mysqli_query($con, $sql_blog_all_ru);

    $sql_blog_cat1_ru = "SELECT * from blog_ru where category='Армения' limit " . $pageDisplay1 . ",3";
    $result_blog_cat1_ru = mysqli_query($con, $sql_blog_cat1_ru);

    $sql_blog_cat2_ru = "SELECT * from blog_ru where category='Котайкская область' limit " . $pageDisplay2 . ",3";
    $result_blog_cat2_ru = mysqli_query($con, $sql_blog_cat2_ru);

    $sql_blog_cat3_ru = "SELECT * from blog_ru where category='Севаберд' limit " . $pageDisplay3 . ",3";
    $result_blog_cat3_ru = mysqli_query($con, $sql_blog_cat3_ru);

    $sql_blog_cat4_ru = "SELECT * from blog_ru where category='Исторические и культурные объекты' limit " . $pageDisplay4 . ",3";
    $result_blog_cat4_ru = mysqli_query($con, $sql_blog_cat4_ru);

    $sql_blog_cat5_ru = "SELECT * from blog_ru where category='Развлекательные заведения' limit " . $pageDisplay5 . ",3";
    $result_blog_cat5_ru = mysqli_query($con, $sql_blog_cat5_ru);



    $result_all = mysqli_query($con, "SELECT * FROM blog_en");
    $rowsNumber_all = mysqli_num_rows($result_all);
    $perPage_all = $rowsNumber_all / 3;
    $numPages_all = ceil($perPage_all);


    $result_cat1 = mysqli_query($con, "SELECT * FROM blog_en where category='Armenia'");
    $rowsNumber_cat1 = mysqli_num_rows($result_cat1);
    $perPage_cat1 = $rowsNumber_cat1 / 3;
    $numPages_cat1 = ceil($perPage_cat1);

    $result_cat2 = mysqli_query($con, "SELECT * FROM blog_en where category='Kotayk Region'");
    $rowsNumber_cat2 = mysqli_num_rows($result_cat2);
    $perPage_cat2 = $rowsNumber_cat2 / 3;
    $numPages_cat2 = ceil($perPage_cat2);

    $result_cat3 = mysqli_query($con, "SELECT * FROM blog_en where category='Sevaberd'");
    $rowsNumber_cat3 = mysqli_num_rows($result_cat3);
    $perPage_cat3 = $rowsNumber_cat3 / 3;
    $numPages_cat3 = ceil($perPage_cat3);

    $result_cat4 = mysqli_query($con, "SELECT * FROM blog_en where category='Historical and cultural places'");
    $rowsNumber_cat4 = mysqli_num_rows($result_cat4);
    $perPage_cat4 = $rowsNumber_cat4 / 3;
    $numPages_cat4 = ceil($perPage_cat4);

    $result_cat5 = mysqli_query($con, "SELECT * FROM blog_en where category='Entertainment'");
    $rowsNumber_cat5 = mysqli_num_rows($result_cat5);
    $perPage_cat5 = $rowsNumber_cat5 / 3;
    $numPages_cat5 = ceil($perPage_cat5);



// last added
    $sql_last_dates_am = "SELECT id, title, text, category, image,  DATE(date_current) AS DATE from blog_am ORDER BY DATE DESC limit 3";
    $result_last_dates_am = mysqli_query($con, $sql_last_dates_am);

    $sql_last_dates_en = "SELECT id, title, text, category, image,  DATE(date_current) AS DATE from blog_en ORDER BY DATE DESC limit 3";
    $result_last_dates_en = mysqli_query($con, $sql_last_dates_en);

    $sql_last_dates_ru = "SELECT id, title, text, category, image,  DATE(date_current) AS DATE from blog_ru ORDER BY DATE DESC limit 3";
    $result_last_dates_ru = mysqli_query($con, $sql_last_dates_ru);
    

?>