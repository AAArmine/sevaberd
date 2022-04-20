<?php
include "../db_configuration/configuration.php";
include "../home_process_sql.php";

include "../header.php";
include "../txt_home_inputs.php";
include "../txt_reserve.php";

// include "../txthome.php";
?>
<link rel="stylesheet" href="../css/home.css">
<link rel="stylesheet" href="../carousel/css/owl.carousel.min.css">
<link rel="stylesheet" href="../carousel/css/style.css">
<script src='../js/reserve.js'></script>

<title>Sevaberd Homepage</title>
</head>

<body>
    <?php
    include "navbar.php";
    ?>
    <div class="booking-flex d-flex" style="display:none;">
        <div class="booking-flex-item1">
            <h1 class='title-bookPart'>
                Black Castle & Red Valley
            </h1>
            <div class="booking-padding">
                <div class="flex-book-inputs d-flex">
                    <div class="arrival-date">
                        <span class="dateText">
                            <?php
                            if ($lang_menu == "am") {
                                echo "Ժամանման ամսաթիվ";
                            }
                            if ($lang_menu == "en") {
                                echo "Date of arrival";
                            }
                            if ($lang_menu == "ru") {
                                echo "Дата прибытия";
                            }
                            ?>
                        </span><br>
                        <input type="date" class="bookdates" id='arrival_inp'>
                    </div>
                    <div class="departure-date">
                        <span class="dateText">
                            <?php
                            if ($lang_menu == "am") {
                                echo "Մեկնելու ամսաթիվ";
                            }
                            if ($lang_menu == "en") {
                                echo "Date of departure";
                            }
                            if ($lang_menu == "ru") {
                                echo "Дата отбытия";
                            }
                            ?>
                        </span><br>
                        <input type="date" class="bookdates" id='departure_inp'>
                    </div>
                </div>
            </div>
            <div class="booking-padding booking-padding-mt">
                <div class="flex-book-inputs d-flex">
                    <div class="arrival-date">

                        <span class="dateText">
                            <?php
                            if ($lang_menu == "am") {
                                echo "Այցելու";
                            }
                            if ($lang_menu == "en") {
                                echo "Visitors";
                            }
                            if ($lang_menu == "ru") {
                                echo "Посетители";
                            }
                            ?>
                        </span><br>
                        <input type="number" class="bookdates bookdates2" id="people_quantity" min="0" max="100" placeholder='<?php
                                                                                                                                if ($lang_menu == "am") {
                                                                                                                                    echo "Այցելուների քանակ";
                                                                                                                                }
                                                                                                                                if ($lang_menu == "en") {
                                                                                                                                    echo "Number of visitors";
                                                                                                                                }
                                                                                                                                if ($lang_menu == "ru") {
                                                                                                                                    echo "Количество посетителей";
                                                                                                                                }
                                                                                                                                ?>' id="people_quantity">
                    </div>
                    <div class="departure-date">
                        <span class="dateText">
                            <?php
                            if ($lang_menu == "am") {
                                echo "Սենյակ";
                            }
                            if ($lang_menu == "en") {
                                echo "Room";
                            }
                            if ($lang_menu == "ru") {
                                echo "Номер";
                            }
                            ?>
                        </span><br>
                        <input type="number" class="bookdates bookdates2" id="room_quantity" name="rooms_quantity" placeholder='<?php
                                                                                                                                if ($lang_menu == "am") {
                                                                                                                                    echo "Սենյակների քանակ";
                                                                                                                                }
                                                                                                                                if ($lang_menu == "en") {
                                                                                                                                    echo "Number of rooms";
                                                                                                                                }
                                                                                                                                if ($lang_menu == "ru") {
                                                                                                                                    echo "Количество комнат";
                                                                                                                                }
                                                                                                                                ?>' min="1" max="8">
                    </div>
                </div>
            </div>
            <div class="error_booking"></div>
            <input type="button" value='<?php
                                        if ($lang_menu == "am") {
                                            echo "Ամրագրել";
                                        }
                                        if ($lang_menu == "en") {
                                            echo "Reservation";
                                        }
                                        if ($lang_menu == "ru") {
                                            echo "Бронирование";
                                        }
                                        ?>' class='bookButton' data-toggle="modal" data-target="#reserveModal" data-dismiss="modal">

        </div>
        <div class="booking-flex-item2">

        </div>
    </div>
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
    <div class="under-subSection-border">
    </div>
    <div class="about-section d-flex">
        <div class="about-section-item1">
            <div class="about-title">
                <?php
                if ($lang_menu == "am") {
                    echo "Մեր մասին";
                }
                if ($lang_menu == "en") {
                    echo "About Us";
                }
                if ($lang_menu == "ru") {
                    echo "О нас";
                }
                ?>

            </div>
            <div class="about-text">
                <?php
                if ($lang_menu == "am") {
                    echo "Բարի գալուստ «Black Castle» հյուրատուն:<br>
                     «Black Castle» հյուրատունը տեղակայված է Գեղամա լեռների արևմտյան փեշերին,
                    Կոտայքի մարզի Սևաբերդ գյուղում` Երևանից 35 կմ հեռավորության, իսկ ծովի
                    մակարդակից 2050մ բարձրության վրա: ";
                }
                if ($lang_menu == "en") {
                    echo "Welcome to Black Castle Guesthouse! <br>
                     The Black Castle Guesthouse is located at the western foot of the Geghama Mountains.
                    In the village of Sevaberd, Kotayk region, 35 km away from Yerevan, and
                    2050m above the sea level.";
                }
                if ($lang_menu == "ru") {
                    echo "Добро пожаловать в гостевой дом «Black Castle»! <br>
                    «Black Castle»  расположен у западного подножия Гегамских горб
                    в селе Севаберд, Котайкской области, в 35 км от Еревана, 
                    2050м над ур. моря.";
                }
                ?>

            </div>
            <a href='about.php'><input type="button" value=" <?php
                                                                if ($lang_menu == "am") {
                                                                    echo "Կարդալ ավելին";
                                                                }
                                                                if ($lang_menu == "en") {
                                                                    echo "See more";
                                                                }
                                                                if ($lang_menu == "ru") {
                                                                    echo "Узнать больше";
                                                                } ?>" class="bookButton read-about-but" id="about-read"></a>

        </div>
        <div class="about-section-item2">

        </div>
    </div>

    <!-- main directions section -->

    <div class="main-directions-sec">
        <div class="directions_img_fon">
            <!-- <img src="../images/directions.png" alt="" class='abs-dir-img'> -->


        </div>
        <div class="plane-abs" id='plane'>
            <img src='../Icons/send.png' class='abs-plane-img'>
        </div>
        <div class="directions-title">
            <?php
            if ($lang_menu == "am") {
                echo "Կենտրոնի հիմնական ուղղությունները";
            }
            if ($lang_menu == "en") {
                echo "The main directions of the center";
            }
            if ($lang_menu == "ru") {
                echo "Основные направления центра";
            }
            ?>


        </div>
        <div class="main-directions-flex d-flex">
            <div class="main-directions-item1"></div>
            <div class="main-directions-item2">
                <div class="about-title about-title-colored">
                    <?php
                    if ($lang_menu == "am") {
                        echo $row_am1['dir_title'];
                    }
                    if ($lang_menu == "en") {
                        echo $row_en1['dir_title'];;
                    }
                    if ($lang_menu == "ru") {
                        echo $row_ru1['dir_title'];
                    }
                    ?>

                </div>
                <div class="about-text">
                    <?php
                    if ($lang_menu == "am") {
                        echo $row_am1['dir_text'];
                    }
                    if ($lang_menu == "en") {
                        echo $row_en1['dir_text'];;
                    }
                    if ($lang_menu == "ru") {
                        echo $row_ru1['dir_text'];
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="main-directions-flex d-flex">
            <div class="main-directions-item2">
                <div class="about-title about-title-colored">
                    <?php
                    if ($lang_menu == "am") {
                        echo $row_am2['dir_title'];
                    }
                    if ($lang_menu == "en") {
                        echo $row_en2['dir_title'];;
                    }
                    if ($lang_menu == "ru") {
                        echo $row_ru2['dir_title'];
                    }
                    ?>
                </div>
                <div class="about-text">
                    <?php
                    if ($lang_menu == "am") {
                        echo $row_am2['dir_text'];
                    }
                    if ($lang_menu == "en") {
                        echo $row_en2['dir_text'];;
                    }
                    if ($lang_menu == "ru") {
                        echo $row_ru2['dir_text'];
                    }
                    ?>
                </div>
            </div>
            <div class="main-directions-item1-2"></div>
        </div>
        <div class="main-directions-flex d-flex">
            <div class="main-directions-item1-3"></div>
            <div class="main-directions-item2">
                <div class="about-title about-title-colored">
                    <?php
                    if ($lang_menu == "am") {
                        echo $row_am3['dir_title'];
                    }
                    if ($lang_menu == "en") {
                        echo $row_en3['dir_title'];;
                    }
                    if ($lang_menu == "ru") {
                        echo $row_ru3['dir_title'];
                    }
                    ?>
                </div>
                <div class="about-text">
                    <?php
                    if ($lang_menu == "am") {
                        echo $row_am3['dir_text'];
                    }
                    if ($lang_menu == "en") {
                        echo $row_en3['dir_text'];;
                    }
                    if ($lang_menu == "ru") {
                        echo $row_ru3['dir_text'];
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="abs-line">
            <img src='../Icons/line.png' class='abs-line-img'>
        </div>
    </div>

    <!-- special offers section -->

    <div class="special-offers-sec">

        <?php
        if ($lang_menu == "am") {
            $k = 1;
            if (mysqli_num_rows($result_sp_offers_am) > 0) {
        ?>
                <h3 class="special-offers-caption">
                    Հատուկ առաջարկները
                </h3>
                <div class="special-offers-flex d-flex">
                    <?php
                    while ($sql_sp_offers_am = mysqli_fetch_assoc($result_sp_offers_am)) {
                    ?>

                        <!-- ciklov petqe berel -->
                        <div class="special-offers-item1" id="spOffer-<?php echo $k; ?>">
                            <a href="offers_details.php?offer_id= <?php echo $sql_sp_offers_am['id'] ?>">
                                <div class="special-offers-img special-offers-img1" style="background-image: url('../img_admin/<?php echo $sql_sp_offers_am['image_offers'] ?>');">

                                </div>

                                <div class="special-offers-subcaption">
                                    <?php echo $sql_sp_offers_am['title_offers'] ?>
                                </div>
                                <div class="special-offers-text">
                                    <?php echo $sql_sp_offers_am['text_offers'] ?>
                                </div>
                            </a>

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
                        Special Offers
                    </h3>
                    <div class="special-offers-flex d-flex">
                        <?php
                        while ($sql_sp_offers_en = mysqli_fetch_assoc($result_sp_offers_en)) {
                        ?>

                            <!-- ciklov petqe berel -->
                            <div class="special-offers-item1" id="spOffer-<?php echo $k; ?>">
                                <a href="offers_details.php?offer_id= <?php echo $sql_sp_offers_en['id'] ?>">
                                    <div class="special-offers-img special-offers-img1" style="background-image: url('../img_admin/<?php echo $sql_sp_offers_en['image_offers'] ?>');">

                                    </div>
                                    <div class="special-offers-subcaption">
                                        <?php echo $sql_sp_offers_en['title_offers'] ?>
                                    </div>
                                    <div class="special-offers-text">
                                        <?php echo $sql_sp_offers_en['text_offers'] ?>
                                    </div>
                                </a>
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

                        <h3 class="special-offers-caption">Специальные предложения</h3>
                        <div class="special-offers-flex d-flex">
                            <?php
                            while ($sql_sp_offers_ru = mysqli_fetch_assoc($result_sp_offers_ru)) {
                            ?>

                                <!-- ciklov petqe berel -->
                                <div class="special-offers-item1" id="spOffer-<?php echo $k; ?>">
                                    <a href="offers_details.php?offer_id= <?php echo $sql_sp_offers_ru['id'] ?>">
                                        <div class="special-offers-img special-offers-img1" style="background-image: url('../img_admin/<?php echo $sql_sp_offers_ru['image_offers'] ?>');">

                                        </div>
                                        <div class="special-offers-subcaption">
                                            <?php echo $sql_sp_offers_ru['title_offers'] ?>
                                        </div>
                                        <div class="special-offers-text">
                                            <?php echo $sql_sp_offers_ru['text_offers'] ?>
                                        </div>
                                    </a>
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

                    <!-- tourism section -->
                    <div class="tourism_section pt-5">

                        <?php
                        if ($lang_menu == "am") {
                            $k = 1;
                            if (mysqli_num_rows($result_tourism_am) > 0) {
                        ?>
                                <h3 class="special-offers-caption">Արկածային Տուրիզմի Գործունեություն</h3>
                                <div class="tur-flex d-flex">
                                    <?php
                                    while ($sql_tourism_am = mysqli_fetch_assoc($result_tourism_am)) {
                                    ?>

                                        <!-- ciklov petqe berel -->

                                        <div class="tourism-item1" id="tourismId-<?php echo $k; ?>">
                                            <div class="special-offers-img tourism-img1" style="background-image: url('../img_admin/<?php echo $sql_tourism_am['image_tourism'] ?>');">
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
                                    <div class="tur-flex d-flex">
                                        <?php
                                        while ($sql_tourism_en = mysqli_fetch_assoc($result_tourism_en)) {
                                        ?>

                                            <!-- ciklov petqe berel -->
                                            <div class="tourism-item1" id="tourismId-<?php echo $k; ?>">
                                                <div class="special-offers-img tourism-img1" style="background-image: url('../img_admin/<?php echo $sql_tourism_en['image_tourism'] ?>');">
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

                                        <h3 class="special-offers-caption">
                                            Приключенческий туризм

                                        </h3>
                                        <div class="tur-flex d-flex">
                                            <?php
                                            while ($sql_tourism_ru = mysqli_fetch_assoc($result_tourism_ru)) {
                                            ?>

                                                <!-- ciklov petqe berel -->

                                                <div class="tourism-item1" id="tourismId-<?php echo $k; ?>">
                                                    <div class="special-offers-img tourism-img1" style="background-image: url('../img_admin/<?php echo $sql_tourism_ru['image_tourism'] ?>');">
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
                                    </div>
                                    <!-- end tourism section -->


                                    <!-- opinions section -->
                                    <?php
                                    if (mysqli_num_rows($result_opinions_am) > 0) {
                                    ?>
                                        <div class="opinions_sec">
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


                                    <!-- connect us -->
                                    <?php
                                    if ($lang_menu == "am") {
                                        echo CONTACT_INPUTS_AM;
                                    }
                                    if ($lang_menu == "en") {
                                        echo CONTACT_INPUTS_EN;
                                    }
                                    if ($lang_menu == "ru") {
                                        echo CONTACT_INPUTS_RU;
                                    }
                                    ?>


                                    <div class="submit_success">
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
                                <div class='send_button'>
                                    <input type='button' value='<?php
                                                                if ($lang_menu == "am") {
                                                                    echo "Ուղարկել";
                                                                }
                                                                if ($lang_menu == "en") {
                                                                    echo "Send";
                                                                }
                                                                if ($lang_menu == "ru") {
                                                                    echo "Отправить";
                                                                }
                                                                ?>' class='bookButton send_cont_but' id='contact_submit'>
                                </div>
                    </div>
                    <div class="mapouter">
                        <div class="gmap_canvas"><iframe width="479" height="520" id="gmap_canvas" src="https://maps.google.com/maps?q=Sevaberd,%20%20Armenia&t=&z=11&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org">123movies</a><br>
                            <a href="https://www.embedgooglemap.net"></a>
                        </div>
                    </div>

                </div>
                <input type='hidden' id='pageName' value='<?php echo $file_name; ?>'>
                <input type='hidden' id='language_current' value='<?php echo $lang_menu ?>'>
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
                <a href='gallery_photo_rest.php'>
                    <div class="gallery d-flex">
                        <div class="gallery_item gallery_item1"></div>
                        <div class="gallery_item gallery_item2"></div>
                        <div class="gallery_item gallery_item3"></div>
                        <div class="gallery_item gallery_item4"></div>
                    </div>
                </a>

                <!-- Modal -->
                <div id="reserveModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <?php
                            if ($lang_menu == 'am') {
                                echo RESERVE_INPUTS_AM;
                            }
                            if ($lang_menu == 'en') {
                                echo RESERVE_INPUTS_EN;
                            }
                            if ($lang_menu == 'ru') {
                                echo RESERVE_INPUTS_RU;
                            }
                            ?>

                        </div>

                    </div>
                </div>
                <!-- end modal1 -->


                <!-- Modal 2-->
                <div class="modal fade" id="reserveModal2" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content center">
                            <div>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="center">
                                <img src="../images/loading-buffering.gif" alt="" id='imageLoading'>
                            </div>
                            <div class="modal-body-result">

                            </div>
                            <div class="center">
                                <button type="button" class="btn go_back" data-dismiss="modal">
                                    Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!--end connect us -->
                <?php
                include "footer.php";
                ?>

                <script src='../js/home.js'></script>
                <script src="../carousel/vendor/owl.carousel/owl.carousel.min.js"></script>
                <script src="../carousel/js/main.js"></script>






</body>

</html>