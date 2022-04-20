<?php

include "../db_configuration/configuration.php";
include "../about_process_sql.php";
include "../tourism_process_sql.php";
include "../home_process_sql.php";
include "../header.php";
include "../txt_home_inputs.php";

?>
<link rel="stylesheet" href="../css/about.css">
<link rel="stylesheet" href="../carousel/css/owl.carousel.min.css">
<link rel="stylesheet" href="../carousel/css/style.css">



<title>Sevaberd About</title>
</head>

<body>
    <?php
    include "navbar.php";
    ?>



    <div class='container'>
        <div class="about_title">
            <h3 class="about-caption">
                <?php
                if ($lang_menu == "am") {
                    echo "Մեր մասին";
                }
                if ($lang_menu == "en") {
                    echo "About us";
                }
                if ($lang_menu == "ru") {
                    echo "О нас";
                }
                ?>
            </h3>
        </div>

        <div class="offers_sec mb-5 pb-5">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#sevaberd_village" role="tab" aria-controls="home" aria-selected="true">
                        <?php
                        if ($lang_menu == "am") {
                            echo "Սևաբերդ գյուղ";
                        }
                        if ($lang_menu == "en") {
                            echo "Sevaberd village";
                        }
                        if ($lang_menu == "ru") {
                            echo "Село Севаберд";
                        }
                        ?>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#zipline" role="tab" aria-controls="profile" aria-selected="false">
                        <?php
                        if ($lang_menu == "am") {
                            echo "Զիփլայն";
                        }
                        if ($lang_menu == "en") {
                            echo "Zipline";
                        }
                        if ($lang_menu == "ru") {
                            echo "Зиплайн";
                        }
                        ?>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#shooting" role="tab" aria-controls="profile" aria-selected="false">
                        <?php
                        if ($lang_menu == "am") {
                            echo "Հրաձգարան";
                        }
                        if ($lang_menu == "en") {
                            echo "Shooting range";
                        }
                        if ($lang_menu == "ru") {
                            echo "Стрельбище";
                        }
                        ?>
                    </a>
                </li>

            </ul>
            <hr>
            <div class="tab-content mt-5">

                <!-- sevaberd village -->
                <div class="tab-pane fade show active" id="sevaberd_village" role="tabpanel" aria-labelledby="home-tab">
                    <div class="pics_top d-flex">
                        <div class="pics_top_item1" style="background-image: url('../img_admin/<?php echo $row_village['image_1'] ?>');">

                        </div>
                        <div class="pics_top_item2">


                            <div class="pics_top_item2_1" style="background-image: url('../img_admin/<?php echo $row_village['image_2'] ?>');"></div>
                            <div class="pics_top_item2_1 pics_top_item2_2" style="background-image: url('../img_admin/<?php echo $row_village['image_3'] ?>');"></div>
                        </div>

                    </div>
                    <div class="main_text_about">
                        <?php
                        if ($lang_menu == 'am') {
                            echo $row_village['text_am'];
                        }
                        if ($lang_menu == 'en') {
                            echo $row_village['text_en'];
                        }
                        if ($lang_menu == 'ru') {
                            echo $row_village['text_ru'];
                        }
                        ?>
                    </div>
                </div>

                <!-- ziplane-->
                <div class="tab-pane fade" id="zipline" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="pics_top d-flex">
                        <div class="pics_top_item1" style="background-image: url('../img_admin/<?php echo $row_zipline['image_1'] ?>');">

                        </div>
                        <div class="pics_top_item2">


                            <div class="pics_top_item2_1" style="background-image: url('../img_admin/<?php echo $row_zipline['image_2'] ?>');"></div>
                            <div class="pics_top_item2_1 pics_top_item2_2" style="background-image: url('../img_admin/<?php echo $row_zipline['image_3'] ?>');"></div>
                        </div>

                    </div>
                    <div class="main_text_about">
                        <?php
                        if ($lang_menu == 'am') {
                            echo $row_zipline['text_am'];
                        }
                        if ($lang_menu == 'en') {
                            echo $row_zipline['text_en'];
                        }
                        if ($lang_menu == 'ru') {
                            echo $row_zipline['text_ru'];
                        }
                        ?>
                    </div>
                </div>
                <!-- shooting-->
                <div class="tab-pane fade" id="shooting" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="pics_top d-flex">
                        <div class="pics_top_item1" style="background-image: url('../img_admin/<?php echo $row_shooting['image_1'] ?>');">

                        </div>
                        <div class="pics_top_item2">


                            <div class="pics_top_item2_1" style="background-image: url('../img_admin/<?php echo $row_shooting['image_2'] ?>');"></div>
                            <div class="pics_top_item2_1 pics_top_item2_2" style="background-image: url('../img_admin/<?php echo $row_shooting['image_3'] ?>');"></div>
                        </div>

                    </div>
                    <div class="main_text_about">
                        <?php
                        if ($lang_menu == 'am') {
                            echo $row_shooting['text_am'];
                        }
                        if ($lang_menu == 'en') {
                            echo $row_shooting['text_en'];
                        }
                        if ($lang_menu == 'ru') {
                            echo $row_shooting['text_ru'];
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>



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



        <!-- staff section -->
        <?php
        if (mysqli_num_rows($result_staff_am) > 0) {
        ?>
            <div class="opinions_sec">
                <h3 class="special-offers-caption">
                    <?php
                    if ($lang_menu == "am") {
                        echo "Մեր անձնակազմը";
                    }
                    if ($lang_menu == "en") {
                        echo "Our staff";
                    }
                    if ($lang_menu == "ru") {
                        echo "Наш персонал";
                    }
                    ?>
                </h3>
                <div class="opinions_display d-flex">

                    <?php
                    if ($lang_menu == "am") {
                        if (mysqli_num_rows($result_staff_am) < 4) {
                            while ($sql_staff_am = mysqli_fetch_assoc($result_staff_am)) {
                    ?>

                                <div class="opinions_item">
                                    <div class="card_opinions">
                                        <div class="opinionImgCircle" style="background-image: url('../img_admin/<?php echo $sql_staff_am['image_st'] ?>');">
                                        </div>
                                        <div class="opinions_text_item">
                                            <div class="opinions_name_div">
                                                <?php echo $sql_staff_am['name_st'] ?>
                                            </div>
                                            <div class="opinions_name_text">
                                                <?php echo $sql_staff_am['position'] ?>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            <?php
                            }
                        } else {
                            ?>
                            <div class="carousel-opinions">
                                <?php
                                include "../carousel/carousel_staff_am.php";
                                ?>
                            </div>
                    <?php

                        }
                    }
                    ?>

                    <?php
                    if ($lang_menu == "en") {
                        if (mysqli_num_rows($result_staff_en) > 0 && mysqli_num_rows($result_staff_en) < 4) {
                            while ($sql_staff_en = mysqli_fetch_assoc($result_staff_en)) {
                    ?>

                                <div class="opinions_item">
                                    <div class="card_opinions">
                                        <div class="opinionImgCircle" style="background-image: url('../img_admin/<?php echo $sql_staff_en['image_st'] ?>');">
                                        </div>
                                        <div class="opinions_text_item">
                                            <div class="opinions_name_div">
                                                <?php echo $sql_staff_en['name_st'] ?>
                                            </div>
                                            <div class="opinions_name_text">
                                                <?php echo $sql_staff_en['position'] ?>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            <?php
                            }
                        } else {
                            ?>
                            <div class="carousel-opinions">
                                <?php
                                include "../carousel/carousel_staff_en.php";
                                ?>
                            </div>
                    <?php
                        }
                    }
                    ?>
                    <?php
                    if ($lang_menu == "ru") {
                        if (mysqli_num_rows($result_staff_ru) > 0 && mysqli_num_rows($result_staff_ru) < 4) {
                            while ($sql_staff_ru = mysqli_fetch_assoc($result_staff_ru)) {
                    ?>

                                <div class="opinions_item">
                                    <div class="card_opinions">
                                        <div class="opinionImgCircle" style="background-image: url('../img_admin/<?php echo $sql_staff_ru['image_st'] ?>');">
                                        </div>
                                        <div class="opinions_text_item">
                                            <div class="opinions_name_div">
                                                <?php echo $sql_staff_ru['name_st'] ?>
                                            </div>
                                            <div class="opinions_name_text">
                                                <?php echo $sql_staff_ru['position'] ?>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            <?php
                            }
                        } else {
                            ?>
                            <div class="carousel-opinions">
                                <?php
                                include "../carousel/carousel_staff_ru.php";
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
        <!-- end staff section -->

        <!-- subscribe section -->

        <div class="subscribe-section">
            <?php
            if ($lang_menu == "am") {
                echo SUBS_INPUTS_AM;
            }
            if ($lang_menu == "en") {
                echo SUBS_INPUTS_EN;
            }
            if ($lang_menu == "ru") {
                echo SUBS_INPUTS_RU;
            }
            ?>

            <div class="subscribe_success">
                <?php
                if ($lang_menu == "am") {
                    echo "Ձեր հաղորդագրությունը ուղարկված է։ Շնորհակալություն։";
                }
                if ($lang_menu == "en") {
                    echo "Your message has been sent․ Thank you.";
                }
                if ($lang_menu == "ru") {
                    echo "Ваше сообщение отправлено. Спасибо.";
                }
                ?>
            </div>

        </div>
    </div>

    <?php
    include "footer.php";
    ?>
    <script src="../carousel/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="../carousel/js/main.js"></script>
    <script src='../js/about.js'></script>




</body>

</html>