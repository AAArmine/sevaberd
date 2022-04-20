<?php

include "../db_configuration/configuration.php";
include "../services_process_sql.php";
include "../header.php";
?>
<link rel="stylesheet" href="../css/services.css">


<title>Sevaberd Services</title>
</head>

<body>
    <?php
    include "navbar.php";
    ?>
    <div class="services-sec">
        <div class="servicess_caption">
            <?php
            if($lang_menu=="am"){
                echo "  Ծառայություններ";
            }
            if($lang_menu=="en"){
                echo "Services";
            }
            if($lang_menu=="ru"){
                echo "Услуги";
            }
            ?>

        </div>
        <div class="services_flex d-flex justify-content-around">
            <?php 
            if($lang_menu=='am'){
                while($sql_services_am = mysqli_fetch_assoc($result_services_am)){
            ?>
            <div class="services_item">
                <div class="services_item_img" style='background-image:url("../img_admin/<?php echo $sql_services_am['image']?>")'></div>
                <div class="services_item_title"><?php echo $sql_services_am['title']?></div>
                <div class="services_item_description"><?php echo $sql_services_am['text']?></div>
                <a href='service_details.php?service_id=<?php echo $sql_services_am['id']?>'>
                    <button class="see_more_services">See More</button>
                </a>
            </div>
            <?php
                }
            }
            ?>

            <?php 
            if($lang_menu=='en'){
                while($sql_services_en = mysqli_fetch_assoc($result_services_en)){
            ?>
            <div class="services_item">
                <div class="services_item_img" style='background-image:url("../img_admin/<?php echo $sql_services_en['image']?>")'></div>
                <div class="services_item_title"><?php echo $sql_services_en['title']?></div>
                <div class="services_item_description"><?php echo $sql_services_en['text']?></div>
                <a href='service_details.php?service_id=<?php echo $sql_services_en['id']?>'>
                    <button class="see_more_services">See More</button>
                </a>
            </div>
            <?php
                }
            }
            ?>
            <?php 
            if($lang_menu=='ru'){
                while($sql_services_ru = mysqli_fetch_assoc($result_services_ru)){
            ?>
            <div class="services_item">
                <div class="services_item_img" style='background-image:url("../img_admin/<?php echo $sql_services_ru['image']?>")'></div>
                <div class="services_item_title"><?php echo $sql_services_ru['title']?></div>
                <div class="services_item_description"><?php echo $sql_services_ru['text']?></div>
                <a href='service_details.php?service_id=<?php echo $sql_services_ru['id']?>'>
                    <button class="see_more_services">See More</button>
                </a>
            </div>
            <?php
                }
            }
            ?>
        </div>

    </div>

    <?php
    include "footer.php";
    ?>


</body>
</html>