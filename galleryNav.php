<ul class="nav nav-tabs" id="myTab" role="tablist">
            <?php
                if($lang_menu=="am"){
                    ?>
                    <li class="nav-item">
                    <a class="nav-link <?php 
                    if(substr($file_name, 0, 18)=="gallery_photo_rest"){
                        echo "active";}?>"  href="gallery_photo_rest.php">
                    Ռեստորան
                    </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link <?php 
                    if(substr($file_name, 0, 19)=="gallery_photo_guest"){
                        echo "active";}?>"  href="gallery_photo_guest.php">
                    Հյուրատուն
                    </a>
                    
                    </li>
                    <li class="nav-item">
                    <a class="nav-link <?php 
                    if(substr($file_name, 0, 20)=="gallery_photo_hiking"){
                        echo "active";}?>"  href="gallery_photo_hiking.php">
                    Քայլարշավներ
                    </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link <?php 
                    if(substr($file_name, 0, 20)=="gallery_photo_mounta"){
                        echo "active";}?>"  href="gallery_photo_mountaineering.php">
                    Լեռնագնացություն
                    </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link <?php 
                    if(substr($file_name, 0, 25)== "gallery_photo_mountBiking"){
                        echo "active";}?>"  href="gallery_photo_mountBiking.php">
                    Լեռնահեծանվային տուրեր
                    </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link <?php 
                    if(substr($file_name, 0, 17)== "gallery_photo_ski"){
                        echo "active";}?>"  href="gallery_photo_ski.php">
                    Դահուկային տուրեր
                    </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link <?php 
                    if(substr($file_name, 0, 18)=="gallery_photo_quad"){
                        echo "active";}?>"  href="gallery_photo_quad.php">
                    Կվադրոցիկլ
                    </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link <?php 
                    if(substr($file_name, 0, 20)== "gallery_photo_riding"){
                        echo "active";}?>"  href="gallery_photo_riding.php">
                    Ձիավարություն
                    </a>
                    </li>
                <?php
                }

                if($lang_menu=="en"){
                    ?>
                    <li class="nav-item">
                    <a class="nav-link <?php 
                    if(substr($file_name, 0, 18)== "gallery_photo_rest"){
                        echo "active";}?>"  href="gallery_photo_rest.php">
                    Restaurant
                    </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link <?php 
                    if(substr($file_name, 0, 19)== "gallery_photo_guest"){
                        echo "active";}?>"  href="gallery_photo_guest.php">
                    Guesthouse
                    </a>
                    
                    </li>
                    <li class="nav-item">
                    <a class="nav-link <?php 
                    if(substr($file_name, 0, 20)== "gallery_photo_hiking"){
                        echo "active";}?>"  href="gallery_photo_hiking.php">
                    Hiking
                    </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link <?php 
                    if(substr($file_name, 0, 28)=="gallery_photo_mountaineering"){
                        echo "active";}?>"  href="gallery_photo_mountaineering.php">
                    Mountaineering
                    </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link <?php 
                    if(substr($file_name, 0, 25)== "gallery_photo_mountBiking"){
                        echo "active";}?>"  href="gallery_photo_mountBiking.php">
                    Mountain biking tours
                    </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link <?php 
                    if(substr($file_name, 0, 17)== "gallery_photo_ski"){
                        echo "active";}?>"  href="gallery_photo_ski.php">
                    Ski tours
                    </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link <?php 
                    if(substr($file_name, 0, 18)== "gallery_photo_quad"){
                        echo "active";}?>"  href="gallery_photo_quad.php">
                    Quad byke/ATV
                    </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link <?php 
                    if(substr($file_name, 0, 20)=="gallery_photo_riding"){
                        echo "active";}?>"  href="gallery_photo_riding.php">
                    Riding
                    </a>
                    </li>
                <?php
                }
                if($lang_menu=="ru"){
                    ?>
                    <li class="nav-item">
                    <a class="nav-link <?php 
                    if(substr($file_name, 0, 18)== "gallery_photo_rest"){
                        echo "active";}?>"  href="gallery_photo_rest.php">
                    Ресторан
                    </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link <?php 
                    if(substr($file_name, 0, 19)== "gallery_photo_guest"){
                        echo "active";}?>"  href="gallery_photo_guest.php">
                    Гостевой дом
                    </a>
                    
                    </li>
                    <li class="nav-item">
                    <a class="nav-link <?php 
                    if(substr($file_name, 0, 20)== "gallery_photo_hiking"){
                        echo "active";}?>"  href="gallery_photo_hiking.php">
                    Пеший туризм
                    </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link <?php 
                    if(substr($file_name, 0, 28)=="gallery_photo_mountaineering"){
                        echo "active";}?>"  href="gallery_photo_mountaineering.php">
                    Альпинизм
                    </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link <?php 
                    if(substr($file_name, 0, 25)=="gallery_photo_mountBiking"){
                        echo "active";}?>"  href="gallery_photo_mountBiking.php">
                    Туры на горных велосипедах
                    </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link <?php 
                    if(substr($file_name, 0, 17)== "gallery_photo_ski"){
                        echo "active";}?>"  href="gallery_photo_ski.php">
                    Лыжные туры
                    </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link <?php 
                    if(substr($file_name, 0, 18)== "gallery_photo_quad"){
                        echo "active";}?>"  href="gallery_photo_quad.php">
                    Квадроцикл
                    </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link <?php 
                    if(substr($file_name, 0, 20)== "gallery_photo_riding"){
                        echo "active";}?>"  href="gallery_photo_riding.php">
                    Верховая езда
                    </a>
                    </li>
                <?php
                }
                ?>
        </ul>