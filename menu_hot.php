<?php

include "../db_configuration/configuration.php";
include "../menu_process_sql.php";
include "../header.php";

?>
<link rel="stylesheet" href="../css/menu.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />

<title>Restaurant menu</title>
</head>

<body>
    <?php
    include "navbar.php";
    ?>
    <div class="background_main">
        <div class="main80">
            <h1 class="main_caption">
            <?php
                if ($lang_menu == "am") {
                    echo "Մենյու";
                }
                if ($lang_menu == "en") {
                    echo "Menu";
                }
                if ($lang_menu == "ru") {
                    echo "Меню";
                }
            ?>
                
            </h1>

            <?php include "../search_menu.php"?>   
        </div>
        <?php include "../navmenu.php"?>
        
        <div class="tab-content">
            <div>
                <h3> 
                    <?php
                        if ($lang_menu == "am") {
                            echo "Տաք ուտեստներ";
                        }
                        if ($lang_menu == "en") {
                            echo "Hot dishes";
                        }
                        if ($lang_menu == "ru") {
                            echo "Горячие блюда";
                        }
                    ?>
                </h3>
                <div class="whole_menu_flex d-flex">
                <?php
                if ($lang_menu == "am") {
                    if (mysqli_num_rows($result_menu_hotDishes_am) > 0) {
                        while ($sql_menu_hotDishes_am = mysqli_fetch_assoc($result_menu_hotDishes_am)){
                            ?>
                    <div class="whole_menu_item">
                        <div class="whole_menu_img" style="background-image:url('../img_admin/<?php
                            echo $sql_menu_hotDishes_am['menu_img'];
                            ?>')">
                        </div>
                        <div class="whole_menu_name">
                            <?php
                            echo $sql_menu_hotDishes_am['menu_name'];
                            ?>
                        </div>
                        <div class="whole_menu_desc">
                            <?php
                            echo $sql_menu_hotDishes_am['menu_description'];
                            ?>
                        </div>
                        <div class="whole_menu_border">
                        </div>
                        <div class="whole_menu_price">
                            <?php
                            echo $sql_menu_hotDishes_am['price'];
                            if ($lang_menu == "am") {
                                echo " ՀՀ դրամ";
                            }
                            if ($lang_menu == "en") {
                                echo " AMD";
                            }
                            if ($lang_menu == "ru") {
                                echo " AMD";
                            } 
                            ?>
                        </div>

                    </div>
                    <?php    
                            }
                        }
                        $result_all = mysqli_query($con, "SELECT * FROM menu_am where category='Տաք ուտեստներ'");
                        $rowsNumber = mysqli_num_rows($result_all);
                    
                        $perPage = $rowsNumber / 6;
                        $numPages = ceil($perPage);
                }    
                ?>
                <?php
                if ($lang_menu == "en") {
                    if (mysqli_num_rows($result_menu_hotDishes_en) > 0) {
                        while ($sql_menu_hotDishes_en = mysqli_fetch_assoc($result_menu_hotDishes_en)){
                            ?>
                    <div class="whole_menu_item">
                        <div class="whole_menu_img" style="background-image:url('../img_admin/<?php
                            echo $sql_menu_hotDishes_en['menu_img'];
                            ?>')">
                        </div>
                        <div class="whole_menu_name">
                            <?php
                            echo $sql_menu_hotDishes_en['menu_name'];
                            ?>
                        </div>
                        <div class="whole_menu_desc">
                            <?php
                            echo $sql_menu_hotDishes_en['menu_description'];
                            ?>
                        </div>
                        <div class="whole_menu_border">
                        </div>
                        <div class="whole_menu_price">
                            <?php
                            echo $sql_menu_hotDishes_en['price'];
                            if ($lang_menu == "am") {
                                echo " ՀՀ դրամ";
                            }
                            if ($lang_menu == "en") {
                                echo " AMD";
                            }
                            if ($lang_menu == "ru") {
                                echo " AMD";
                            } 
                            ?>
                        </div>

                    </div>
                    <?php    
                            }
                        }
                        $result_all = mysqli_query($con, "SELECT * FROM menu_en where category='Hot dishes'");
                        $rowsNumber = mysqli_num_rows($result_all);
                    
                        $perPage = $rowsNumber / 6;
                        $numPages = ceil($perPage);
                }    
                ?>
                <?php
                if ($lang_menu == "ru") {
                    if (mysqli_num_rows($result_menu_hotDishes_ru) > 0) {
                        while ($sql_menu_hotDishes_ru = mysqli_fetch_assoc($result_menu_hotDishes_ru)){
                            ?>
                    <div class="whole_menu_item">
                        <div class="whole_menu_img" style="background-image:url('../img_admin/<?php
                            echo $sql_menu_hotDishes_ru['menu_img'];
                            ?>')">
                        </div>
                        <div class="whole_menu_name">
                            <?php
                            echo $sql_menu_hotDishes_ru['menu_name'];
                            ?>
                        </div>
                        <div class="whole_menu_desc">
                            <?php
                            echo $sql_menu_hotDishes_ru['menu_description'];
                            ?>
                        </div>
                        <div class="whole_menu_border">
                        </div>
                        <div class="whole_menu_price">
                            <?php
                            echo $sql_menu_hotDishes_ru['price'];
                            if ($lang_menu == "am") {
                                echo " ՀՀ դրամ";
                            }
                            if ($lang_menu == "en") {
                                echo " AMD";
                            }
                            if ($lang_menu == "ru") {
                                echo " AMD";
                            } 
                            ?>
                        </div>

                    </div>
                    <?php    
                            }
                        }
                        $result_all = mysqli_query($con, "SELECT * FROM menu_ru where category='Горячие блюда'");
                        $rowsNumber = mysqli_num_rows($result_all);
                    
                        $perPage = $rowsNumber / 6;
                        $numPages = ceil($perPage);
                }    
                ?>

                </div>
                <div class="pagination-div mt-3">

                    <?php
                    for ($i = 1; $i <= $numPages; $i++) {
                        if ($pageIndex == $i) {
                            echo "<a href='menu_hot.php?pageIndex=" . $i . "' class='activePage'> " . $i . " </a>";
                        } else {
                            echo "<a href='menu_hot.php?pageIndex=" . $i . "'> " . $i . " </a>";
                        }
                    }
                    ?>


                </div>
            
            </div>
        </div>
    </div>    

    

    <script>
        var url_string = window.location;
        var url = new URL(url_string);
        var name = url.searchParams.get("pageIndex");

    </script>
    <?php
    include "footer.php";
    ?>
</body>

</html>