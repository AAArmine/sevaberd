<?php

include "../db_configuration/configuration.php";
include "../sp_offers_process_sql.php";
include "../header.php";
?>
<link rel="stylesheet" href="../css/sp_offers.css">


<title>Sevaberd Services</title>
</head>

<body>
    <?php
    include "navbar.php";
    ?>
    <div class="caption-offers">
        <h3 class="special-offers-caption">
            <?php
            if($lang_menu=="am"){
                echo "Հատուկ առաջարկներ";
            }
            if($lang_menu=="en"){
                echo "Special Offers";
            }
            if($lang_menu=="ru"){
                echo "Специальные предложения";
            }
            ?>
        </h3>
    </div>

    <div class="offers_sec mb-5 pb-5">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#all_offers" role="tab" aria-controls="home" aria-selected="true">
                <?php
                    if($lang_menu=="am"){
                        echo "Բոլորը";
                    }
                    if($lang_menu=="en"){
                        echo "All";
                    }
                    if($lang_menu=="ru"){
                        echo "Все";
                    }
                ?>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#company_offers" role="tab" aria-controls="profile" aria-selected="false">
                <?php
                    if($lang_menu=="am"){
                        echo "Կազմակերպություններին";
                    }
                    if($lang_menu=="en"){
                        echo "For companies";
                    }
                    if($lang_menu=="ru"){
                        echo "Для компаний";
                    }
                ?>
                </a>
            </li>
        </ul>
        <div class="tab-content">

        <!-- ALL OFFERS -->
        <div class="tab-pane fade show active" id="all_offers" role="tabpanel" aria-labelledby="home-tab">
            <?php 
            if($lang_menu=='am'){
                while($sql_special_offers_am = mysqli_fetch_assoc($result_special_offers_am)){
            ?>
            <div class="offer_img" style="background-image: url('../img_admin/<?php echo $sql_special_offers_am['image_offers']?>');">
                <div class="offer_text">
                    <h4><?php echo $sql_special_offers_am['title_offers']?></h4>
                    <p> <?php echo $sql_special_offers_am['text_offers']?></p>
                    <a href='offers_details.php?offer_id=<?php echo $sql_special_offers_am['id']?>'>
                        <button class="see_more_offers">See More</button>
                    </a>
                    
                </div>
            </div>
            <?php
                }
            }
            ?>
            <?php 
            if($lang_menu=='en'){
                while($sql_special_offers_en = mysqli_fetch_assoc($result_special_offers_en)){
            ?>
            <div class="offer_img" style="background-image: url('../img_admin/<?php echo $sql_special_offers_en['image_offers']?>');">
                <div class="offer_text">
                    <h4><?php echo $sql_special_offers_en['title_offers']?></h4>
                    <p> <?php echo $sql_special_offers_en['text_offers']?></p>
                    <a href='offers_details.php?offer_id=<?php echo $sql_special_offers_en['id']?>'>
                        <button class="see_more_offers">See More</button>
                    </a>
                    
                </div>
            </div>
            <?php
                }
            }
            ?>

            <?php 
            if($lang_menu=='ru'){
                while($sql_special_offers_ru = mysqli_fetch_assoc($result_special_offers_ru)){
            ?>
            <div class="offer_img" style="background-image: url('../img_admin/<?php echo $sql_special_offers_ru['image_offers']?>');">
                <div class="offer_text">
                    <h4><?php echo $sql_special_offers_ru['title_offers']?></h4>
                    <p> <?php echo $sql_special_offers_ru['text_offers']?></p>
                    <a href='offers_details.php?offer_id=<?php echo $sql_special_offers_ru['id']?>'>
                        <button class="see_more_offers">See More</button>
                    </a>
                    
                </div>
            </div>
            <?php
                }
            }
            ?>
        </div>

        <!-- COMPANY OFFERS -->
        <div class="tab-pane fade" id="company_offers" role="tabpanel" aria-labelledby="profile-tab">
        <?php 
            if($lang_menu=='am'){
                while($sql_special_offers_comp_am = mysqli_fetch_assoc($result_special_offers_comp_am)){
            ?>
            <div class="offer_img" style="background-image: url('../img_admin/<?php echo $sql_special_offers_comp_am['image_offers']?>');">
                <div class="offer_text">
                    <h4><?php echo $sql_special_offers_comp_am['title_offers']?></h4>
                    <p> <?php echo $sql_special_offers_comp_am['text_offers']?></p>
                    <a href='offers_details.php?offer_id=<?php echo $sql_special_offers_comp_am['id']?>'>
                        <button class="see_more_offers">See More</button>
                    </a>
                    
                </div>
            </div>
            <?php
                }
            }
            ?>
            <?php 
            if($lang_menu=='en'){
                while($sql_special_offers_comp_en = mysqli_fetch_assoc($result_special_offers_comp_en)){
            ?>
            <div class="offer_img" style="background-image: url('../img_admin/<?php echo $sql_special_offers_comp_en['image_offers']?>');">
                <div class="offer_text">
                    <h4><?php echo $sql_special_offers_comp_en['title_offers']?></h4>
                    <p> <?php echo $sql_special_offers_comp_en['text_offers']?></p>
                    <a href='offers_details.php?offer_id=<?php echo $sql_special_offers_comp_en['id']?>'>
                        <button class="see_more_offers">See More</button>
                    </a>
                    
                </div>
            </div>
            <?php
                }
            }
            ?>

            <?php 
            if($lang_menu=='ru'){
                while($sql_special_offers_comp_ru = mysqli_fetch_assoc($result_special_offers_comp_ru)){
            ?>
            <div class="offer_img" style="background-image: url('../img_admin/<?php echo $sql_special_offers_comp_ru['image_offers']?>');">
                <div class="offer_text">
                    <h4><?php echo $sql_special_offers_comp_ru['title_offers']?></h4>
                    <p> <?php echo $sql_special_offers_comp_ru['text_offers']?></p>
                    <a href='offers_details.php?offer_id=<?php echo $sql_special_offers_comp_ru['id']?>'>
                        <button class="see_more_offers">See More</button>
                    </a>
                    
                </div>
            </div>
            <?php
                }
            }
            ?>
        </div>
    </div>

    </div>

    <?php
    include "footer.php";
    ?>


</body>
</html>