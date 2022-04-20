<?php
include "../db_configuration/configuration.php";
include "../header.php";
include "../txt_reserve.php";
?>
<link rel="stylesheet" href="../css/offers_details.css">

<title>Sevaberd Services</title>
</head>

<body>
    <?php
    include "navbar.php";
    include "offers_details_process_sql.php";
    ?>
    <div class="offers_details_sec">
        <input type='hidden' id='pageName' value='<?php echo $file_name; ?>'>
        <input type='hidden' id='language_current' value='<?php echo $lang_menu ?>'>

        <?php
        if ($lang_menu == 'am') {
        ?>
            <div class="img_offer" style='background-image:url("../img_admin/<?php echo $image_am; ?>")'></div>
            <div class="offer_flex d-flex">
                <div class="offer_item">
                    <h2 class="offer_title"><?php echo $title_am; ?></h2>
                    <p class="offer_text"><?php echo $text_am; ?></p>
                </div>
                <div class="reserve_item">
                    <div class="booking-padding">
                        <div class="flex-book-inputs d-flex">
                            <div class="arrival-date">
                                <span class="dateText">
                                    Ժամանման ամսաթիվ
                                </span><br>
                                <input type="date" class="bookdates" id='arrival_inp'>
                            </div>
                            <div class="departure-date">
                                <span class="dateText">
                                    Մեկնելու ամսաթիվ
                                </span><br>
                                <input type="date" class="bookdates" id='departure_inp'>
                            </div>
                        </div>
                    </div>
                    <div class="booking-padding booking-padding-mt">
                        <div class="flex-book-inputs d-flex">
                            <div class="arrival-date">
                                <span class="dateText">
                                    Այցելու
                                </span><br>
                                <input type="number" class="bookdates bookdates2" id="people_quantity" min="0" max="30" placeholder="Այցելուների քանակ" id="people_quantity" min="0" max="10">
                            </div>
                            <div class="departure-date">
                                <span class="dateText">
                                    Սենյակ
                                </span><br>
                                <input type="number" class="bookdates bookdates2" id="room_quantity" name="rooms_quantity" placeholder="Սենյակների քանակ" min="1" max="8">
                            </div>
                        </div>
                    </div>
                    <div class="error_booking"></div>
                    <div class="buttons">
                        <input type="button" value="Ամրագրել" class='bookButton' data-toggle="modal" data-target="#reserveModal">

                        <a href=sp_offers.php>
                            <button class="go_back">Վերադառնալ</button>
                        </a>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
        <?php
        if ($lang_menu == 'en') {
        ?>
            <div class="img_offer" style='background-image:url("../img_admin/<?php echo $image_en; ?>")'></div>
            <div class="offer_flex d-flex">
                <div class="offer_item">
                    <h2 class="offer_title"><?php echo $title_en; ?></h2>
                    <p class="offer_text"><?php echo $text_en; ?></p>
                </div>
                <div class="reserve_item">
                    <div class="booking-padding">
                        <div class="flex-book-inputs d-flex">
                            <div class="arrival-date">
                                <span class="dateText">
                                    Date of arrival
                                </span><br>
                                <input type="date" class="bookdates" id='arrival_inp'>
                            </div>
                            <div class="departure-date">
                                <span class="dateText">
                                    Date of departure
                                </span><br>
                                <input type="date" class="bookdates" id='departure_inp'>
                            </div>
                        </div>
                    </div>
                    <div class="booking-padding booking-padding-mt">
                        <div class="flex-book-inputs d-flex">
                            <div class="arrival-date">
                                <span class="dateText">
                                    Visitors
                                </span><br>
                                <input type="number" class="bookdates bookdates2" id="people_quantity" min="0" max="30" placeholder="Number of visitors" id="people_quantity" min="0" max="10">
                            </div>
                            <div class="departure-date">
                                <span class="dateText">
                                    Room
                                </span><br>
                                <input type="number" class="bookdates bookdates2" id="room_quantity" name="rooms_quantity" placeholder="Number of rooms" min="1" max="8">
                            </div>
                        </div>
                    </div>
                    <div class="error_booking"></div>
                    <div class="buttons">
                        <input type="button" value="Reservation" class='bookButton' data-toggle="modal" data-target="#reserveModal">

                        <a href=sp_offers.php>
                            <button class="go_back">Back</button>
                        </a>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>

        <!-- ru -->
        <?php
        if ($lang_menu == 'ru') {
        ?>
            <div class="img_offer" style='background-image:url("../img_admin/<?php echo $image_ru; ?>")'></div>
            <div class="offer_flex d-flex">
                <div class="offer_item">
                    <h2 class="offer_title"><?php echo $title_ru; ?></h2>
                    <p class="offer_text"><?php echo $text_ru; ?></p>
                </div>
                <div class="reserve_item">
                    <div class="booking-padding">
                        <div class="flex-book-inputs d-flex">
                            <div class="arrival-date">
                                <span class="dateText">
                                    Дата прибытия
                                </span><br>
                                <input type="date" class="bookdates" id='arrival_inp'>
                            </div>
                            <div class="departure-date">
                                <span class="dateText">
                                    Дата отбытия
                                </span><br>
                                <input type="date" class="bookdates" id='departure_inp'>
                            </div>
                        </div>
                    </div>
                    <div class="booking-padding booking-padding-mt">
                        <div class="flex-book-inputs d-flex">
                            <div class="arrival-date">
                                <span class="dateText">
                                    Посетители
                                </span><br>
                                <input type="number" class="bookdates bookdates2" id="people_quantity" min="0" max="30" placeholder="Количество посетителей" id="people_quantity" min="0" max="10">
                            </div>
                            <div class="departure-date">
                                <span class="dateText">
                                    Номер
                                </span><br>
                                <input type="number" class="bookdates bookdates2" id="room_quantity" name="rooms_quantity" placeholder="Количество комнат" min="1" max="8">
                            </div>
                        </div>
                    </div>
                    <div class="error_booking"></div>
                    <div class="buttons">
                        <input type="button" value="Бронирование" class='bookButton' data-toggle="modal" data-target="#reserveModal" data-dismiss="modal">

                        <a href=sp_offers.php>
                            <button class="go_back">Назад</button>
                        </a>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>

    </div>



    <!-- Modal -->
    <div id="reserveModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <?php
                if($lang_menu=='am'){
                    echo RESERVE_INPUTS_AM;
                }
                if($lang_menu=='en'){
                    echo RESERVE_INPUTS_EN;
                }
                if($lang_menu=='ru'){
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


    <?php
    include "footer.php";
    ?>
    <script src='../js/reserve.js'></script>
</body>