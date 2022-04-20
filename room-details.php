<?php
include "../db_configuration/configuration.php";
include "../header.php";
?>
<link rel="stylesheet" href="../css/room-details.css">

<title>Sevaberd Guesthouse</title>
</head>

<body>
    <?php
    include "navbar.php";
    include "room_details_process.php";
    ?>
    <div class="room_details_flex d-flex">
        <?php
        if ($lang_menu == 'am') {
        ?>
            <div class="room_details_img">
                <div class="roomImg" style="background-image: url('../img_admin/<?php echo $image_am; ?>')">
                </div>
                <h5 class='room_details_caption room_details_caption1'><?php echo $code_am; ?></h5>
                <div class="description_room">
                    <?php echo $decription_am; ?>
                </div>

            </div>
            <div class="room_details_options">
                <h5 class='room_details_caption'>Սենյակի հարմարություներ</h5>
                <?php
                for ($i = 0; $i < count($room_opt_am); $i++) {
                    if ($room_opt_am[$i] !== '' && $room_opt_am[$i] !== NULL) {
                ?>
                        <div class="option_room">
                            <?php echo $room_opt_am[$i]; ?>
                        </div>

                <?php
                    }
                }

                ?>
                <div class="room_price d-flex">
                    <div class="price">Արժեքը </div>
                    <div class="price_in_num">AMD <?php echo $price_am; ?></div>

                </div>
                <div class="reservation">
                    <a href='guesthouse.php'><input type="button" value="<?php
                                                                            if ($lang_menu == 'am') {
                                                                                echo "Վերադառնալ";
                                                                            }
                                                                            if ($lang_menu == 'en') {
                                                                                echo "Go Back";
                                                                            }
                                                                            if ($lang_menu == 'ru') {
                                                                                echo "Назад";
                                                                            }
                                                                            ?>" class='bookButton'></a>

                </div>
            </div>
        <?php
        }
        if ($lang_menu == 'en') {
        ?>
            <div class="room_details_img">
                <div class="roomImg" style="background-image: url('../img_admin/<?php echo $image_en; ?>')">
                </div>
                <h5 class='room_details_caption room_details_caption1'><?php echo $code_en; ?></h5>
                <div class="description_room">
                    <?php echo $decription_en; ?>
                </div>

            </div>
            <div class="room_details_options">
                <h5 class='room_details_caption'>Room amenities</h5>
                <?php
                for ($i = 0; $i < count($room_opt_en); $i++) {
                    if ($room_opt_en[$i] !== '' && $room_opt_en[$i] !== NULL) {
                ?>
                        <div class="option_room">
                            <?php echo $room_opt_en[$i]; ?>
                        </div>

                <?php
                    }
                }

                ?>
                <div class="room_price d-flex">
                    <div class="price">Price</div>
                    <div class="price_in_num">USD <?php echo $price_en; ?></div>

                </div>
                <div class="reservation">
                    <input type="button" value="Reservation" class='bookButton'>

                </div>
            </div>

        <?php
        }
        if ($lang_menu == 'ru') {
        ?>
            <div class="room_details_img">
                <div class="roomImg" style="background-image: url('../img_admin/<?php echo $image_ru; ?>')">
                </div>
                <h5 class='room_details_caption room_details_caption1'><?php echo $code_ru; ?></h5>
                <div class="description_room">
                    <?php echo $decription_ru; ?>
                </div>

            </div>
            <div class="room_details_options">
                <h5 class='room_details_caption'>Удобства в номере</h5>
                <?php
                for ($i = 0; $i < count($room_opt_ru); $i++) {
                    if ($room_opt_ru[$i] !== '' && $room_opt_ru[$i] !== NULL) {
                ?>
                        <div class="option_room">
                            <?php echo $room_opt_ru[$i]; ?>
                        </div>

                <?php
                    }
                }

                ?>
                <div class="room_price d-flex">
                    <div class="price">Price</div>
                    <div class="price_in_num">USD <?php echo $price_ru; ?></div>

                </div>
                <div class="reservation">
                    <input type="button" value="Бронирование" class='bookButton'>

                </div>
            </div>

        <?php
        }
        ?>

    </div>

    <!-- other rooms -->
    <div class="other_rooms_caption">
        <?php
        if ($lang_menu == 'am') {
            echo "Այլ առաջարկներ";
        }
        if ($lang_menu == 'en') {
            echo "Other suggestions";
        }
        if ($lang_menu == 'ru') {
            echo "Другие предложения";
        }
        ?>

    </div>
    <div class="rooms_menu_flex d-flex">
        <?php
        if ($lang_menu == 'am') {
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
        }
        if ($lang_menu == 'en') {
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
        }
        ?>
        <?php
        if ($lang_menu == 'ru') {
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
        }
        ?>
    </div>
    <?php
    include "footer.php";
    ?>
</body>