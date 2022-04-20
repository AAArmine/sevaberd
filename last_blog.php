<?php
include "../db_configuration/configuration.php";
include "../header.php";
$blogId = isset($_GET['id']) ? $_GET['id'] : '';

$sql_blog_am= "SELECT * from blog_am WHERE id='".$blogId."'";
$result_blog_am = mysqli_query($con, $sql_blog_am);

$sql_blog_en= "SELECT * from blog_en WHERE id='".$blogId."'";
$result_blog_en = mysqli_query($con, $sql_blog_en);


$sql_blog_ru= "SELECT * from blog_ru WHERE id='".$blogId."'";
$result_blog_ru = mysqli_query($con, $sql_blog_ru);


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
    <div class="main_cont">

    <?php
if($lang_menu == "am"){
while ($sql_blog_am = mysqli_fetch_assoc($result_blog_am)) {
?>
<div class="content_blog">
<div class="img_main1" style="background-image: url('../img_admin/<?php echo $sql_blog_am['image'] ?>');">
    <div class="category_abs1">
    <span class="vertically_center"> <?php echo $sql_blog_am['category'] ?></span>
    <!-- Historical and cultural places -->
    </div>
    <div class="category_abs1_triangle"></div>
</div>
<div class="mt-2">
    <div class='date_blog'><?php echo $sql_blog_am['date_current'] ?></div>
    <h3><?php echo $sql_blog_am['title'] ?></h3>
    <div >
    <?php echo $sql_blog_am['text'] ?>

    </div>
</div>
</div>
<?php
}
}
if($lang_menu == "en"){
while ($sql_blog_en = mysqli_fetch_assoc($result_blog_en)) {
    ?>
        <div class="content_blog">
            <div class="img_main1" style="background-image: url('../img_admin/<?php echo $sql_blog_en['image'] ?>');">
                <div class="category_abs1">
                <span class="vertically_center">
                <?php echo $sql_blog_en['category'] ?>
                </span>
                </div>
                <div class="category_abs1_triangle"></div>
            </div>
            <div class="mt-2">
                <div class='date_blog'><?php echo $sql_blog_en['date_current'] ?></div>
                <h3><?php echo $sql_blog_en['title'] ?></h3>
                <div >
                <?php echo $sql_blog_en['text'] ?>

                </div>
            </div>
        </div>
        <?php
            }
        }
if($lang_menu == "ru"){
while ($sql_blog_ru = mysqli_fetch_assoc($result_blog_ru)) {
    ?>
        <div class="content_blog">
            <div class="img_main1" style="background-image: url('../img_admin/<?php echo $sql_blog_ru['image'] ?>');">
                <div class="category_abs1">
                <span class="vertically_center">
                <?php echo $sql_blog_ru['category'] ?>
                </span>
                <!-- Historical and cultural places -->
                </div>
                <div class="category_abs1_triangle"></div>
            </div>
            <div class="mt-2">
                <div class='date_blog'><?php echo $sql_blog_ru['date_current'] ?></div>
                <h3><?php echo $sql_blog_ru['title'] ?></h3>
                <div class="text_blog">
                <?php echo $sql_blog_ru['text'] ?>

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