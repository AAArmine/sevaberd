<?php
include "db_configuration/configuration.php";
$html_content = '';
if (isset($_POST['searchIquiry'])) {
    if ($_POST['lang'] == 'am') {
        $sql_search_am = "SELECT menu_name, menu_description, menu_img, price from menu_am WHERE menu_name LIKE '" . $_POST['searchIquiry'] . "%'";
        $result_search_am = mysqli_query($con, $sql_search_am);
        if (mysqli_num_rows($result_search_am) > 0) {
            while ($sql_search_am = mysqli_fetch_assoc($result_search_am)) {
                // $sql_search_am['menu_img']
                $html_content .= "<div class='search_item d-flex'><div class='search_item_item1'><div class='whole_menu_img_search' style='background-image:url(../img_admin/" . $sql_search_am['menu_img'] . ")'></div></div><div class='search_item_item2'><div class='search_name'>" . $sql_search_am['menu_name'] . "</div><div class='search_desc'>" . $sql_search_am['menu_description'] . "</div><div class='search_price'>" . $sql_search_am['price'] . "<span> ՀՀ դրամ</span></div></div></div>";
            }
        }

        $sql_search_en = "SELECT menu_name, menu_description, menu_img, price from menu_en WHERE menu_name LIKE '" . $_POST['searchIquiry'] . "%'";
        $result_search_en = mysqli_query($con, $sql_search_en);
        if (mysqli_num_rows($result_search_en) > 0) {
            while ($sql_search_en = mysqli_fetch_assoc($result_search_en)) {
                // $sql_search_en['menu_img']
                $html_content .= "<div class='search_item d-flex'><div class='search_item_item1'><div class='whole_menu_img_search' style='background-image:url(../img_admin/" . $sql_search_en['menu_img'] . ")'></div></div><div class='search_item_item2'><div class='search_name'>" . $sql_search_en['menu_name'] . "</div><div class='search_desc'>" . $sql_search_en['menu_description'] . "</div><div class='search_price'>" . $sql_search_en['price'] . "<span> AMD</span></div></div></div>";
            }
        }
    } else if ($_POST['lang'] == 'en') {
        $sql_search_en = "SELECT menu_name, menu_description, menu_img, price from menu_en WHERE menu_name LIKE '" . $_POST['searchIquiry'] . "%'";
        $result_search_en = mysqli_query($con, $sql_search_en);
        if (mysqli_num_rows($result_search_en) > 0) {
            while ($sql_search_en = mysqli_fetch_assoc($result_search_en)) {
                // $sql_search_en['menu_img']
                $html_content .= "<div class='search_item d-flex'><div class='search_item_item1'><div class='whole_menu_img_search' style='background-image:url(../img_admin/" . $sql_search_en['menu_img'] . ")'></div></div><div class='search_item_item2'><div class='search_name'>" . $sql_search_en['menu_name'] . "</div><div class='search_desc'>" . $sql_search_en['menu_description'] . "</div><div class='search_price'>" . $sql_search_en['price'] . "<span> AMD</span></div></div></div>";
            }
        }
    } else if ($_POST['lang'] == 'ru') {
        $sql_search_ru = "SELECT menu_name, menu_description, menu_img, price from menu_ru WHERE menu_name LIKE '" . $_POST['searchIquiry'] . "%'";
        $result_search_ru = mysqli_query($con, $sql_search_ru);
        if (mysqli_num_rows($result_search_ru) > 0) {
            while ($sql_search_ru = mysqli_fetch_assoc($result_search_ru)) {
                // $sql_search_ru['menu_img']
                $html_content .= "<div class='search_item d-flex'><div class='search_item_item1'><div class='whole_menu_img_search' style='background-image:url(../img_admin/" . $sql_search_ru['menu_img'] . ")'></div></div><div class='search_item_item2'><div class='search_name'>" . $sql_search_ru['menu_name'] . "</div><div class='search_desc'>" . $sql_search_ru['menu_description'] . "</div><div class='search_price'>" . $sql_search_ru['price'] . "<span> AMD</span></div></div></div>";
            }
        }
        $sql_search_en = "SELECT menu_name, menu_description, menu_img, price from menu_en WHERE menu_name LIKE '" . $_POST['searchIquiry'] . "%'";
        $result_search_en = mysqli_query($con, $sql_search_en);
        if (mysqli_num_rows($result_search_en) > 0) {
            while ($sql_search_en = mysqli_fetch_assoc($result_search_en)) {
                // $sql_search_en['menu_img']
                $html_content .= "<div class='search_item d-flex'><div class='search_item_item1'><div class='whole_menu_img_search' style='background-image:url(../img_admin/" . $sql_search_en['menu_img'] . ")'></div></div><div class='search_item_item2'><div class='search_name'>" . $sql_search_en['menu_name'] . "</div><div class='search_desc'>" . $sql_search_en['menu_description'] . "</div><div class='search_price'>" . $sql_search_en['price'] . "<span> AMD</span></div></div></div>";
            }
        }
    }

    echo $html_content;
}
