<?php

include "../db_configuration/configuration.php";
include "../news_process_sql.php";
include "../header.php";
// include "../txt_gallery.php";

?>
<script>
    var url_string = window.location;
    var url = new URL(url_string);
    var name = url.searchParams.get("pageIndex");

    // $(document).ready(function() {
    //     $('.see_more').on('click', function() {
    //         $(this).siblings('.text_blog').css('-webkit-line-clamp', '1000');
    //         $(this).fadeOut(1000);
    //     });
    // });
</script>

<link rel="stylesheet" href="../css/blogNews.css">


<title>Sevaberd News</title>
</head>

<body>
    <?php
    include "navbar.php";
    ?>

    <div class="blog_sec mb-5 pb-5" id="gal_photo_sec">

        <div class="pills-content">
            <h2>
                <?php
                if ($lang_menu == "am") {
                    echo 'Նորություններ';
                }
                if ($lang_menu == "en") {
                    echo 'News';
                }
                if ($lang_menu == "ru") {
                    echo 'Новости';
                }
                ?>
            </h2>
            <h4>
                <?php
                if ($lang_menu == "am") {
                    echo 'Բաժիններ';
                }
                if ($lang_menu == "en") {
                    echo 'Categories';
                }
                if ($lang_menu == "ru") {
                    echo 'Категории';
                }
                ?>
            </h4>
            <?php include "newsNav.php" ?>

            <!-- category2 -->
            <div class="tab-pane fade show active" id="category_2" role="tabpanel" aria-labelledby="home-tab">
                <div class="blog_flex d-flex justify-content-between">
                    <div class="blog_flex_item1">
                        <?php
                        if ($lang_menu == "am") {
                            while ($sql_news_all_am = mysqli_fetch_assoc($result_news_all_am)) {
                        ?>
                                <div class="blog_flex_item1_content">
                                    <div class="img_main" style="background-image: url('../img_admin/<?php echo $sql_news_all_am['image'] ?>');">
                                        <div class="category_abs">
                                            <span class="vertically_center">
                                                <?php echo $sql_news_all_am['category']; ?>
                                            </span>
                                        </div>
                                        <div class="category_abs_triangle"></div>
                                    </div>
                                    <div class="content_blog">
                                        <div class='date_blog'><?php echo $sql_news_all_am['date_current'] ?></div>
                                        <h3><?php echo $sql_news_all_am['title'] ?></h3>
                                        <div class="text_blog">
                                            <?php echo $sql_news_all_am['text'] ?>

                                        </div>
                                        <a href="last_news.php?id=<?php echo $sql_news_all_am['id'] ?>">
                                            <button class="see_more"><?php
                                                                        if ($lang_menu == "am") {
                                                                            echo "ՏԵՍՆԵԼ ԱՎԵԼԻՆ";
                                                                        }
                                                                        if ($lang_menu == "en") {
                                                                            echo "SEE MORE";
                                                                        }
                                                                        if ($lang_menu == "ru") {
                                                                            echo "УЗНАТЬ БОЛЬШЕ";
                                                                        }
                                                                        ?></button>
                                        </a>
                                    </div>
                                </div>
                            <?php
                            }
                        }
                        if ($lang_menu == "en") {
                            while ($sql_news_all_en = mysqli_fetch_assoc($result_news_all_en)) {
                            ?>
                                <div class="blog_flex_item1_content">
                                    <div class="img_main" style="background-image: url('../img_admin/<?php echo $sql_news_all_en['image'] ?>');">
                                        <div class="category_abs">
                                            <span class="vertically_center">
                                                <?php echo $sql_news_all_en['category']; ?>
                                            </span>
                                        </div>
                                        <div class="category_abs_triangle"></div>
                                    </div>
                                    <div class="content_blog">
                                        <div class='date_blog'><?php echo $sql_news_all_en['date_current'] ?></div>
                                        <h3><?php echo $sql_news_all_en['title'] ?></h3>
                                        <div class="text_blog">
                                            <?php echo $sql_news_all_en['text'] ?>

                                        </div>
                                        <a href="last_news.php?id=<?php echo $sql_news_all_en['id'] ?>">
                                            <button class="see_more"><?php
                                                                        if ($lang_menu == "am") {
                                                                            echo "ՏԵՍՆԵԼ ԱՎԵԼԻՆ";
                                                                        }
                                                                        if ($lang_menu == "en") {
                                                                            echo "SEE MORE";
                                                                        }
                                                                        if ($lang_menu == "ru") {
                                                                            echo "УЗНАТЬ БОЛЬШЕ";
                                                                        }
                                                                        ?></button>
                                        </a>
                                    </div>
                                </div>
                            <?php
                            }
                        }
                        if ($lang_menu == "ru") {
                            while ($sql_news_all_ru = mysqli_fetch_assoc($result_news_all_ru)) {
                            ?>
                                <div class="blog_flex_item1_content">
                                    <div class="img_main" style="background-image: url('../img_admin/<?php echo $sql_news_all_ru['image'] ?>');">
                                        <div class="category_abs">
                                            <span class="vertically_center">
                                                <?php echo $sql_news_all_ru['category']; ?>
                                            </span>
                                        </div>
                                        <div class="category_abs_triangle"></div>
                                    </div>
                                    <div class="content_blog">
                                        <div class='date_blog'><?php echo $sql_news_all_ru['date_current'] ?></div>
                                        <h3><?php echo $sql_news_all_ru['title'] ?></h3>
                                        <div class="text_blog">
                                            <?php echo $sql_news_all_ru['text'] ?>

                                        </div>
                                        <a href="last_news.php?id=<?php echo $sql_news_all_ru['id'] ?>">
                                            <button class="see_more"><?php
                                                                        if ($lang_menu == "am") {
                                                                            echo "ՏԵՍՆԵԼ ԱՎԵԼԻՆ";
                                                                        }
                                                                        if ($lang_menu == "en") {
                                                                            echo "SEE MORE";
                                                                        }
                                                                        if ($lang_menu == "ru") {
                                                                            echo "УЗНАТЬ БОЛЬШЕ";
                                                                        }
                                                                        ?></button>
                                        </a>
                                    </div>
                                </div>
                        <?php
                            }
                        }
                        ?>

                    </div>

                    <div class="blog_flex_item2">
                        <h3>
                            <?php
                            if ($lang_menu == "am") {
                                echo "Վերջին ավելացվածներ";
                            }
                            if ($lang_menu == "en") {
                                echo "Recent additions";
                            }
                            if ($lang_menu == "ru") {
                                echo "Недавние дополнения";
                            }
                            ?>
                        </h3>
                        <?php
                        if ($lang_menu == "am") {
                            while ($sql_last_dates_am = mysqli_fetch_assoc($result_last_dates_am)) {
                        ?>
                                <div class="last_blog_cont">
                                    <a href="last_news.php?id=<?php echo $sql_last_dates_am['id'] ?>">
                                        <div class="last_blog_img" style="background-image: url('../img_admin/<?php echo $sql_last_dates_am['image'] ?>');">

                                        </div>
                                        <div class="category_last"><?php echo $sql_last_dates_am['category'] ?></div>
                                        <div class="date_last"><?php echo $sql_last_dates_am['DATE'] ?></div>
                                        <h5 class="title_last"><?php echo $sql_last_dates_am['title'] ?></h5>
                                        <div class="text_last"><?php echo $sql_last_dates_am['text'] ?></div>
                                    </a>
                                </div>

                            <?php
                            }
                        }
                        if ($lang_menu == "en") {
                            while ($sql_last_dates_en = mysqli_fetch_assoc($result_last_dates_en)) {
                            ?>
                                <div class="last_blog_cont">
                                    <a href="last_news.php?id=<?php echo $sql_last_dates_en['id'] ?>">
                                        <div class="last_blog_img" style="background-image: url('../img_admin/<?php echo $sql_last_dates_en['image'] ?>');">

                                        </div>
                                        <div class="category_last"><?php echo $sql_last_dates_en['category'] ?></div>
                                        <div class="date_last"><?php echo $sql_last_dates_en['DATE'] ?></div>
                                        <h5 class="title_last"><?php echo $sql_last_dates_en['title'] ?></h5>
                                        <div class="text_last"><?php echo $sql_last_dates_en['text'] ?></div>
                                    </a>
                                </div>

                            <?php
                            }
                        }
                        if ($lang_menu == "ru") {
                            while ($sql_last_dates_ru = mysqli_fetch_assoc($result_last_dates_ru)) {
                            ?>
                                <div class="last_blog_cont">
                                    <a href="last_news.php?id=<?php echo $sql_last_dates_ru['id'] ?>">
                                        <div class="last_blog_img" style="background-image: url('../img_admin/<?php echo $sql_last_dates_ru['image'] ?>');">

                                        </div>
                                        <div class="category_last"><?php echo $sql_last_dates_ru['category'] ?></div>
                                        <div class="date_last"><?php echo $sql_last_dates_ru['DATE'] ?></div>
                                        <h5 class="title_last"><?php echo $sql_last_dates_ru['title'] ?></h5>
                                        <div class="text_last"><?php echo $sql_last_dates_ru['text'] ?></div>
                                    </a>
                                </div>

                        <?php
                            }
                        }
                        ?>


                    </div>
                </div>


                <div class="pagination-div mt-3">
                    <?php
                    for ($i = 1; $i <= $numPages_all; $i++) {
                        if ($pageIndex == $i || (!$pageIndex && $i == 1)) {
                            echo "<a href='newsAll.php?pageIndex=" . $i . "' class='activePage'> " . $i . " </a>";
                        } else {
                            echo "<a href='newsAll.php?pageIndex=" . $i . "'> " . $i . " </a>";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>


    <?php
    include "footer.php";
    ?>


</body>

</html>