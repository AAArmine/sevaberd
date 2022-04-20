<?php

include "../db_configuration/configuration.php";
include "../blog_process_sql.php";
include "../header.php";
// include "../txt_gallery.php";

?>
<script>
    var url_string = window.location;
    var url = new URL(url_string);
    var name = url.searchParams.get("pageIndex");
</script>

<link rel="stylesheet" href="../css/blogNews.css">


<title>Sevaberd Blog</title>
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
                    echo 'Բլոգ';
                }
                if ($lang_menu == "en") {
                    echo 'Blog';
                }
                if ($lang_menu == "ru") {
                    echo 'Блог';
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
            <?php include "blogNav.php" ?>

            <!-- category2 -->
            <div class="tab-pane fade show active" id="category_2" role="tabpanel" aria-labelledby="home-tab">
                <div class="blog_flex d-flex justify-content-between">
                    <div class="blog_flex_item1">
                        <?php
                        if ($lang_menu == "am") {
                            while ($sql_blog_cat4_am = mysqli_fetch_assoc($result_blog_cat4_am)) {
                        ?>
                                <div class="blog_flex_item1_content">
                                    <div class="img_main" style="background-image: url('../img_admin/<?php echo $sql_blog_cat4_am['image'] ?>');">
                                        <div class="category_abs">
                                            <span class="vertically_center">
                                                <?php echo $sql_blog_cat4_am['category'] ?>
                                            </span>
                                        </div>
                                        <div class="category_abs_triangle"></div>
                                    </div>
                                    <div class="content_blog">
                                        <div class='date_blog'><?php echo $sql_blog_cat4_am['date_current'] ?></div>
                                        <h3><?php echo $sql_blog_cat4_am['title'] ?></h3>
                                        <div class="text_blog">
                                            <?php echo $sql_blog_cat4_am['text'] ?>
                                        </div>
                                        <a href="last_blog.php?id=<?php echo $sql_blog_cat4_am['id'] ?>">
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
                            while ($sql_blog_cat4_en = mysqli_fetch_assoc($result_blog_cat4_en)) {
                            ?>
                                <div class="blog_flex_item1_content">
                                    <div class="img_main" style="background-image: url('../img_admin/<?php echo $sql_blog_cat4_en['image'] ?>');">
                                        <div class="category_abs">
                                            <span class="vertically_center">
                                                <?php echo $sql_blog_cat4_en['category'] ?>
                                            </span>
                                        </div>
                                        <div class="category_abs_triangle"></div>
                                    </div>
                                    <div class="content_blog">
                                        <div class='date_blog'><?php echo $sql_blog_cat4_en['date_current'] ?></div>
                                        <h3><?php echo $sql_blog_cat4_en['title'] ?></h3>
                                        <div class="text_blog">
                                            <?php echo $sql_blog_cat4_en['text'] ?>
                                        </div>
                                        <a href="last_blog.php?id=<?php echo $sql_blog_cat4_en['id'] ?>">
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
                            while ($sql_blog_cat4_ru = mysqli_fetch_assoc($result_blog_cat4_ru)) {
                            ?>
                                <div class="blog_flex_item1_content">
                                    <div class="img_main" style="background-image: url('../img_admin/<?php echo $sql_blog_cat4_ru['image'] ?>');">
                                        <div class="category_abs">
                                            <span class="vertically_center">
                                                <?php echo $sql_blog_cat4_ru['category'] ?>
                                            </span>
                                        </div>
                                        <div class="category_abs_triangle"></div>
                                    </div>
                                    <div class="content_blog">
                                        <div class='date_blog'><?php echo $sql_blog_cat4_ru['date_current'] ?></div>
                                        <h3><?php echo $sql_blog_cat4_ru['title'] ?></h3>
                                        <div class="text_blog">
                                            <?php echo $sql_blog_cat4_ru['text'] ?>
                                        </div>
                                        <a href="last_blog.php?id=<?php echo $sql_blog_cat4_ru['id'] ?>">
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
                    for ($i = 1; $i <= $numPages_cat4; $i++) {
                        if ($pageIndex4 == $i || (!$pageIndex4 && $i == 1)) {
                            echo "<a href='blogCultural.php?pageIndex4=" . $i . "' class='activePage'> " . $i . " </a>";
                        } else {
                            echo "<a href='blogCultural.php?pageIndex4=" . $i . "'> " . $i . " </a>";
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