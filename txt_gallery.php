<?php
include('lang_config.php');
define("TABNAV_AM", '
<li class="nav-item">
<a class="nav-link 'if(str_starts_with($file_name, "gallery_photo_rest.php")){echo "active";}'  href="gallery_photo_rest.php">
Ռեստորան
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="gallery_photo_guest.php">
Հյուրատուն
</a>
</li>
<li class="nav-item">
<a class="nav-link" data-toggle="tab" href="#category_3" role="tab" aria-controls="profile" aria-selected="false">
Քայլարշավներ
</a>
</li>
<li class="nav-item">
<a class="nav-link" data-toggle="tab" href="#category_4" role="tab" aria-controls="profile" aria-selected="false">
Լեռնագնացություն
</a>
</li>
<li class="nav-item">
<a class="nav-link" data-toggle="tab" href="#category_5" role="tab" aria-controls="profile" aria-selected="false">
Լեռնահեծանվային տուրեր
</a>
</li>
<li class="nav-item">
<a class="nav-link" data-toggle="tab" href="#category_6" role="tab" aria-controls="profile" aria-selected="false">
Դահուկային տուրեր
</a>
</li>
<li class="nav-item">
<a class="nav-link" data-toggle="tab" href="#category_7" role="tab" aria-controls="profile" aria-selected="false">
Կվադրոցիկլ
</a>
</li>
<li class="nav-item">
<a class="nav-link" data-toggle="tab" href="#category_8" role="tab" aria-controls="profile" aria-selected="false">
Ձիավարություն
</a>
</li>
');

define("TABNAV_EN", '
<li class="nav-item">
<a class="nav-link active" data-toggle="tab" href="#category_1" role="tab" aria-controls="home" aria-selected="true">
Restaurant
</a>
</li>
<li class="nav-item">
<a class="nav-link" data-toggle="tab" href="#category_2" role="tab" aria-controls="profile" aria-selected="false">
Guesthouse
</a>
</li>
<li class="nav-item">
<a class="nav-link" data-toggle="tab" href="#category_3" role="tab" aria-controls="profile" aria-selected="false">
Hiking
</a>
</li>
<li class="nav-item">
<a class="nav-link" data-toggle="tab" href="#category_4" role="tab" aria-controls="profile" aria-selected="false">
Mountaineering
</a>
</li>
<li class="nav-item">
<a class="nav-link" data-toggle="tab" href="#category_5" role="tab" aria-controls="profile" aria-selected="false">
Mountain biking tours
</a>
</li>
<li class="nav-item">
<a class="nav-link" data-toggle="tab" href="#category_6" role="tab" aria-controls="profile" aria-selected="false">
Ski tours
</a>
</li>
<li class="nav-item">
<a class="nav-link" data-toggle="tab" href="#category_7" role="tab" aria-controls="profile" aria-selected="false">
Quad byke/ATV
</a>
</li>
<li class="nav-item">
<a class="nav-link" data-toggle="tab" href="#category_8" role="tab" aria-controls="profile" aria-selected="false">
Riding
</a>
</li>
');
define("TABNAV_RU", '
<li class="nav-item">
<a class="nav-link active" data-toggle="tab" href="#category_1" role="tab" aria-controls="home" aria-selected="true">
Ресторан
</a>
</li>
<li class="nav-item">
<a class="nav-link" data-toggle="tab" href="#category_2" role="tab" aria-controls="profile" aria-selected="false">
Гостевой дом
</a>
</li>
<li class="nav-item">
<a class="nav-link" data-toggle="tab" href="#category_3" role="tab" aria-controls="profile" aria-selected="false">
Пеший туризм
</a>
</li>
<li class="nav-item">
<a class="nav-link" data-toggle="tab" href="#category_4" role="tab" aria-controls="profile" aria-selected="false">
Альпинизм
</a>
</li>
<li class="nav-item">
<a class="nav-link" data-toggle="tab" href="#category_5" role="tab" aria-controls="profile" aria-selected="false">
Туры на горных велосипедах
</a>
</li>
<li class="nav-item">
<a class="nav-link" data-toggle="tab" href="#category_6" role="tab" aria-controls="profile" aria-selected="false">
Лыжные туры
</a>
</li>
<li class="nav-item">
<a class="nav-link" data-toggle="tab" href="#category_7" role="tab" aria-controls="profile" aria-selected="false">
Квадроцикл
</a>
</li>
<li class="nav-item">
<a class="nav-link" data-toggle="tab" href="#category_8" role="tab" aria-controls="profile" aria-selected="false">
Верховая езда
</a>
</li>
');


            
            
            