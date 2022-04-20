<?php
include "../db_configuration/configuration.php";
include "../header.php";
?>
<link rel="stylesheet" href="../css/service-details.css">

<title>Sevaberd Services</title>
</head>

<body>
    <?php
    include "navbar.php";
    include "service_details_process_sql.php";
    ?>
    <div class="service_details">
        <?php
            if($lang_menu=='am'){
        ?>
        <div class="img_service" style='background-image:url("../img_admin/<?php echo $image_am; ?>")'></div>
        <h2 class="service_title"><?php echo $title_am; ?></h2>
        <p class="service_text"><?php echo $text_am; ?></p>
        <a href='services.php'>
            <button class="back_services">
                Վերադադնալ
            </button>
        </a>
        <?php
        }
        ?>

        <?php
            if($lang_menu=='en'){
        ?>
        <div class="img_service" style='background-image:url("../img_admin/<?php echo $image_en; ?>")'></div>
        <h2 class="service_title"><?php echo $title_en; ?></h2>
        <p class="service_text"><?php echo $text_en; ?></p>
        <a href='services.php'>
            <button class="back_services">
                Back
            </button>
        </a>
        <?php
        }
        ?>

        <?php
            if($lang_menu=='ru'){
        ?>
        <div class="img_service" style='background-image:url("../img_admin/<?php echo $image_ru; ?>")'></div>
        <h2 class="service_title"><?php echo $title_ru; ?></h2>
        <p class="service_text"><?php echo $text_ru; ?></p>
        <a href='services.php'>
            <button class="back_services">
                Назад
            </button>
        </a>
        <?php
        }
        ?>
    </div>
    </div>
    <?php
    include "footer.php";
    ?>
</body>