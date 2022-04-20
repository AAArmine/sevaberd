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
                            while ($sql_news_cat2_am = mysqli_fetch_assoc($result_news_cat2_am)) {
                        ?>
                                <div class="blog_flex_item1_content">
                                    <div class="img_main" style="background-image: url('../img_admin/<?php echo $sql_news_cat2_am['image'] ?>');">
                                        <div class="category_abs">
                                            <span class="vertically_center">
                                                <?php echo $sql_news_cat2_am['category']; ?>
                                            </span>
                                        </div>
                                        <div class="category_abs_triangle"></div>
                                    </div>
                                    <div class="content_blog">
                                        <div class='date_blog'><?php echo $sql_news_cat2_am['date_current'] ?></div>
                                        <h3><?php echo $sql_news_cat2_am['title'] ?></h3>
                                        <div class="text_blog">
                                            <?php echo $sql_news_cat2_am['text'] ?>
                                        </div>
                                        <a href="last_news.php?id=<?php echo $sql_news_cat2_am['id'] ?>">
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
                            while ($sql_news_cat2_en = mysqli_fetch_assoc($result_news_cat2_en)) {
                            ?>
                                <div class="blog_flex_item1_content">
                                    <div class="img_main" style="background-image: url('../img_admin/<?php echo $sql_news_cat2_en['image'] ?>');">
                                        <div class="category_abs">
                                            <span class="vertically_center">
                                                <?php echo $sql_news_cat2_en['category']; ?>
                                            </span>
                                        </div>
                                        <div class="category_abs_triangle"></div>
                                    </div>
                                    <div class="content_blog">
                                        <div class='date_blog'><?php echo $sql_news_cat2_en['date_current'] ?></div>
                                        <h3><?php echo $sql_news_cat2_en['title'] ?></h3>
                                        <div class="text_blog">
                                            <?php echo $sql_news_cat2_en['text'] ?>
                                        </div>
                                        <a href="last_news.php?id=<?php echo $sql_news_cat2_en['id'] ?>">
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
                            while ($sql_news_cat2_ru = mysqli_fetch_assoc($result_news_cat2_ru)) {
                            ?>
                                <div class="blog_flex_item1_content">
                                    <div class="img_main" style="background-image: url('../img_admin/<?php echo $sql_news_cat2_ru['image'] ?>');">
                                        <div class="category_abs">
                                            <span class="vertically_center">
                                                <?php echo $sql_news_cat2_ru['category']; ?>
                                            </span>
                                        </div>
                                        <div class="category_abs_triangle"></div>
                                    </div>
                                    <div class="content_blog">
                                        <div class='date_blog'><?php echo $sql_news_cat2_ru['date_current'] ?></div>
                                        <h3><?php echo $sql_news_cat2_ru['title'] ?></h3>
                                        <div class="text_blog">
                                            <?php echo $sql_news_cat2_ru['text'] ?>
                                        </div>
                                        <a href="last_news.php?id=<?php echo $sql_news_cat2_ru['id'] ?>">
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

                    </div>
                </div>


                <div class="pagination-div mt-3">
                    <?php
                    for ($i = 1; $i <= $numPages_cat2; $i++) {
                        if ($pageIndex2 == $i || (!$pageIndex2 && $i == 1)) {
                            echo "<a href='newsKotayk.php?pageIndex2=" . $i . "' class='activePage'> " . $i . " </a>";
                        } else {
                            echo "<a href='newsKotayk.php?pageIndex2=" . $i . "'> " . $i . " </a>";
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