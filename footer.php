<?php
include "txtfooter.php"
?>
<div class="footerBorder"></div>
<div class="d-flex footerFlex">
    <div class="footerFlex-item1">
        <a href="index.php">
            <img src="../Icons/logo.png" alt="logo" class='footerlogo'>
        </a>

        <div class="contact-footer-social">
            <img src="../Icons/twitter-black.png" alt="" class='social-images'>
            <img src="../Icons/facebook-black.png" alt="" class='social-images'>
            <img src="../Icons/instagram-black.png" alt="" class='social-images'>
        </div>
    </div>

    <?php
    if ($lang_menu == "am") {
        echo FOOTER_LINKS_AM;
    }
    if ($lang_menu == "en") {
        echo FOOTER_LINKS_EN;
    }
    if ($lang_menu == "ru") {
        echo FOOTER_LINKS_RU;
    }
    ?>
</div>
<div class="copyright">
    <span class="footerspan">
        <?php
        if ($lang_menu == "am") {
            echo "Կայքը նախագծել և պատրաստել է  <a href='https://www.cybertech.am/'>«CyberTech»</a> ընկերությունը։ </span> <i class='far fa-copyright'></i> «Սթարթափ Կենտրոն» ՀԿ, " . date("Y");
        }
        if ($lang_menu == "en") {
            echo "Developing by  <a href='https://www.cybertech.am/'>CyberTech</a></span> <i class='far fa-copyright'></i> 'Start up center' NGO " . date("Y");
        }
        if ($lang_menu == "ru") {
            echo "Дизайн и подготовка сайта  <a href='https://www.cybertech.am/'>CyberTech</a></span> <i class='far fa-copyright'></i> НПО \"Стартап Центр\" " . date("Y");
        }
        ?>
    </span>
</div>
<script src='../js/footer.js'></script>