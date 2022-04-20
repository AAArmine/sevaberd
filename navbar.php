<?php
include 'lang_config.php';
?>

<div class="contact-navbar">
    <div class="contact-navbar-flex d-flex">
        <div class="contact-navbar-contacts">
            <a href="tel:+37493848666">
                <span class="tel">
                    <i class="fas fa-phone-alt"></i> +374 99 722 515
                </span>
            </a>
            <span class="location">
                <i class="fas fa-map-marker-alt"></i>
                <?php
                if ($lang_menu == "am") {
                    echo "Կոտայքի մարզ, գյուղ Սևաբերդ, 2-րդ փող․ տուն 1";
                }
                if ($lang_menu == "en") {
                    echo "2nd street ․ House 1, Sevaberd village, Kotayk region:";
                }
                if ($lang_menu == "ru") {
                    echo "Котайкская область, село Севаберд, 2-я улица ․ Дом 1:";
                }
                ?>
            </span>
            <a href="mailto:info@sevaberd.am?Subject=Subject" id='mailTo'>
                <span class="mail">
                    <i class="fas fa-envelope"></i> info@sevaberd.am
                </span>
            </a>
        </div>

        <div class="contact-navbar-social">
            <img src="../Icons/Twitter.png" alt="" class='social-images'>
            <img src="../Icons/facebook.png" alt="" class='social-images'>
            <img src="../Icons/instagram.png" alt="" class='social-images'>
        </div>
    </div>
</div>
<!-- end of top black nav -->
<div class="mainnavbar d-flex">
    <div class="mainnavbar-item-logo">
        <a href="index.php">
            <img src="../Icons/logo.png" alt="logo" class='navbarlogo'>
        </a>
    </div>
    <div class="mainnavbar-item-cursor">
        <ul class='navul'>
            <li>
                <span class="navspan 
                    <?php
                    if ($file_name == 'index.php' || $file_name == '') {
                        echo 'navspanactive';
                    } ?>"><a href="index.php">
                        <?php
                        if ($lang_menu == "am") {
                            echo "Գլխավոր Էջ";
                        }
                        if ($lang_menu == "en") {
                            echo "Home page";
                        }
                        if ($lang_menu == "ru") {
                            echo "Главная страница";
                        }
                        ?>
                    </a>
                </span>
            </li>
            <li class='margin-li relative-li'>
                <span class='navspan
                    <?php
                    if ($file_name == "restaurant.php" || $file_name == "menu.php") {
                        echo "navspanactive";
                    } ?>'>
                    <a href='restaurant.php'>
                        <?php
                        if ($lang_menu == "am") {
                            echo "Ռեստորան";
                        }
                        if ($lang_menu == "en") {
                            echo "Restaurant";
                        }
                        if ($lang_menu == "ru") {
                            echo "Ресторан";
                        }
                        ?>
                    </a>
                </span>
            </li>
            <li class='margin-li'>
                <span class='navspan
                    <?php
                    if ($file_name == "guesthouse.php" || substr($file_name, 0, 8) == 'room-det') {
                        echo "navspanactive";
                    } ?>
                    '>
                    <a href='guesthouse.php'>
                        <?php
                        if ($lang_menu == "am") {
                            echo "Հյուրատուն";
                        }
                        if ($lang_menu == "en") {
                            echo "Guesthouse";
                        }
                        if ($lang_menu == "ru") {
                            echo "Гостевой дом";
                        }
                        ?>
                    </a>
                </span>
            </li>
            <li class='margin-li'>
                <span class='navspan
                    <?php
                    if ($file_name == "tourism.php") {
                        echo "navspanactive";
                    } ?>'>
                    <a href='tourism.php'>
                        <?php
                        if ($lang_menu == "am") {
                            echo "Տուրիզմի կենտրոն";
                        }
                        if ($lang_menu == "en") {
                            echo "Tourism center";
                        }
                        if ($lang_menu == "ru") {
                            echo "Центр Туризма";
                        }
                        ?>
                    </a>
                </span>
            </li>
            <li class='margin-li'>
                <span class='navspan
                    <?php
                    if ($file_name == "services.php" || substr($file_name, 0, 8) == 'service_') {
                        echo "navspanactive";
                    } ?>'>
                    <a href='services.php'>
                        <?php
                        if ($lang_menu == "am") {
                            echo "Ծառայություններ";
                        }
                        if ($lang_menu == "en") {
                            echo "Services";
                        }
                        if ($lang_menu == "ru") {
                            echo "Услуги";
                        }
                        ?>
                    </a>
                </span>
            </li>
            <li class='margin-li'>
                <span class='navspan
                    <?php
                    if ($file_name == "sp_offers.php" ||  substr($file_name, 0, 8) == 'offers_d') {
                        echo "navspanactive";
                    } ?>'>
                    <a href='sp_offers.php'>
                        <?php
                        if ($lang_menu == "am") {
                            echo "Հատուկ առաջարկներ";
                        }
                        if ($lang_menu == "en") {
                            echo "Special offers";
                        }
                        if ($lang_menu == "ru") {
                            echo "Специальные предложения";
                        }
                        ?>
                    </a>
                </span>
            </li>
            <li class='margin-li'>
                <div id='gallery_click' class='navspan
                    <?php
                    if (substr($file_name, 0, 8) == 'gallery_') {
                        echo "navspanactive";
                    } ?>'>
                    <a>
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
                    </a>
                    <div class="gallery_abs">
                        <div class='div1'>
                            <a href="gallery_photo_rest.php">
                                <?php
                                if ($lang_menu == "am") {
                                    echo "Լուսանկար";
                                }
                                if ($lang_menu == "en") {
                                    echo "Photo";
                                }
                                if ($lang_menu == "ru") {
                                    echo "Фото";
                                }
                                ?>
                            </a>
                        </div>
                        <div>
                            <a href="gallery_video_rest.php">
                                <?php
                                if ($lang_menu == "am") {
                                    echo "Տեսանյութ";
                                }
                                if ($lang_menu == "en") {
                                    echo "Video";
                                }
                                if ($lang_menu == "ru") {
                                    echo "Видео";
                                }
                                ?>
                            </a>
                        </div>
                    </div>
                </div>
            </li>

            <li class='margin-li'>
                <div id='blogNews_click' class='navspan
                    <?php
                    if (substr($file_name, 0, 4) == 'blog' || substr($file_name, 0, 4) == 'news') {
                        echo "navspanactive";
                    } ?>'>
                    <a>
                        <?php
                        if ($lang_menu == "am") {
                            echo "Բլոգ/Նորություններ";
                        }
                        if ($lang_menu == "en") {
                            echo "Blog/News";
                        }
                        if ($lang_menu == "ru") {
                            echo "Блог/Новости";
                        }
                        ?>
                    </a>
                    <div class="blogNews_abs">
                        <div class='div1'>
                            <a href="newsAll.php">
                                <?php
                                if ($lang_menu == "am") {
                                    echo "Նորություններ";
                                }
                                if ($lang_menu == "en") {
                                    echo "News";
                                }
                                if ($lang_menu == "ru") {
                                    echo "Новости";
                                }
                                ?>
                            </a>
                        </div>
                        <div>
                            <a href="blogAll.php">
                                <?php
                                if ($lang_menu == "am") {
                                    echo "Բլոգ";
                                }
                                if ($lang_menu == "en") {
                                    echo "Blog";
                                }
                                if ($lang_menu == "ru") {
                                    echo "Блог";
                                }
                                ?>
                            </a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <!-- end mainnavbar-item-cursor -->

    <div class="mainnavbar-item-language">
        <div class="dropdown dropdown-lang" id="lang_item">
            <button class="btn dropdown-toggle dropdown-toggle-lang" type="button" id="dropdownlng" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php echo "<span data-lng='' class='active-lng-a'>" . strtoupper($lang_menu) . "</span>"; ?>
                <img class='lang-changer' src=../Icons/earth.png>
            </button>
            <div class="dropdown-menu dropdown-menu-lang" aria-labelledby="dropdownlng">
                <?php
                foreach ($arr_lang as $value) {
                    if ($value != $lang_menu) {
                        $str_lang = strtoupper($value);
                        echo "<a class='dropdown-item lng-a' href='$f$value/$file_name' data-lng='$value'>$str_lang</a>";
                    }
                }
                ?>
                <!-- <a class="dropdown-item lng-a" href="" data-lng='ru'>RU</a> -->
            </div>
        </div>
    </div>
</div>
<!-- end mainnavbar -->



</div>

<!--------------------- mobile -------------------------->
<div class="navbar_mobile_container">

    <div class="navbar-mobile d-flex">
        <div class="navbar-mobile-item1">
            <span id="show-menu"><i class="fas fa-bars"></i></span>
        </div>
        <div class="navbar-mobile-item2">
            <a href="index.php">
                <img src="../Icons/logo.png" alt="logo" class='navbarlogo'>
            </a>

        </div>

        <div class="navbar-mobile-item3">
            <div class="dropdown dropdown-lang" id="lang_item">
                <button class="btn dropdown-toggle dropdown-toggle-lang" type="button" id="dropdownlng" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php echo "<span data-lng='' class='active-lng-a'>" . strtoupper($lang_menu) . "</span>"; ?>
                    <img class='lang-changer' src=../Icons/earth.png>
                </button>
                <div class="dropdown-menu dropdown-menu-lang1" aria-labelledby="dropdownlng">
                    <?php
                    foreach ($arr_lang as $value) {
                        if ($value != $lang_menu) {
                            $str_lang = strtoupper($value);
                            echo "<a class='dropdown-item lng-a' href='$f$value/$file_name' data-lng='$value'>$str_lang</a>";
                        }
                    }
                    ?>
                    <!-- <a class="dropdown-item lng-a" href="" data-lng='ru'>RU</a> -->
                </div>
            </div>
        </div>

    </div>
    <div class="navbar_abs_mobile">
        <ul class='mob_ul'>
            <li class='mob_li'>
                <div class="d-flex justify-content-between flex_mob">
                    <div class="
                        <?php
                        if ($file_name == 'index.php' || $file_name == '') {
                            echo 'navspanactive';
                        } ?>"><a href="index.php">
                            <?php
                            if ($lang_menu == "am") {
                                echo "Գլխավոր Էջ";
                            }
                            if ($lang_menu == "en") {
                                echo "Home page";
                            }
                            if ($lang_menu == "ru") {
                                echo "Главная страница";
                            }
                            ?>
                    </div>
                    <div><img src="../Icons/arrow right.png" alt="" class="arrow_right"></div>
                    </a>
                </div>
            </li>
            <li class='mob_li'>
                <div class="d-flex justify-content-between flex_mob">
                    <div class='
                        <?php
                        if ($file_name == "restaurant.php" || $file_name == "menu.php") {
                            echo "navspanactive";
                        } ?>'>
                        <a href='restaurant.php'>
                            <?php
                            if ($lang_menu == "am") {
                                echo "Ռեստորան";
                            }
                            if ($lang_menu == "en") {
                                echo "Restaurant";
                            }
                            if ($lang_menu == "ru") {
                                echo "Ресторан";
                            }
                            ?>
                        
                    </div>
                    <div><img src="../Icons/arrow right.png" alt="" class="arrow_right"></div>
                    </a>
                </div>
            </li>
            <li class='mob_li'>
                <div class="d-flex justify-content-between flex_mob">
                    <span class='
                        <?php

                        if ($file_name == "guesthouse.php" || substr($file_name, 0, 10) == 'room-detai') {
                            echo "navspanactive";
                        } ?>
                        '>
                        <a href='guesthouse.php'>
                            <?php
                            if ($lang_menu == "am") {
                                echo "Հյուրատուն";
                            }
                            if ($lang_menu == "en") {
                                echo "Guesthouse";
                            }
                            if ($lang_menu == "ru") {
                                echo "Гостевой дом";
                            }
                            ?>
                        
                    </span>
                    <div><img src="../Icons/arrow right.png" alt="" class="arrow_right"></div>
                    </a>
                </div>
            </li>
            <li class='mob_li'>
                <div class="d-flex justify-content-between flex_mob">
                    <div class='
                        <?php
                        if ($file_name == "tourism.php") {
                            echo "navspanactive";
                        } ?>'>
                        <a href='tourism.php'>
                            <?php
                            if ($lang_menu == "am") {
                                echo "Տուրիզմի կենտրոն";
                            }
                            if ($lang_menu == "en") {
                                echo "Tourism center";
                            }
                            if ($lang_menu == "ru") {
                                echo "Центр Туризма";
                            }
                            ?>
                        
                    </div>
                    <div><img src="../Icons/arrow right.png" alt="" class="arrow_right"></div>
                    </a>
                </div>
            </li>
            <li class='mob_li'>
                <div class="d-flex justify-content-between flex_mob">
                    <div class='
                        <?php
                        if ($file_name == "services.php" || substr($file_name, 0, 10) == 'service_de') {
                            echo "navspanactive";
                        } ?>'>
                        <a href='services.php'>
                            <?php
                            if ($lang_menu == "am") {
                                echo "Ծառայություններ";
                            }
                            if ($lang_menu == "en") {
                                echo "Services";
                            }
                            if ($lang_menu == "ru") {
                                echo "Услуги";
                            }
                            ?>
                        
                    </div>
                    <div><img src="../Icons/arrow right.png" alt="" class="arrow_right"></div>
                    </a>
                </div>
            </li>
            <li class='mob_li'>
                <div class="d-flex justify-content-between flex_mob">
                    <div class='
                        <?php
                        if ($file_name == "sp_offers.php" || substr($file_name, 0, 10) == 'offers_det') {
                            echo "navspanactive";
                        } ?>'>
                        <a href='sp_offers.php'>
                            <?php
                            if ($lang_menu == "am") {
                                echo "Հատուկ առաջարկներ";
                            }
                            if ($lang_menu == "en") {
                                echo "Special offers";
                            }
                            if ($lang_menu == "ru") {
                                echo "Специальные предложения";
                            }
                            ?>
                        
                    </div>
                    <div><img src="../Icons/arrow right.png" alt="" class="arrow_right"></div>
                    </a>
                </div>
            </li>
            <li class='mob_li'>
                <div class="d-flex justify-content-between flex_mob">
                    <div id='gallery_click1' class='navspan pb-0
                        <?php
                        if (substr($file_name, 0, 8) == 'gallery_') {
                            echo "navspanactive";
                        } ?>'>
                        <a>
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
                        </a>
                        <div class="gallery_abs">
                            <div class='div1'>
                                <a href="gallery_photo_rest.php">
                                    <?php
                                    if ($lang_menu == "am") {
                                        echo "Լուսանկար";
                                    }
                                    if ($lang_menu == "en") {
                                        echo "Photo";
                                    }
                                    if ($lang_menu == "ru") {
                                        echo "Фото";
                                    }
                                    ?>
                                </a>
                            </div>
                            <div>
                                <a href="gallery_video_rest.php">
                                    <?php
                                    if ($lang_menu == "am") {
                                        echo "Տեսանյութ";
                                    }
                                    if ($lang_menu == "en") {
                                        echo "Video";
                                    }
                                    if ($lang_menu == "ru") {
                                        echo "Видео";
                                    }
                                    ?>
                                </a>
                            </div>
                        </div>
                    </div>
 
                </div>
            </li>
            <li class='mob_li'>
                <div class="d-flex justify-content-between flex_mob">
                    <div id='blogNews_click1' class='navspan
                        <?php
                        if (substr($file_name, 0, 4) == 'blog' || substr($file_name, 0, 4) == 'news') {
                            echo "navspanactive";
                        } ?>'>
                        <a>
                            <?php
                            if ($lang_menu == "am") {
                                echo "Բլոգ/Նորություններ";
                            }
                            if ($lang_menu == "en") {
                                echo "Blog/News";
                            }
                            if ($lang_menu == "ru") {
                                echo "Блог/Новости";
                            }
                            ?>
                        </a>
                        <div class="blogNews_abs">
                            <div class='div1'>
                                <a href="newsAll.php">
                                    <?php
                                    if ($lang_menu == "am") {
                                        echo "Նորություններ";
                                    }
                                    if ($lang_menu == "en") {
                                        echo "News";
                                    }
                                    if ($lang_menu == "ru") {
                                        echo "Новости";
                                    }
                                    ?>
                                </a>
                            </div>
                            <div>
                                <a href="blogAll.php">
                                    <?php
                                    if ($lang_menu == "am") {
                                        echo "Բլոգ";
                                    }
                                    if ($lang_menu == "en") {
                                        echo "Blog";
                                    }
                                    if ($lang_menu == "ru") {
                                        echo "Блог";
                                    }
                                    ?>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </li>
        </ul>

    </div>

</div>
<script src='../js/navbar.js'></script>