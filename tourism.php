<?php

include "../db_configuration/configuration.php";
include "../tourism_process_sql.php";
include "../header.php";
?>
<link rel="stylesheet" href="../css/tourism.css">


<title>Sevaberd Tourism</title>
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



    <!--tourism about sectiuon -->
    <div class="about_sec_guesthouse d-flex">
        <div class="about_guest_item1">
            <h3>
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
            </h3>
            <p>
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
            </p>
        </div>
        <div class="about_guest_item2 d-flex">
            <div class="about_guest_item_img1"></div>
            <div class="about_guest_item_img2"></div>
        </div>
    </div>
    <!-- end tourism about sectiuon -->


    <!-- by numbers section -->
    <div class="by_numbers">
        <div class="by_numbers_title special-offers-caption">
            <?php
            if ($lang_menu == "am") {
                echo "Ըստ թվերի";
            }
            if ($lang_menu == "en") {
                echo "By The Numbers";
            }
            if ($lang_menu == "ru") {
                echo "В цифрах";
            }
            ?>
        </div>
        <p class="by_numbers_title_text">
            <?php
            if ($lang_menu == "am") {
                echo "Մենք առաջարկում ենք ձեզ այլընտրանք, որը կարող է խնայել ինչպես ժամանակ, այնպես էլ գումար";
            }
            if ($lang_menu == "en") {
                echo "We offer you an alternative that can both save you time and money";
            }
            if ($lang_menu == "ru") {
                echo "Мы предлагаем вам альтернативу, которая может сэкономить ваше время и деньги";
            }
            ?>
        </p>
        <div class="by_numbers_flex d-flex">
            <?php
            if ($lang_menu == 'am') {
                while ($sql_by_numbers_am = mysqli_fetch_assoc($result_by_numbers_am)) {
            ?>
                    <div class="by_numbers_item">
                        <div class="by_numbers_item_number"><?php echo $sql_by_numbers_am['value'] ?></div>
                        <div class="by_numbers_item_text"><?php echo $sql_by_numbers_am['name'] ?></div>
                    </div>
                <?php
                }
            }
            if ($lang_menu == 'en') {
                while ($sql_by_numbers_en = mysqli_fetch_assoc($result_by_numbers_en)) {
                ?>
                    <div class="by_numbers_item">
                        <div class="by_numbers_item_number"><?php echo $sql_by_numbers_en['value'] ?></div>
                        <div class="by_numbers_item_text"><?php echo $sql_by_numbers_en['name'] ?></div>
                    </div>
                <?php
                }
            }
            if ($lang_menu == 'ru') {
                while ($sql_by_numbers_ru = mysqli_fetch_assoc($result_by_numbers_ru)) {
                ?>
                    <div class="by_numbers_item">
                        <div class="by_numbers_item_number"><?php echo $sql_by_numbers_ru['value'] ?></div>
                        <div class="by_numbers_item_text"><?php echo $sql_by_numbers_ru['name'] ?></div>
                    </div>
            <?php
                }
            }
            ?>
        </div>

    </div>
    <!--end by numbers section -->

    <!-- special offers section -->

    <div class="special-offers-sec">

        <?php
        if ($lang_menu == "am") {
            $k = 1;
            if (mysqli_num_rows($result_tourism_am) > 0) {
        ?>
                <h3 class="special-offers-caption">Արկածային Տուրիզմի Գործունեություն</h3>
                <div class="special-offers-flex d-flex">
                    <?php
                    while ($sql_tourism_am = mysqli_fetch_assoc($result_tourism_am)) {
                    ?>

                        <!-- ciklov petqe berel -->
                        <div class="special-offers-item1" id="spOffer-<?php echo $k; ?>">
                            <div class="special-offers-img special-offers-img1" style="background-image: url('../img_admin/<?php echo $sql_tourism_am['image_tourism'] ?>');">
                                <div class='tur_abs'>
                                    <div class="tourism_subcaption">
                                        <?php echo $sql_tourism_am['title_tourism'] ?>
                                    </div>
                                    <div class="tur_main_text">
                                        <div class="tur_main_text_top"></div>
                                        <?php echo $sql_tourism_am['text_tourism'] ?>
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
                if (mysqli_num_rows($result_tourism_en) > 0) {
                    ?>
                    <h3 class="special-offers-caption">Adventure Tourism Activities</h3>
                    <div class="special-offers-flex d-flex">
                        <?php
                        while ($sql_tourism_en = mysqli_fetch_assoc($result_tourism_en)) {
                        ?>

                            <!-- ciklov petqe berel -->
                            <div class="special-offers-item1" id="spOffer-<?php echo $k; ?>">
                                <div class="special-offers-img special-offers-img1" style="background-image: url('../img_admin/<?php echo $sql_tourism_en['image_tourism'] ?>');">
                                    <div class='tur_abs'>
                                        <div class="tourism_subcaption">
                                            <?php echo $sql_tourism_en['title_tourism'] ?>
                                        </div>
                                        <div class="tur_main_text">
                                            <div class="tur_main_text_top"></div>
                                            <?php echo $sql_tourism_en['text_tourism'] ?>
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
                    if (mysqli_num_rows($result_tourism_ru) > 0) {
                        ?>

                        <h3 class="special-offers-caption">Приключенческий туризм</h3>
                        <div class="special-offers-flex d-flex">
                            <?php
                            while ($sql_tourism_ru = mysqli_fetch_assoc($result_tourism_ru)) {
                            ?>

                                <!-- ciklov petqe berel -->
                                <div class="special-offers-item1" id="spOffer-<?php echo $k; ?>">
                                    <div class="special-offers-img special-offers-img1" style="background-image: url('../img_admin/<?php echo $sql_tourism_ru['image_tourism'] ?>');">
                                        <div class='tur_abs'>
                                            <div class="tourism_subcaption">
                                                <?php echo $sql_tourism_ru['title_tourism'] ?>
                                            </div>
                                            <div class="tur_main_text">
                                                <div class="tur_main_text_top"></div>
                                                <?php echo $sql_tourism_ru['text_tourism'] ?>
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

                    <!-- gallery -->

                    <h3 class="special-offers-caption title_gallery">
                        <?php
                        if ($lang_menu == "am") {
                            echo "Պատկերասրահ";
                        }
                        if ($lang_menu == "en") {
                            echo "Gallery";
                        }
                        if ($lang_menu == "ru") {
                            echo "Галерея";
                        }
                        ?>
                    </h3>
                    <a href='gallery_photo_hiking.php'>
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
                    <!-- <script src='../js/tourism.js'></script> -->
                    <script src='../js/home.js'></script>

</body>
<script>
    $('.special-offers-item1').on('mouseenter', function(){
        $(this).children().find('.tur_main_text').toggle(function () {
            $(this).animate({
                // style change
            }, 500);
        });

    });
    $('.special-offers-item1').on('mouseleave', function(){
        $(this).children().find('.tur_main_text').toggle(function () {
            $(this).animate({
                // style change
            }, 500);
        });

    });
</script>

</html>