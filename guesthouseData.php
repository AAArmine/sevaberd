<?php
include "db_configuration/configuration.php";

$sql_rooms_am = "SELECT * from rooms_am";
$result_rooms_am = mysqli_query($con, $sql_rooms_am);

$sql_rooms_en = "SELECT * from rooms_en";
$result_rooms_en = mysqli_query($con, $sql_rooms_en);

$sql_rooms_ru = "SELECT * from rooms_ru";
$result_rooms_ru = mysqli_query($con, $sql_rooms_ru);
$lang_menu =$_POST['lang'];
if(isset($_POST['clicked_to_show_all'])){
    if($lang_menu == "am"){
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
                        <?php
                        echo $sql_rooms_am['price'];
                        ?>
                    </div>
                </a>
            </div>
        <?php
            }
        }
        if($lang_menu == "en"){
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
                            <?php
                            echo $sql_rooms_en['price'];
                            ?>
                        </div>
                    </a>
                </div>
            <?php
                }
            }
            if($lang_menu == "ru"){
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
                                <?php
                                echo $sql_rooms_ru['price'];
                                ?>
                            </div>
                        </a>
                    </div>
                <?php
                    }
                }
        }
        ?>