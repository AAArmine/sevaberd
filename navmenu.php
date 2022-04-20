<div class='center'>
            <ul class="nav justify-content-center">
                <li class="tab_menu
                <?php
                    if (strpos($file_name, 'menu.php') === 0) {
                        echo ' activePageIndex';
                    } ?>
                "><a href="menu.php">
                    <?php
                        if ($lang_menu == "am") {
                            echo "Ամբողջ ընտրացանկը";
                        }
                        if ($lang_menu == "en") {
                            echo "The whole menu";
                        }
                        if ($lang_menu == "ru") {
                            echo "Все меню";
                        }
                    ?>
                </a></li>
                <li class="tab_menu
                <?php
                    if (strpos($file_name, 'menu_hot.php') === 0) {
                        echo ' activePageIndex';
                    } ?>
                ">
                <a href="menu_hot.php">
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
                    
                </a></li>
                <li class="tab_menu
                <?php
                    if (strpos($file_name, 'menu_salads.php') === 0) {
                        echo ' activePageIndex';
                    } ?>
                "><a href="menu_salads.php">
                    <?php
                        if ($lang_menu == "am") {
                            echo "Աղցաններ";
                        }
                        if ($lang_menu == "en") {
                            echo "Salads";
                        }
                        if ($lang_menu == "ru") {
                            echo "Салаты";
                        }
                    ?>
                    
                </a></li>
                <li class="tab_menu
                <?php
                    if (strpos($file_name, 'menu_appetizers.php') === 0) {
                        echo ' activePageIndex';
                    } ?>

                "><a href="menu_appetizers.php">
                    <?php
                        if ($lang_menu == "am") {
                            echo "Նախաուտեստներ";
                        }
                        if ($lang_menu == "en") {
                            echo "Appetizers";
                        }
                        if ($lang_menu == "ru") {
                            echo "Закуски";
                        }
                    ?>
                    
                </a></li>
                <li class="tab_menu
                <?php
                    if (strpos($file_name, 'menu_garnishes.php') === 0) {
                        echo ' activePageIndex';
                    } ?>
                "><a href="menu_garnishes.php">
                    <?php
                        if ($lang_menu == "am") {
                            echo "Խավարտներ";
                        }
                        if ($lang_menu == "en") {
                            echo "Garnishes";
                        }
                        if ($lang_menu == "ru") {
                            echo "Гарниры";
                        }
                    ?>
                    
                </a></li>
                <li class="tab_menu
                <?php
                    if (strpos($file_name, 'menu_desserts.php') === 0) {
                        echo ' activePageIndex';
                    } ?>
                "><a href="menu_desserts.php">
                    <?php
                        if ($lang_menu == "am") {
                            echo "Աղանդեր";
                        }
                        if ($lang_menu == "en") {
                            echo "Desserts";
                        }
                        if ($lang_menu == "ru") {
                            echo "Десерты";
                        }
                    ?>
                    
                </a></li>
                <li class="tab_menu
                <?php
                    if (strpos($file_name, 'menu_drinks.php') === 0) {
                        echo ' activePageIndex';
                    } ?>
                "><a href="menu_drinks.php">
                    <?php
                        if ($lang_menu == "am") {
                            echo "Խմիչքներ";
                        }
                        if ($lang_menu == "en") {
                            echo "Drinks";
                        }
                        if ($lang_menu == "ru") {
                            echo "Напитки";
                        }
                    ?>
                    
                </a></li>
            </ul>
        </div>