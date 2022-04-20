<?php

include "../db_configuration/configuration.php";
include "../restaurant_process_sql.php";
include "../header.php";
?>
<link rel="stylesheet" href="../css/restaurant.css">
<link rel="stylesheet" href="../carousel/css/owl.carousel.min.css">
<link rel="stylesheet" href="../carousel/css/style.css">

<title>Sevaberd Restaurant</title>
</head>

<body>
    <?php
    include "navbar.php";
    ?>
    <div class="mainTopImg d-flex">
        <div class="mainTopImgFlex-item1">
            <div class="center_maintop">
                <div class="mainTopTitle">
                    <?php
                    if ($lang_menu == "am") {
                        echo $row_main_am['title_main'];
                    }
                    if ($lang_menu == "en") {
                        echo $row_main_en['title_main'];
                    }
                    if ($lang_menu == "ru") {
                        echo $row_main_ru['title_main'];
                    }
                    ?>
                </div>
                <div class="mainTopText">
                    <?php
                    if ($lang_menu == "am") {
                        echo $row_main_am['text_main'];
                    }
                    if ($lang_menu == "en") {
                        echo $row_main_en['text_main'];
                    }
                    if ($lang_menu == "ru") {
                        echo $row_main_ru['text_main'];
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="mainTopImgFlex-item2"></div>
    </div>
    <div class="about_section d-flex">
        <div class="about_section_item1 d-flex">
            <div class="about_section_item1_item1">
            </div>
            <div class="about_section_item1_item2">
                <div class="about_section_item1_item2_img1"></div>
                <div class="about_section_item1_item2_img2"></div>
            </div>
        </div>
        <div class="about_section_item2">
            <div class="about_item2_title">
                <?php
                if ($lang_menu == "am") {
                    echo $row_about_am['title_about'];
                }
                if ($lang_menu == "en") {
                    echo $row_about_en['title_about'];
                }
                if ($lang_menu == "ru") {
                    echo $row_about_ru['title_about'];
                }
                ?>
            </div>
            <div class="about_item2_text">
                <?php
                if ($lang_menu == "am") {
                    echo $row_about_am['text_about'];
                }
                if ($lang_menu == "en") {
                    echo $row_about_en['text_about'];
                }
                if ($lang_menu == "ru") {
                    echo $row_about_ru['text_about'];
                }
                ?>
            </div>
        </div>
    </div>

    <!-- special offers section  -->

    <div class="special-offers-sec">

        <?php
        if ($lang_menu == "am") {
            $k = 1;
            if (mysqli_num_rows($result_sp_offers_am) > 0) {
        ?>
                <h3 class="special-offers-caption">
                    Հատուկ առաջարկներ
                </h3>
                <div class="special-offers-flex d-flex">
                    <?php
                    while ($sql_sp_offers_am = mysqli_fetch_assoc($result_sp_offers_am)) {
                    ?>
                        <div class="special-offers-item1" id="spOffer-<?php echo $k; ?>">
                                <div class="special-offers-img special-offers-img1" style="background-image: url('../img_admin/<?php echo $sql_sp_offers_am['image_offers'] ?>');">

                                </div>
                            <div class="special-offers-subcaption">
                                <?php echo $sql_sp_offers_am['title_offers'] ?>
                            </div>
                            <div class="special-offers-text">
                                <?php echo $sql_sp_offers_am['text_offers'] ?>
                            </div>

                        </div>

                    <?php
                        $k++;
                    }
                }
            }
            if ($lang_menu == "en") {
                $k = 1;
                if (mysqli_num_rows($result_sp_offers_en) > 0) {
                    ?>
                    <h3 class="special-offers-caption">
                        Special offers
                        <!-- Upcoming Special Events -->
                    </h3>
                    <div class="special-offers-flex d-flex">
                        <?php
                        while ($sql_sp_offers_en = mysqli_fetch_assoc($result_sp_offers_en)) {
                        ?>

                            <!-- ciklov petqe berel -->
                            <div class="special-offers-item1" id="spOffer-<?php echo $k; ?>">
                                <div class="special-offers-img special-offers-img1" style="background-image: url('../img_admin/<?php echo $sql_sp_offers_en['image_offers'] ?>');">

                                </div>
                                <div class="special-offers-subcaption">
                                    <?php echo $sql_sp_offers_en['title_offers'] ?>
                                </div>
                                <div class="special-offers-text">
                                    <?php echo $sql_sp_offers_en['text_offers'] ?>
                                </div>
                            </div>

                        <?php
                            $k++;
                        }
                    }
                }

                if ($lang_menu == "ru") {
                    $k = 1;
                    if (mysqli_num_rows($result_sp_offers_ru) > 0) {
                        ?>

                        <h3 class="special-offers-caption">
                            Специальные предложения
                            <!-- Предстоящие специальные мероприятия -->
                        </h3>
                        <div class="special-offers-flex d-flex">
                            <?php
                            while ($sql_sp_offers_ru = mysqli_fetch_assoc($result_sp_offers_ru)) {
                            ?>

                                <!-- ciklov petqe berel -->
                                <div class="special-offers-item1" id="spOffer-<?php echo $k; ?>">
                                    <div class="special-offers-img special-offers-img1" style="background-image: url('../img_admin/<?php echo $sql_sp_offers_ru['image_offers'] ?>');">

                                    </div>
                                    <div class="special-offers-subcaption">
                                        <?php echo $sql_sp_offers_ru['title_offers'] ?>
                                    </div>
                                    <div class="special-offers-text">
                                        <?php echo $sql_sp_offers_ru['text_offers'] ?>
                                    </div>
                                </div>
                    <?php
                                $k++;
                            }
                        }
                    }

                    ?>

                        </div>

                        <div class="d-flex spOfferNavigator" id='display_none'>
                            <div class="offerNavItem1">
                                <span class="left_sp_offer">
                                    <img src="../Icons/arrow.png" alt="" class='left_right'>
                                </span>
                                <span class="right_sp_offer">
                                    <img src="../Icons/arrow right.png" alt="" class='left_right'>
                                </span>
                            </div>
                            <div class="spOfferBorder d-flex">
                                <div class="spOfferBorder_item spOfferBorder_bottom spOfferBorder_item_0"></div>
                            </div>
                        </div>
                    </div>

                    <!-- end special offers -->

                    <div class="advantages_section mt-5 mb-5">
                        <div class="adv_title_main">
                            <?php
                            if ($lang_menu == "am") {
                                echo "Առավելությունները";
                            }
                            if ($lang_menu == "en") {
                                echo "Advantages";
                            }
                            if ($lang_menu == "ru") {
                                echo 'Преимущества';
                            }
                            ?>
                        </div> 
                        <div class="tochange_adv">
                        <?php
                        if ($lang_menu == "am") {
                        ?>
                        
                            <div class="adv_sec_main_flex d-flex">
                                <div class="adv_sec_main-item1">
                                    <div class="adv_concrete">
                                        <div class="adv_concrete_title">
                                            <?php echo $row_adv_am1['title_adv']; ?>
                                        </div>
                                        <div class="adv_concrete_text">
                                            <?php echo $row_adv_am1['text_adv']; ?>
                                        </div>
                                    </div>
                                    <div class="adv_concrete adv_concrete2">
                                        <div class="adv_concrete_title">
                                            <?php echo $row_adv_am2['title_adv']; ?>
                                        </div>
                                        <div class="adv_concrete_text">
                                            <?php echo $row_adv_am2['text_adv']; ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="adv_sec_main-item2"></div>

                                <div class="adv_sec_main-item3">
                                    <div class="adv_concrete">
                                        <div class="adv_concrete_title">
                                            <?php echo $row_adv_am3['title_adv']; ?>
                                        </div>
                                        <div class="adv_concrete_text">
                                            <?php echo $row_adv_am3['text_adv']; ?>

                                        </div>
                                    </div>
                                    <div class="adv_concrete adv_concrete2">
                                        <div class="adv_concrete_title">
                                            <?php echo $row_adv_am4['title_adv']; ?>
                                        </div>
                                        <div class="adv_concrete_text">
                                            <?php echo $row_adv_am4['text_adv']; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        if ($lang_menu == "en") {
                        ?>
                            <div class="adv_sec_main_flex d-flex">
                                <div class="adv_sec_main-item1">
                                    <div class="adv_concrete">
                                        <div class="adv_concrete_title">
                                            <?php echo $row_adv_en1['title_adv']; ?>
                                        </div>
                                        <div class="adv_concrete_text">
                                            <?php echo $row_adv_en1['text_adv']; ?>
                                        </div>
                                    </div>
                                    <div class="adv_concrete adv_concrete2">
                                        <div class="adv_concrete_title">
                                            <?php echo $row_adv_en2['title_adv']; ?>
                                        </div>
                                        <div class="adv_concrete_text">
                                            <?php echo $row_adv_en2['text_adv']; ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="adv_sec_main-item2"></div>

                                <div class="adv_sec_main-item3">
                                    <div class="adv_concrete">
                                        <div class="adv_concrete_title">
                                            <?php echo $row_adv_en3['title_adv']; ?>
                                        </div>
                                        <div class="adv_concrete_text">
                                            <?php echo $row_adv_en3['text_adv']; ?>

                                        </div>
                                    </div>
                                    <div class="adv_concrete adv_concrete2">
                                        <div class="adv_concrete_title">
                                            <?php echo $row_adv_en4['title_adv']; ?>
                                        </div>
                                        <div class="adv_concrete_text">
                                            <?php echo $row_adv_en4['text_adv']; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        if ($lang_menu == "ru") {
                        ?>
                            <div class="adv_sec_main_flex d-flex">
                                <div class="adv_sec_main-item1">
                                    <div class="adv_concrete">
                                        <div class="adv_concrete_title">
                                            <?php echo $row_adv_ru1['title_adv']; ?>
                                        </div>
                                        <div class="adv_concrete_text">
                                            <?php echo $row_adv_ru1['text_adv']; ?>
                                        </div>
                                    </div>
                                    <div class="adv_concrete adv_concrete2">
                                        <div class="adv_concrete_title">
                                            <?php echo $row_adv_ru2['title_adv']; ?>
                                        </div>
                                        <div class="adv_concrete_text">
                                            <?php echo $row_adv_ru2['text_adv']; ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="adv_sec_main-item2"></div>

                                <div class="adv_sec_main-item3">
                                    <div class="adv_concrete">
                                        <div class="adv_concrete_title">
                                            <?php echo $row_adv_ru3['title_adv']; ?>
                                        </div>
                                        <div class="adv_concrete_text">
                                            <?php echo $row_adv_ru3['text_adv']; ?>

                                        </div>
                                    </div>
                                    <div class="adv_concrete adv_concrete2">
                                        <div class="adv_concrete_title">
                                            <?php echo $row_adv_ru4['title_adv']; ?>
                                        </div>
                                        <div class="adv_concrete_text">
                                            <?php echo $row_adv_ru4['text_adv']; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php
                        }
                        ?>
                        </div>

                        
                        <!-- change in media -->

                        <div class="adv_768">
                            <div class="tochange_abs"></div>
                            <div class="adv_changed">
                                <?php
                                if($lang_menu == "am"){
                                ?>
                                    <div class="adv_concrete_title">
                                        <?php echo $row_adv_am1['title_adv']; ?>
                                    </div>
                                    <div class="adv_concrete_text">
                                        <?php echo $row_adv_am1['text_adv']; ?>
                                    </div>
                                    <div class="adv_concrete_title">
                                        <?php echo $row_adv_am2['title_adv']; ?>
                                    </div>
                                    <div class="adv_concrete_text">
                                        <?php echo $row_adv_am2['text_adv']; ?>
                                    </div>
                                    <div class="adv_concrete_title">
                                        <?php echo $row_adv_am3['title_adv']; ?>
                                    </div>
                                    <div class="adv_concrete_text">
                                        <?php echo $row_adv_am3['text_adv']; ?>
                                    </div>
                                    <div class="adv_concrete_title">
                                        <?php echo $row_adv_am4['title_adv']; ?>
                                    </div>
                                    <div class="adv_concrete_text">
                                        <?php echo $row_adv_am4['text_adv']; ?>
                                    </div>
                                <?php
                                }
                                if($lang_menu == "en"){
                                ?>
                                    <div class="adv_concrete_title">
                                        <?php echo $row_adv_en1['title_adv']; ?>
                                    </div>
                                    <div class="adv_concrete_text">
                                        <?php echo $row_adv_en1['text_adv']; ?>
                                    </div>
                                    <div class="adv_concrete_title">
                                        <?php echo $row_adv_en2['title_adv']; ?>
                                    </div>
                                    <div class="adv_concrete_text">
                                        <?php echo $row_adv_en2['text_adv']; ?>
                                    </div>
                                    <div class="adv_concrete_title">
                                        <?php echo $row_adv_en3['title_adv']; ?>
                                    </div>
                                    <div class="adv_concrete_text">
                                        <?php echo $row_adv_en3['text_adv']; ?>
                                    </div>
                                    <div class="adv_concrete_title">
                                        <?php echo $row_adv_en4['title_adv']; ?>
                                    </div>
                                    <div class="adv_concrete_text">
                                        <?php echo $row_adv_en4['text_adv']; ?>
                                    </div>
                                <?php
                                }
                                if($lang_menu == "ru"){
                                ?>
                                    <div class="adv_concrete_title">
                                        <?php echo $row_adv_ru1['title_adv']; ?>
                                    </div>
                                    <div class="adv_concrete_text">
                                        <?php echo $row_adv_ru1['text_adv']; ?>
                                    </div>
                                    <div class="adv_concrete_title">
                                        <?php echo $row_adv_ru2['title_adv']; ?>
                                    </div>
                                    <div class="adv_concrete_text">
                                        <?php echo $row_adv_ru2['text_adv']; ?>
                                    </div>
                                    <div class="adv_concrete_title">
                                        <?php echo $row_adv_ru3['title_adv']; ?>
                                    </div>
                                    <div class="adv_concrete_text">
                                        <?php echo $row_adv_ru3['text_adv']; ?>
                                    </div>
                                    <div class="adv_concrete_title">
                                        <?php echo $row_adv_ru4['title_adv']; ?>
                                    </div>
                                    <div class="adv_concrete_text">
                                        <?php echo $row_adv_ru4['text_adv']; ?>
                                    </div>
                                    <?php
                                }
                                ?>

                            </div>

                        </div>


                    </div>
                    <div class="rest_menu">
                        <?php
                        if ($lang_menu == "am") {
                        ?>
                        <div class="leaf_abs">
                            <img src="../images/leaf.png" alt="" class='leaf_img'>
                        </div>
                        <div class="menu_caption align_center mb-5 pb-3">
                            Ամենասիրելի Ուտեստները
                        </div>
                        <div class="hide_1076">
                            <div class="favorite_1_flex d-flex">

                                <div class="img_fav_1_div dish_img_circle" style='background-image:url("../img_admin/<?php echo $row_manu_fav_am1['menu_img'] ?>")'>

                                </div>
                                <div class="content_fav_1_div content_fav_div">
                                    <h3><?php echo $row_manu_fav_am1['name_fav_menu'] ?></h3>
                                    <p><?php echo $row_manu_fav_am1['desc_fav_menu'] ?> </p>
                                    <div class="abs_arrow abs_arrow1">
                                        <img src="../images/restaurant_arrow.png" alt="">
                                    </div>
                                    <div class="abs_papper1">
                                        <img src="../images/papper.png" alt="" class='papper_img_size'>
                                    </div>
                                </div>

                                </div>
                                <div class="favorite_2_flex d-flex">
                                <div class="content_fav_2_div content_fav_div">
                                    <h3><?php echo $row_manu_fav_am2['name_fav_menu'] ?></h3>
                                    <p><?php echo $row_manu_fav_am2['desc_fav_menu'] ?></p>
                                    <div class="abs_arrow abs_arrow2">
                                        <img src="../images/restaurant_arrow.png" alt="">
                                    </div>
                                </div>
                                <div class="img_fav_2_div dish_img_circle" style='background-image:url("../img_admin/<?php echo $row_manu_fav_am2['menu_img'] ?>")'>

                                </div>
                                </div>
                                <div class="favorite_3_flex d-flex">
                                <div class="img_fav_3_div dish_img_circle" style='background-image:url("../img_admin/<?php echo $row_manu_fav_am3['menu_img'] ?>")'>
                                </div>
                                <div class="content_fav_3_div content_fav_div">
                                    <h3><?php echo $row_manu_fav_am3['name_fav_menu'] ?></h3>
                                    <p><?php echo $row_manu_fav_am3['desc_fav_menu'] ?></p>
                                    <div class="abs_arrow abs_arrow3">
                                        <img src="../images/restaurant_arrow.png" alt="">
                                    </div>
                                </div>
                                </div>
                                <div class="favorite_4_flex d-flex">
                                <div class="content_fav_2_div content_fav_div">
                                    <h3><?php echo $row_manu_fav_am4['name_fav_menu'] ?></h3>
                                    <p><?php echo $row_manu_fav_am4['desc_fav_menu'] ?></p>
                                    <div class="abs_arrow abs_arrow2">
                                        <img src="../images/restaurant_arrow.png" alt="">
                                    </div>
                                    <div class="abs_papper4">
                                        <img src="../images/papper.png" alt="" class='papper_img_size'>
                                    </div>
                                </div>
                                <div class="img_fav_2_div dish_img_circle" style='background-image:url("../img_admin/<?php echo $row_manu_fav_am4['menu_img'] ?>")'>
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                        if ($lang_menu == "en") {
                        ?>
                        <div class="leaf_abs">
                            <img src="../images/leaf.png" alt="" class='leaf_img'>
                        </div>
                        <div class="menu_caption align_center mb-5 pb-3">
                            
                            Favorite Dishes
                        </div>
                        <div class="hide_1076">
                            <div class="favorite_1_flex d-flex">

                                <div class="img_fav_1_div dish_img_circle" style='background-image:url("../img_admin/<?php echo $row_manu_fav_en1['menu_img'] ?>")'>

                                </div>
                                <div class="content_fav_1_div content_fav_div">
                                    <h3><?php echo $row_manu_fav_en1['name_fav_menu'] ?></h3>
                                    <p><?php echo $row_manu_fav_en1['desc_fav_menu'] ?> </p>
                                    <div class="abs_arrow abs_arrow1">
                                        <img src="../images/restaurant_arrow.png" alt="">
                                    </div>
                                    <div class="abs_papper1">
                                        <img src="../images/papper.png" alt="" class='papper_img_size'>
                                    </div>
                                </div>

                                </div>
                                <div class="favorite_2_flex d-flex">
                                <div class="content_fav_2_div content_fav_div">
                                    <h3><?php echo $row_manu_fav_en2['name_fav_menu'] ?></h3>
                                    <p><?php echo $row_manu_fav_en2['desc_fav_menu'] ?></p>
                                    <div class="abs_arrow abs_arrow2">
                                        <img src="../images/restaurant_arrow.png" alt="">
                                    </div>
                                </div>
                                <div class="img_fav_2_div dish_img_circle" style='background-image:url("../img_admin/<?php echo $row_manu_fav_en2['menu_img'] ?>")'>

                                </div>
                                </div>
                                <div class="favorite_3_flex d-flex">
                                <div class="img_fav_3_div dish_img_circle" style='background-image:url("../img_admin/<?php echo $row_manu_fav_en3['menu_img'] ?>")'>
                                </div>
                                <div class="content_fav_3_div content_fav_div">
                                    <h3><?php echo $row_manu_fav_en3['name_fav_menu'] ?></h3>
                                    <p><?php echo $row_manu_fav_en3['desc_fav_menu'] ?></p>
                                    <div class="abs_arrow abs_arrow3">
                                        <img src="../images/restaurant_arrow.png" alt="">
                                    </div>
                                </div>
                                </div>
                                <div class="favorite_4_flex d-flex">
                                <div class="content_fav_2_div content_fav_div">
                                    <h3><?php echo $row_manu_fav_en4['name_fav_menu'] ?></h3>
                                    <p><?php echo $row_manu_fav_en4['desc_fav_menu'] ?></p>
                                    <div class="abs_arrow abs_arrow2">
                                        <img src="../images/restaurant_arrow.png" alt="">
                                    </div>
                                    <div class="abs_papper4">
                                        <img src="../images/papper.png" alt="" class='papper_img_size'>
                                    </div>
                                </div>
                                <div class="img_fav_2_div dish_img_circle" style='background-image:url("../img_admin/<?php echo $row_manu_fav_am4['menu_img'] ?>")'>
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                        
                        if ($lang_menu == "ru") {
                        ?>
                        <div class="leaf_abs">
                            <img src="../images/leaf.png" alt="" class='leaf_img'>
                        </div>
                        <div class="menu_caption align_center mb-5 pb-3">
                        Любимые блюда
                        </div>
                        <div class="hide_1076">
                            <div class="favorite_1_flex d-flex">

                                <div class="img_fav_1_div dish_img_circle" style='background-image:url("../img_admin/<?php echo $row_manu_fav_am1['menu_img'] ?>")'>

                                </div>
                                <div class="content_fav_1_div content_fav_div">
                                    <h3><?php echo $row_manu_fav_ru1['name_fav_menu'] ?></h3>
                                    <p><?php echo $row_manu_fav_ru1['desc_fav_menu'] ?> </p>
                                    <div class="abs_arrow abs_arrow1">
                                        <img src="../images/restaurant_arrow.png" alt="">
                                    </div>
                                    <div class="abs_papper1">
                                        <img src="../images/papper.png" alt="" class='papper_img_size'>
                                    </div>
                                </div>

                                </div>
                                <div class="favorite_2_flex d-flex">
                                <div class="content_fav_2_div content_fav_div">
                                    <h3><?php echo $row_manu_fav_ru2['name_fav_menu'] ?></h3>
                                    <p><?php echo $row_manu_fav_ru2['desc_fav_menu'] ?></p>
                                    <div class="abs_arrow abs_arrow2">
                                        <img src="../images/restaurant_arrow.png" alt="">
                                    </div>
                                </div>
                                <div class="img_fav_2_div dish_img_circle" style='background-image:url("../img_admin/<?php echo $row_manu_fav_ru2['menu_img'] ?>")'>

                                </div>
                                </div>
                                <div class="favorite_3_flex d-flex">
                                <div class="img_fav_3_div dish_img_circle" style='background-image:url("../img_admin/<?php echo $row_manu_fav_ru3['menu_img'] ?>")'>
                                </div>
                                <div class="content_fav_3_div content_fav_div">
                                    <h3><?php echo $row_manu_fav_ru3['name_fav_menu'] ?></h3>
                                    <p><?php echo $row_manu_fav_ru3['desc_fav_menu'] ?></p>
                                    <div class="abs_arrow abs_arrow3">
                                        <img src="../images/restaurant_arrow.png" alt="">
                                    </div>
                                </div>
                                </div>
                                <div class="favorite_4_flex d-flex">
                                <div class="content_fav_2_div content_fav_div">
                                    <h3><?php echo $row_manu_fav_ru4['name_fav_menu'] ?></h3>
                                    <p><?php echo $row_manu_fav_ru4['desc_fav_menu'] ?></p>
                                    <div class="abs_arrow abs_arrow2">
                                        <img src="../images/restaurant_arrow.png" alt="">
                                    </div>
                                    <div class="abs_papper4">
                                        <img src="../images/papper.png" alt="" class='papper_img_size'>
                                    </div>
                                </div>
                                <div class="img_fav_2_div dish_img_circle" style='background-image:url("../img_admin/<?php echo $row_manu_fav_am4['menu_img'] ?>")'>
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                        ?>

                        <!-- show_1076_am -->

                        <div class="show_1076">
                            <?php
                            if ($lang_menu == "am") {
                            ?>
                            <div class="flex_1076 d-flex">
                                <div class="flex_1076_item1">
                                    <div class="dish_circle" style='background-image:url("../img_admin/<?php echo $row_manu_fav_am1['menu_img'] ?>")'>
                                    </div>
                                </div>
                            
                                <div class="flex_1076_item2">
                                    <h3><?php echo $row_manu_fav_am1['name_fav_menu'] ?></h3>
                                    <p><?php echo $row_manu_fav_am1['desc_fav_menu'] ?> </p>
                                </div>
                            </div>
                            <div class="flex_1076 d-flex">
                                <div class="flex_1076_item1">
                                    <div class="dish_circle" style='background-image:url("../img_admin/<?php echo $row_manu_fav_am2['menu_img'] ?>")'>
                                    </div>
                                </div>
                                <div class="flex_1076_item2">
                                    <h3><?php echo $row_manu_fav_am2['name_fav_menu'] ?></h3>
                                    <p><?php echo $row_manu_fav_am2['desc_fav_menu'] ?> </p>
                                </div>
                            </div>
                            <div class="flex_1076 d-flex">
                                <div class="flex_1076_item1">
                                    <div class="dish_circle" style='background-image:url("../img_admin/<?php echo $row_manu_fav_am3['menu_img'] ?>")'>
                                    </div>
                                </div>
                            
                                <div class="flex_1076_item2">
                                    <h3><?php echo $row_manu_fav_am3['name_fav_menu'] ?></h3>
                                    <p><?php echo $row_manu_fav_am3['desc_fav_menu'] ?> </p>
                                </div>
                            </div>
                            <div class="flex_1076 d-flex">
                                <div class="flex_1076_item1">
                                    <div class="dish_circle" style='background-image:url("../img_admin/<?php echo $row_manu_fav_am4['menu_img'] ?>")'>
                                    </div>
                                </div>
                            
                                <div class="flex_1076_item2">
                                    <h3><?php echo $row_manu_fav_am4['name_fav_menu'] ?></h3>
                                    <p><?php echo $row_manu_fav_am4['desc_fav_menu'] ?> </p>
                                </div>
                            </div>
                            <?php
                            }
                            ?>
                            <?php
                            if ($lang_menu == "en") {
                            ?>
                            <div class="flex_1076 d-flex">
                                <div class="flex_1076_item1">
                                    <div class="dish_circle" style='background-image:url("../img_admin/<?php echo $row_manu_fav_en1['menu_img'] ?>")'>
                                    </div>
                                </div>
                            
                                <div class="flex_1076_item2">
                                    <h3><?php echo $row_manu_fav_en1['name_fav_menu'] ?></h3>
                                    <p><?php echo $row_manu_fav_en1['desc_fav_menu'] ?> </p>
                                </div>
                            </div>
                            <div class="flex_1076 d-flex">
                                <div class="flex_1076_item1">
                                    <div class="dish_circle" style='background-image:url("../img_admin/<?php echo $row_manu_fav_en2['menu_img'] ?>")'>
                                    </div>
                                </div>
                                <div class="flex_1076_item2">
                                    <h3><?php echo $row_manu_fav_en2['name_fav_menu'] ?></h3>
                                    <p><?php echo $row_manu_fav_en2['desc_fav_menu'] ?> </p>
                                </div>
                            </div>
                            <div class="flex_1076 d-flex">
                                <div class="flex_1076_item1">
                                    <div class="dish_circle" style='background-image:url("../img_admin/<?php echo $row_manu_fav_en3['menu_img'] ?>")'>
                                    </div>
                                </div>
                            
                                <div class="flex_1076_item2">
                                    <h3><?php echo $row_manu_fav_en3['name_fav_menu'] ?></h3>
                                    <p><?php echo $row_manu_fav_en3['desc_fav_menu'] ?> </p>
                                </div>
                            </div>
                            <div class="flex_1076 d-flex">
                                <div class="flex_1076_item1">
                                    <div class="dish_circle" style='background-image:url("../img_admin/<?php echo $row_manu_fav_en4['menu_img'] ?>")'>
                                    </div>
                                </div>
                            
                                <div class="flex_1076_item2">
                                    <h3><?php echo $row_manu_fav_en4['name_fav_menu'] ?></h3>
                                    <p><?php echo $row_manu_fav_en4['desc_fav_menu'] ?> </p>
                                </div>
                            </div>
                            <?php
                            }
                            if ($lang_menu == "ru") {
                            ?>
                            <div class="flex_1076 d-flex">
                                <div class="flex_1076_item1">
                                    <div class="dish_circle" style='background-image:url("../img_admin/<?php echo $row_manu_fav_ru1['menu_img'] ?>")'>
                                    </div>
                                </div>
                            
                                <div class="flex_1076_item2">
                                    <h3><?php echo $row_manu_fav_ru1['name_fav_menu'] ?></h3>
                                    <p><?php echo $row_manu_fav_ru1['desc_fav_menu'] ?> </p>
                                </div>
                            </div>
                            <div class="flex_1076 d-flex">
                                <div class="flex_1076_item1">
                                    <div class="dish_circle" style='background-image:url("../img_admin/<?php echo $row_manu_fav_ru2['menu_img'] ?>")'>
                                    </div>
                                </div>
                                <div class="flex_1076_item2">
                                    <h3><?php echo $row_manu_fav_ru2['name_fav_menu'] ?></h3>
                                    <p><?php echo $row_manu_fav_ru2['desc_fav_menu'] ?> </p>
                                </div>
                            </div>
                            <div class="flex_1076 d-flex">
                                <div class="flex_1076_item1">
                                    <div class="dish_circle" style='background-image:url("../img_admin/<?php echo $row_manu_fav_ru3['menu_img'] ?>")'>
                                    </div>
                                </div>
                            
                                <div class="flex_1076_item2">
                                    <h3><?php echo $row_manu_fav_ru3['name_fav_menu'] ?></h3>
                                    <p><?php echo $row_manu_fav_ru3['desc_fav_menu'] ?> </p>
                                </div>
                            </div>
                            <div class="flex_1076 d-flex">
                                <div class="flex_1076_item1">
                                    <div class="dish_circle" style='background-image:url("../img_admin/<?php echo $row_manu_fav_ru4['menu_img'] ?>")'>
                                    </div>
                                </div>
                            
                                <div class="flex_1076_item2">
                                    <h3><?php echo $row_manu_fav_ru4['name_fav_menu'] ?></h3>
                                    <p><?php echo $row_manu_fav_ru4['desc_fav_menu'] ?> </p>
                                </div>
                            </div>
                            <?php
                            }
                            ?>
                        </div>
                        
                        <div class="go_to_all_div">
                            <a href="menu.php">
                                <div class="go_to_all_but">
                                <?php
                                    if ($lang_menu == "am") {
                                        echo "Դիտել ամբողջ մենյուն";
                                    }
                                    if ($lang_menu == "en") {
                                        echo "View full menu";
                                    }
                                    if ($lang_menu == "ru") {
                                        echo "Посмотреть полное меню";
                                    }
                                ?>
                                    
                                </div>
                            </a>
                        </div>

                    </div>



                    <!-- your events with us -->
                    <div class="your-events-sec">
                        <?php
                        if ($lang_menu == "am") {
                        ?>
                            <h3 class="special-offers-caption">
                                Նշեք Ձեր միջոցառումները մեզ մոտ
                            </h3>
                            <div class="special-offers-flex d-flex">
                                <div class="your_event_item1">
                                    <div class="special-offers-img" style="background-image: url('../img_admin/<?php echo $row_restaurant_events_am1['img_event'] ?>');">

                                    </div>
                                    <div class="special-offers-subcaption">
                                        <?php echo $row_restaurant_events_am1['name_event'] ?>
                                    </div>
                                    <div class="special-offers-text">
                                        <?php echo $row_restaurant_events_am1['desc_event'] ?>
                                    </div>
                                </div>
                                <div class="your_event_item2">
                                    <div class="special-offers-img" style="background-image: url('../img_admin/<?php echo $row_restaurant_events_am2['img_event'] ?>');">

                                    </div>
                                    <div class="special-offers-subcaption">
                                        <?php echo $row_restaurant_events_am2['name_event'] ?>
                                    </div>
                                    <div class="special-offers-text">
                                        <?php echo $row_restaurant_events_am2['desc_event'] ?>
                                    </div>
                                </div>
                                <div class="your_event_item3">
                                    <div class="special-offers-img" style="background-image: url('../img_admin/<?php echo $row_restaurant_events_am3['img_event'] ?>');">

                                    </div>
                                    <div class="special-offers-subcaption">
                                        <?php echo $row_restaurant_events_am3['name_event'] ?>
                                    </div>
                                    <div class="special-offers-text">
                                        <?php echo $row_restaurant_events_am3['desc_event'] ?>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        if ($lang_menu == "en") {
                        ?>
                            <h3 class="special-offers-caption">
                                Celebrate your events with us
                            </h3>
                            <div class="special-offers-flex d-flex">
                                <div class="your_event_item1">
                                    <div class="special-offers-img" style="background-image: url('../img_admin/<?php echo $row_restaurant_events_en1['img_event'] ?>');">

                                    </div>
                                    <div class="special-offers-subcaption">
                                        <?php echo $row_restaurant_events_en1['name_event'] ?>
                                    </div>
                                    <div class="special-offers-text">
                                        <?php echo $row_restaurant_events_en1['desc_event'] ?>
                                    </div>
                                </div>
                                <div class="your_event_item2">
                                    <div class="special-offers-img" style="background-image: url('../img_admin/<?php echo $row_restaurant_events_en2['img_event'] ?>');">

                                    </div>
                                    <div class="special-offers-subcaption">
                                        <?php echo $row_restaurant_events_en2['name_event'] ?>
                                    </div>
                                    <div class="special-offers-text">
                                        <?php echo $row_restaurant_events_en2['desc_event'] ?>
                                    </div>
                                </div>
                                <div class="your_event_item3">
                                    <div class="special-offers-img" style="background-image: url('../img_admin/<?php echo $row_restaurant_events_en3['img_event'] ?>');">

                                    </div>
                                    <div class="special-offers-subcaption">
                                        <?php echo $row_restaurant_events_en3['name_event'] ?>
                                    </div>
                                    <div class="special-offers-text">
                                        <?php echo $row_restaurant_events_en3['desc_event'] ?>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        if ($lang_menu == "ru") {
                        ?>
                            <h3 class="special-offers-caption">
                                Отмечайте ваши мероприятия вместе с нами
                            </h3>
                            <div class="special-offers-flex d-flex">
                                <div class="your_event_item1">
                                    <div class="special-offers-img" style="background-image: url('../img_admin/<?php echo $row_restaurant_events_ru1['img_event'] ?>');">

                                    </div>
                                    <div class="special-offers-subcaption">
                                        <?php echo $row_restaurant_events_ru1['name_event'] ?>
                                    </div>
                                    <div class="special-offers-text">
                                        <?php echo $row_restaurant_events_ru1['desc_event'] ?>
                                    </div>
                                </div>
                                <div class="your_event_item2">
                                    <div class="special-offers-img" style="background-image: url('../img_admin/<?php echo $row_restaurant_events_ru2['img_event'] ?>');">

                                    </div>
                                    <div class="special-offers-subcaption">
                                        <?php echo $row_restaurant_events_ru2['name_event'] ?>
                                    </div>
                                    <div class="special-offers-text">
                                        <?php echo $row_restaurant_events_ru2['desc_event'] ?>
                                    </div>
                                </div>
                                <div class="your_event_item3">
                                    <div class="special-offers-img" style="background-image: url('../img_admin/<?php echo $row_restaurant_events_ru3['img_event'] ?>');">

                                    </div>
                                    <div class="special-offers-subcaption">
                                        <?php echo $row_restaurant_events_ru3['name_event'] ?>
                                    </div>
                                    <div class="special-offers-text">
                                        <?php echo $row_restaurant_events_ru3['desc_event'] ?>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>

                    <!-- end your events with us  -->



                    <!-- sp days section -->
                    <div class="tourism_section pt-5">
                        <?php
                        if ($lang_menu == "am") {
                            $k = 1;
                            if (mysqli_num_rows($result_sp_days_am) > 0) {
                        ?>
                                <h3 class="special-offers-caption">Հատուկ միջոցառումների օրեր</h3>
                                <div class="tur-flex d-flex">
                                    <?php
                                    while ($sql_sp_days_am = mysqli_fetch_assoc($result_sp_days_am)) {
                                    ?>
                                        <div class="tourism-item1" id="tourismId-<?php echo $k; ?>">
                                            <div class="special-offers-img tourism-img1" style="background-image: url('../img_admin/<?php echo $sql_sp_days_am['image_days'] ?>');">
                                                <div class='tur_abs'>
                                                    <div class="tourism_subcaption">
                                                        <?php echo $sql_sp_days_am['title_days'] ?>
                                                    </div>
                                                    <div class="tur_main_text">
                                                        <div class="tur_main_text_top"></div>
                                                        <?php echo $sql_sp_days_am['text_days'] ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    <?php
                                        $k++;
                                    }
                                }
                            }
                            if ($lang_menu == "en") {
                                $k = 1;
                                if (mysqli_num_rows($result_sp_days_en) > 0) {
                                    ?>
                                    <h3 class="special-offers-caption">Days of special events</h3>
                                    <div class="tur-flex d-flex">
                                        <?php
                                        while ($sql_sp_days_en = mysqli_fetch_assoc($result_sp_days_en)) {
                                        ?>
                                            <div class="tourism-item1" id="tourismId-<?php echo $k; ?>">
                                                <div class="special-offers-img tourism-img1" style="background-image: url('../img_admin/<?php echo $sql_sp_days_en['image_days'] ?>');">
                                                    <div class='tur_abs'>
                                                        <div class="tourism_subcaption">
                                                            <?php echo $sql_sp_days_en['title_days'] ?>
                                                        </div>
                                                        <div class="tur_main_text">
                                                            <div class="tur_main_text_top"></div>
                                                            <?php echo $sql_sp_days_en['text_days'] ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        <?php
                                            $k++;
                                        }
                                    }
                                }
                                if ($lang_menu == "ru") {
                                    $k = 1;
                                    if (mysqli_num_rows($result_sp_days_ru) > 0) {
                                        ?>
                                        <h3 class="special-offers-caption">Дни особых событий</h3>
                                        <div class="tur-flex d-flex">
                                            <?php
                                            while ($sql_sp_days_ru = mysqli_fetch_assoc($result_sp_days_ru)) {
                                            ?>
                                                <div class="tourism-item1" id="tourismId-<?php echo $k; ?>">
                                                    <div class="special-offers-img tourism-img1" style="background-image: url('../img_admin/<?php echo $sql_sp_days_ru['image_days'] ?>');">
                                                        <div class='tur_abs'>
                                                            <div class="tourism_subcaption">
                                                                <?php echo $sql_sp_days_ru['title_days'] ?>
                                                            </div>
                                                            <div class="tur_main_text">
                                                                <div class="tur_main_text_top"></div>
                                                                <?php echo $sql_sp_days_ru['text_days'] ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                    <?php
                                                $k++;
                                            }
                                        }
                                    }
                                    ?>
                                        </div>
                                        <div class="d-flex tourismNavigator" id='display_none_tur'>
                                            <div class="offerNavItem1">
                                                <span class="left_tourism">
                                                    <img src="../Icons/arrow.png" alt="" class='left_right'>
                                                </span>
                                                <span class="right_tourism">
                                                    <img src="../Icons/arrow right.png" alt="" class='left_right'>
                                                </span>
                                            </div>
                                            <div class="tourismBorder d-flex">
                                                <div class="tourismBorder_item tourismBorder_bottom tourismBorder_item_0"></div>
                                            </div>
                                        </div>
                                        <a href="tel:+37493848666" class='order_tableA'>
                                            <div class="order_table">
                                                <?php
                                                if ($lang_menu == "am") {
                                                    echo "Սեղան ամրագրելու համար զանգահարել";
                                                }
                                                if ($lang_menu == "en") {
                                                    echo "Call to reserve a table";
                                                }
                                                if ($lang_menu == "ru") {
                                                    echo "Позвоните, чтобы зарезервировать столик";
                                                }
                                                ?>

                                                <span class="tel1">
                                                    <i class="fas fa-phone-alt"></i> +374 93 848 666
                                                </span>

                                            </div>
                                        </a>


                                    </div>
                                    <!-- end tourism section -->



                                    <div class="op_container">
                                        <div class="op_img_abs">
                                            <img src="../images/opinions_abs.png" alt="">
                                        </div>
                                        <h3 class="special-offers-caption">
                                            <?php
                                            if ($lang_menu == "am") {
                                                echo "Կարծիքներ «Black Castle & Red Valley»-ի մասին";
                                            }
                                            if ($lang_menu == "en") {
                                                echo "Opinions about Black Castle & Red Valley";
                                            }
                                            if ($lang_menu == "ru") {
                                                echo "Mнения o 'Black Castle & Red Valley'";
                                            }
                                            ?>
                                        </h3>

                                        <!-- opinion sec -->
                                        <?php
                                        if (mysqli_num_rows($result_opinions_am) > 0) {
                                        ?>
                                            <div class="opinions_display d-flex">

                                                <?php
                                                if ($lang_menu == "am") {
                                                    $k = 1;
                                                    if (mysqli_num_rows($result_opinions_am) < 4) {
                                                        while ($sql_opinions_am = mysqli_fetch_assoc($result_opinions_am)) {
                                                ?>

                                                            <div class="opinions_item">
                                                                <div class="card_opinions">
                                                                    <div class="opinionImgCircle" style="background-image: url('../img_admin/<?php echo $sql_opinions_am['image_op'] ?>');">
                                                                    </div>
                                                                    <div class="opinions_text_item">
                                                                        <div class="opinions_name_div">
                                                                            <?php echo $sql_opinions_am['name_op'] ?>
                                                                        </div>
                                                                        <div class="quoteDiv">
                                                                            <img src="../Icons/left-quote.png" alt="" class="quoteImg">
                                                                        </div>
                                                                        <div class="opinions_name_text">
                                                                            <?php echo $sql_opinions_am['opinion'] ?>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        <?php
                                                            $k++;
                                                        }
                                                    } else {
                                                        ?>
                                                        <div class="carousel-opinions">
                                                            <?php
                                                            include "../carousel/carousel_opinions_am.php";
                                                            ?>
                                                        </div>
                                                <?php

                                                    }
                                                }
                                                ?>

                                                <?php
                                                if ($lang_menu == "en") {
                                                    $k = 1;
                                                    if (mysqli_num_rows($result_opinions_en) > 0 && mysqli_num_rows($result_opinions_en) < 4) {
                                                        while ($sql_opinions_en = mysqli_fetch_assoc($result_opinions_en)) {
                                                ?>

                                                            <div class="opinions_item">
                                                                <div class="card_opinions">
                                                                    <div class="opinionImgCircle" style="background-image: url('../img_admin/<?php echo $sql_opinions_en['image_op'] ?>');">
                                                                    </div>
                                                                    <div class="opinions_text_item">
                                                                        <div class="opinions_name_div">
                                                                            <?php echo $sql_opinions_en['name_op'] ?>
                                                                        </div>
                                                                        <div class="quoteDiv">
                                                                            <img src="../Icons/left-quote.png" alt="" class="quoteImg">
                                                                        </div>
                                                                        <div class="opinions_name_text">
                                                                            <?php echo $sql_opinions_en['opinion'] ?>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>


                                                        <?php
                                                            $k++;
                                                        }
                                                    } else {
                                                        ?>
                                                        <div class="carousel-opinions">
                                                            <?php
                                                            include "../carousel/carousel_opinions_en.php";
                                                            ?>
                                                        </div>
                                                <?php
                                                    }
                                                }
                                                ?>
                                                <?php
                                                if ($lang_menu == "ru") {
                                                    $k = 1;
                                                    if (mysqli_num_rows($result_opinions_ru) > 0 && mysqli_num_rows($result_opinions_ru) < 4) {
                                                        while ($sql_opinions_ru = mysqli_fetch_assoc($result_opinions_ru)) {
                                                ?>

                                                            <div class="opinions_item">
                                                                <div class="card_opinions">
                                                                    <div class="opinionImgCircle" style="background-image: url('../img_admin/<?php echo $sql_opinions_ru['image_op'] ?>');">
                                                                    </div>
                                                                    <div class="opinions_text_item">
                                                                        <div class="opinions_name_div">
                                                                            <?php echo $sql_opinions_ru['name_op'] ?>
                                                                        </div>
                                                                        <div class="quoteDiv">
                                                                            <img src="../Icons/left-quote.png" alt="" class="quoteImg">
                                                                        </div>
                                                                        <div class="opinions_name_text">
                                                                            <?php echo $sql_opinions_ru['opinion'] ?>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        <?php
                                                            $k++;
                                                        }
                                                    } else {
                                                        ?>
                                                        <div class="carousel-opinions">
                                                            <?php
                                                            include "../carousel/carousel_opinions_ru.php";
                                                            ?>
                                                        </div>
                                                <?php
                                                    }
                                                }
                                                ?>

                                            </div>
                                    </div>
                                <?php
                                        }
                                ?>


                                <!-- end opinions section -->



                                <a href='gallery_photo_rest.php'>
                                    <div class="gallery d-flex">
                                        <div class="gallery_item gallery_item1"></div>
                                        <div class="gallery_item gallery_item2"></div>
                                        <div class="gallery_item gallery_item3"></div>
                                        <div class="gallery_item gallery_item4"></div>
                                    </div>
                                </a>


                                <?php
                                include "footer.php";
                                ?>

                                <script src='../js/home.js'></script>
                                <script src="../carousel/vendor/owl.carousel/owl.carousel.min.js"></script>
                                <script src="../carousel/js/main.js"></script>
</body>

</html>