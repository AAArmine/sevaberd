<?php

include "../db_configuration/configuration.php";
include "../guesthouse_process_sql.php";
include "../tourism_process_sql.php";
include "../header.php";
include "../txt_reserve.php";
?>
<link rel="stylesheet" href="../css/guesthouse.css">
<link rel="stylesheet" href="../carousel/css/owl.carousel.min.css">
<link rel="stylesheet" href="../carousel/css/style.css">
<script src='../js/reserve.js'></script>

<title>Sevaberd Guesthouse</title>
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

    <!-- reservation section -->
    <div class="reservation">
        <div class='reservation_title'>
            <?php
            if ($lang_menu == "am") {
                echo "Ամրագրում";
            }
            if ($lang_menu == "en") {
                echo "Reservation";
            }
            if ($lang_menu == "ru") {
                echo "Бронирование";
            }
            ?>
        </div>
        <input type='hidden' id='pageName' value='<?php echo $file_name; ?>'>
        <input type='hidden' id='language_current' value='<?php echo $lang_menu ?>'>

        <div class="reservation_flex d-flex">
            <div class="res_flex_item">
                <div class="res_flex_item_title">
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
                    </span>
                </div>
                <input type="date" class="bookdates form-control" id='arrival_inp'>
            </div>
            <div class="res_flex_item">
                <div class="res_flex_item_title">
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
                    </span>
                </div>
                <input type="date" class="bookdates form-control" id='departure_inp'>
            </div>
            <div class="res_flex_item">
                <div class="res_flex_item_title">
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
                    </span>
                </div>
                <input type="number" class="bookdates form-control" placeholder='<?php
                                                                                    if ($lang_menu == "am") {
                                                                                        echo "Այցելուների քանակ";
                                                                                    }
                                                                                    if ($lang_menu == "en") {
                                                                                        echo "Number of visitors";
                                                                                    }
                                                                                    if ($lang_menu == "ru") {
                                                                                        echo "Количество посетителей";
                                                                                    }
                                                                                    ?>' id="people_quantity" min="0" max="100">
            </div>
            <div class="res_flex_item">
                <div class="res_flex_item_title">
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
                    </span>
                </div>
                <input type="number" class="bookdates form-control" placeholder='<?php
                                                                                    if ($lang_menu == "am") {
                                                                                        echo "Սենյակների քանակ";
                                                                                    }
                                                                                    if ($lang_menu == "en") {
                                                                                        echo "Number of rooms";
                                                                                    }
                                                                                    if ($lang_menu == "ru") {
                                                                                        echo "Количество комнат";
                                                                                    }
                                                                                    ?>' id="room_quantity" min="0" max="8">
            </div>
            <div class="res_flex_item">

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

        </div>
    </div>
    <hr>
    </hr>

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

    <!-- end reservation section -->

    <!-- gueasthouse about sectiuon -->
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
        <div class="about_guest_item2"></div>
    </div>
    <!-- end gueasthouse about sectiuon -->

    <!-- our values sec -->
    <div class="values_sec">
        <h3>
            <?php
            if ($lang_menu == "am") {
                echo "Մեր արժեքները";
            }
            if ($lang_menu == "en") {
                echo "Our Values";
            }
            if ($lang_menu == "ru") {
                echo "Наши ценности";
            }
            ?>
        </h3>
        <div class="values_flex d-flex">
            <?php
            if ($lang_menu == "am") {
                $k = 1;
                if (mysqli_num_rows($result_values_am) > 0) {
                    while ($sql_values_am = mysqli_fetch_assoc($result_values_am)) {
            ?>
                        <div class="val_sec_item">
                            <div class="val_title">
                                <?php
                                echo $sql_values_am['title_val']
                                ?>

                            </div>
                            <div class="val_text">
                                <?php
                                echo $sql_values_am['text_val']
                                ?>

                            </div>
                        </div>
            <?php
                    }
                }
            }
            ?>

            <?php
            if ($lang_menu == "en") {
                $k = 1;
                if (mysqli_num_rows($result_values_en) > 0) {
                    while ($sql_values_en = mysqli_fetch_assoc($result_values_en)) {
            ?>
                        <div class="val_sec_item">
                            <div class="val_title">
                                <?php
                                echo $sql_values_en['title_val']
                                ?>

                            </div>
                            <div class="val_text">
                                <?php
                                echo $sql_values_en['text_val']
                                ?>

                            </div>
                        </div>
                    <?php
                    }
                }
            }

            if ($lang_menu == "ru") {
                $k = 1;
                if (mysqli_num_rows($result_values_ru) > 0) {
                    while ($sql_values_ru = mysqli_fetch_assoc($result_values_ru)) {
                    ?>
                        <div class="val_sec_item">
                            <div class="val_title">
                                <?php
                                echo $sql_values_ru['title_val']
                                ?>

                            </div>
                            <div class="val_text">
                                <?php
                                echo $sql_values_ru['text_val']
                                ?>

                            </div>
                        </div>
            <?php
                    }
                }
            }
            ?>
        </div>

        <div class="val_more">
            <button class="val_more_but">
                <?php
                if ($lang_menu == "am") {
                    echo "Տեսնել ավելին";
                }
                if ($lang_menu == "en") {
                    echo "See More";
                }
                if ($lang_menu == "ru") {
                    echo "Узнать больше";
                }
                ?>
            </button>
        </div>


    </div>
    <!-- end our values sec -->




    <!-- special offers section -->

    <div class="special-offers-sec">

        <?php
        if ($lang_menu == "am") {
            $k = 1;
            if (mysqli_num_rows($result_sp_offers_am) > 0) {
        ?>
                <h3 class="special-offers-caption">
                    <?php
                    if ($lang_menu == "am") {
                        echo "Հատուկ առաջարկները";
                    }
                    if ($lang_menu == "en") {
                        echo "Special Offers";
                    }
                    if ($lang_menu == "ru") {
                        echo "Специальные предложения";
                    }
                    ?>

                </h3>
                <div class="special-offers-flex d-flex">
                    <?php
                    while ($sql_sp_offers_am = mysqli_fetch_assoc($result_sp_offers_am)) {
                    ?>

                        <!-- ciklov petqe berel -->
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
                        <?php
                        if ($lang_menu == "am") {
                            echo "Հատուկ առաջարկները";
                        }
                        if ($lang_menu == "en") {
                            echo "Special Offers";
                        }
                        if ($lang_menu == "ru") {
                            echo "Специальные предложения";
                        }
                        ?>
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

                        <h3 class="special-offers-caption">Специальные предложения</h3>
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


                    <!-- room menu -->

                    <?php
                    if (mysqli_num_rows($result_rooms_am) > 0) {
                    ?>

                        <div class="room_menu_container">
                            <h3 class="special-offers-caption">
                                <?php
                                if ($lang_menu == "am") {
                                    echo "Համարների մենյու";
                                }
                                if ($lang_menu == "en") {
                                    echo "Rooms Menu";
                                }
                                if ($lang_menu == "ru") {
                                    echo "Меню номеров";
                                }
                                ?>
                            </h3>
                        </div>
                        <?php
                        if ($lang_menu == "am") {
                        ?>
                            <div class="rooms_menu_flex d-flex" id='show_all_rooms'>
                                <?php
                                if (mysqli_num_rows($result_rooms_am) < 4) {
                                    while ($sql_rooms_am = mysqli_fetch_assoc($result_rooms_am)) {
                                ?>
                                        <div class="rooms_menu_flex_item">
                                            <a href='room-details.php?room_id=<?php echo $sql_rooms_am['id'] ?>'>
                                                <div class="rooms_menu_img" style=" background-image: url('../img_admin/<?php echo $sql_rooms_am['image']; ?>')">
                                                </div>
                                                <div class="rooms_menu_code">
                                                    <?php
                                                    echo $sql_rooms_am['code'];
                                                    ?>
                                                </div>
                                                <div class="rooms_menu_desc">
                                                    <?php
                                                    echo $sql_rooms_am['description'];
                                                    ?>
                                                </div>
                                                <div class="menu_border"></div>
                                                <div class="menu_price">
                                                    AMD <?php
                                                        echo $sql_rooms_am['price'];
                                                        ?> <span class='small'> (մեկ գիշերվա համար)</span>
                                                </div>
                                            </a>
                                        </div>
                                    <?php
                                    }
                                } else {
                                    while ($sql_rooms_am_limit = mysqli_fetch_assoc($result_rooms_am_limit)) {
                                    ?>
                                        <div class="rooms_menu_flex_item">
                                            <a href='room-details.php?room_id=<?php echo $sql_rooms_am_limit['id'] ?>'>
                                                <div class="rooms_menu_img" style=" background-image: url('../img_admin/<?php echo $sql_rooms_am_limit['image']; ?>')">
                                                </div>
                                                <div class="rooms_menu_code">
                                                    <?php
                                                    echo $sql_rooms_am_limit['code'];
                                                    ?>
                                                </div>
                                                <div class="rooms_menu_desc">
                                                    <?php
                                                    echo $sql_rooms_am_limit['description'];
                                                    ?>
                                                </div>
                                                <div class="menu_border"></div>
                                                <div class="menu_price">
                                                    AMD <?php
                                                        echo $sql_rooms_am_limit['price'];
                                                        ?> <span class='small'> (մեկ գիշերվա համար)</span>
                                                </div>
                                            </a>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                    <div class="room_menu_more">
                                        <button class="room_menu_more_but">
                                            Տեսնել ավելին
                                        </button>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>

                        <?php
                        }
                    }
                    // en
                    if ($lang_menu == "en") {
                        ?>
                        <div class="rooms_menu_flex d-flex" id='show_all_rooms'>
                            <?php
                            if (mysqli_num_rows($result_rooms_en) < 4) {
                                while ($sql_rooms_en = mysqli_fetch_assoc($result_rooms_en)) {
                            ?>
                                    <div class="rooms_menu_flex_item">
                                        <a href='room-details.php?room_id=<?php echo $sql_rooms_en['id'] ?>'>
                                            <div class="rooms_menu_img" style=" background-image: url('../img_admin/<?php echo $sql_rooms_en['image']; ?>')">
                                            </div>
                                            <div class="rooms_menu_code">
                                                <?php
                                                echo $sql_rooms_en['code'];
                                                ?>
                                            </div>
                                            <div class="rooms_menu_desc">
                                                <?php
                                                echo $sql_rooms_en['description'];
                                                ?>
                                            </div>
                                            <div class="menu_border"></div>
                                            <div class="menu_price">
                                                USD <?php
                                                    echo $sql_rooms_en['price'];
                                                    ?> <span class='small'> (per night)</span>
                                            </div>
                                        </a>
                                    </div>
                                <?php
                                }
                            } else {
                                while ($sql_rooms_en_limit = mysqli_fetch_assoc($result_rooms_en_limit)) {
                                ?>
                                    <div class="rooms_menu_flex_item">
                                        <a href='room-details.php?room_id=<?php echo $sql_rooms_en_limit['id'] ?>'>
                                            <div class="rooms_menu_img" style=" background-image: url('../img_admin/<?php echo $sql_rooms_en_limit['image']; ?>')">
                                            </div>
                                            <div class="rooms_menu_code">
                                                <?php
                                                echo $sql_rooms_en_limit['code'];
                                                ?>
                                            </div>
                                            <div class="rooms_menu_desc">
                                                <?php
                                                echo $sql_rooms_en_limit['description'];
                                                ?>
                                            </div>
                                            <div class="menu_border"></div>
                                            <div class="menu_price">
                                                USD <?php
                                                    echo $sql_rooms_en_limit['price'];
                                                    ?><span class='small'> (per night)</span>
                                            </div>
                                        </a>
                                    </div>
                                <?php
                                }
                                ?>
                                <div class="room_menu_more">
                                    <button class="room_menu_more_but">
                                        See More
                                    </button>
                                </div>
                            <?php
                            }
                            ?>
                        </div>

                    <?php
                    }

                    // ru
                    if ($lang_menu == "ru") {
                    ?>
                        <div class="rooms_menu_flex d-flex" id='show_all_rooms'>
                            <?php
                            if (mysqli_num_rows($result_rooms_ru) < 4) {
                                while ($sql_rooms_ru = mysqli_fetch_assoc($result_rooms_ru)) {
                            ?>
                                    <div class="rooms_menu_flex_item">
                                        <a href='room-details.php?room_id=<?php echo $sql_rooms_ru['id'] ?>'>
                                            <div class="rooms_menu_img" style=" background-image: url('../img_admin/<?php echo $sql_rooms_ru['image']; ?>')">
                                            </div>
                                            <div class="rooms_menu_code">
                                                <?php
                                                echo $sql_rooms_ru['code'];
                                                ?>
                                            </div>
                                            <div class="rooms_menu_desc">
                                                <?php
                                                echo $sql_rooms_ru['description'];
                                                ?>
                                            </div>
                                            <div class="menu_border"></div>
                                            <div class="menu_price">
                                                RUB <?php
                                                    echo $sql_rooms_ru['price'];
                                                    ?> <span class='small'> (за ночь)</span>
                                            </div>
                                        </a>
                                    </div>
                                <?php
                                }
                            } else {
                                while ($sql_rooms_ru_limit = mysqli_fetch_assoc($result_rooms_ru_limit)) {
                                ?>
                                    <div class="rooms_menu_flex_item">
                                        <a href='room-details.php?room_id=<?php echo $sql_rooms_ru_limit['id'] ?>'>
                                            <div class="rooms_menu_img" style=" background-image: url('../img_admin/<?php echo $sql_rooms_ru_limit['image']; ?>')">
                                            </div>
                                            <div class="rooms_menu_code">
                                                <?php
                                                echo $sql_rooms_ru_limit['code'];
                                                ?>
                                            </div>
                                            <div class="rooms_menu_desc">
                                                <?php
                                                echo $sql_rooms_ru_limit['description'];
                                                ?>
                                            </div>
                                            <div class="menu_border"></div>
                                            <div class="menu_price">
                                                RUB <?php
                                                    echo $sql_rooms_ru_limit['price'];
                                                    ?> <span class='small'> (за ночь)</span>
                                            </div>
                                        </a>
                                    </div>
                                <?php
                                }
                                ?>
                                <div class="room_menu_more">
                                    <button class="room_menu_more_but">
                                        Узнать больше
                                    </button>
                                </div>
                            <?php
                            }
                            ?>
                        </div>

                    <?php

                    }
                    ?>
                    <input type="hidden" id='hidInp_lang' value="<?php echo $lang_menu; ?>">
                    <!--end room menu -->


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


                    <!-- opinions sec -->
                    <div class="op_container">
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
                <a href='gallery_photo_guest.php'>
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
                <script src='../js/guesthouse.js'></script>
                <script src='../js/home.js'></script>
                <script src="../carousel/vendor/owl.carousel/owl.carousel.min.js"></script>
                <script src="../carousel/js/main.js"></script>

</body>

</html>