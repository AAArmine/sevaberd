<?php
include "../db_configuration/configuration.php";
include "../header.php";
$newsId = isset($_GET['id']) ? $_GET['id'] : '';

$sql_news_am= "SELECT * from news_am WHERE id='".$newsId."'";
$result_news_am = mysqli_query($con, $sql_news_am);

$sql_news_en= "SELECT * from news_en WHERE id='".$newsId."'";
$result_news_en = mysqli_query($con, $sql_news_en);


$sql_news_ru= "SELECT * from news_ru WHERE id='".$newsId."'";
$result_news_ru = mysqli_query($con, $sql_news_ru);


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
    <div class="main_cont">

    <?php
if($lang_menu == "am"){
while ($sql_news_am = mysqli_fetch_assoc($result_news_am)) {
?>
<div class="content_blog">
<div class="img_main1" style="background-image: url('../img_admin/<?php echo $sql_news_am['image'] ?>');">
    <div class="category_abs1">
    <span class="vertically_center"> <?php echo $sql_news_am['category'] ?></span>
    <!-- Historical and cultural places -->
    </div>
    <div class="category_abs1_triangle"></div>
</div>
<div class="mt-2">
    <div class='date_blog'><?php echo $sql_news_am['date_current'] ?></div>
    <h3><?php echo $sql_news_am['title'] ?></h3>
    <div >
    <?php echo $sql_news_am['text'] ?>

    </div>
</div>
</div>
<?php
}
}
if($lang_menu == "en"){
while ($sql_news_en = mysqli_fetch_assoc($result_news_en)) {
    ?>
        <div class="content_blog">
            <div class="img_main1" style="background-image: url('../img_admin/<?php echo $sql_news_en['image'] ?>');">
                <div class="category_abs1">
                <span class="vertically_center">
                <?php echo $sql_news_en['category'] ?>
                </span>
                </div>
                <div class="category_abs1_triangle"></div>
            </div>
            <div class="mt-2">
                <div class='date_blog'><?php echo $sql_news_en['date_current'] ?></div>
                <h3><?php echo $sql_news_en['title'] ?></h3>
                <div >
                <?php echo $sql_news_en['text'] ?>

                </div>
            </div>
        </div>
        <?php
            }
        }
if($lang_menu == "ru"){
while ($sql_news_ru = mysqli_fetch_assoc($result_news_ru)) {
    ?>
        <div class="content_blog">
            <div class="img_main1" style="background-image: url('../img_admin/<?php echo $sql_news_ru['image'] ?>');">
                <div class="category_abs1">
                <span class="vertically_center">
                <?php echo $sql_news_ru['category'] ?>
                </span>
                <!-- Historical and cultural places -->
                </div>
                <div class="category_abs1_triangle"></div>
            </div>
            <div class="mt-2">
                <div class='date_blog'><?php echo $sql_news_ru['date_current'] ?></div>
                <h3><?php echo $sql_news_ru['title'] ?></h3>
                <div class="text_blog">
                <?php echo $sql_news_ru['text'] ?>

                </div>
            </div>
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

</html>