<?php

include "../db_configuration/configuration.php";
include "../photos_process_sql.php";
include "../header.php";
// include "../txt_gallery.php";

?>
<link rel="stylesheet" href="../css/gallery_photos.css">


<title>Sevaberd Gallery</title>
</head>

<body>
    <?php
    include "navbar.php";
    ?>

    <div class="photos_sec mb-5 pb-5" id="gal_photo_sec">
        <?php include "galleryNav.php"?>
        <div class="tab-content">

            <!-- category1 -->
            <div class="tab-pane fade show active" id="category_1" role="tabpanel" aria-labelledby="home-tab">
                <div class="photos_flex d-flex justify-content-around">
                    <?php 
                    
                        while($sql_photos_cat1 = mysqli_fetch_assoc($result_photos_cat1)){
                    ?>
                    <div class="photo_item" style="background-image: url('../photos/<?php echo $sql_photos_cat1['name'] ?>');">
                    </div>
                    <?php
                        }
                    ?>
                </div>
            

                <div class="pagination-div mt-3">
                    <?php
                    for ($i = 1; $i <= $numPages_cat1; $i++) {
                        if ($pageIndex == $i || (!$pageIndex && $i==1)) {
                            echo "<a href='gallery_photo_rest.php?pageIndex=" . $i . "' class='activePage'> " . $i . " </a>";
                        } else {
                            echo "<a href='gallery_photo_rest.php?pageIndex=" . $i . "'> " . $i . " </a>";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <script>
        var url_string = window.location;
        var url = new URL(url_string);
        var name = url.searchParams.get("pageIndex");
    </script>

    <?php
    include "footer.php";
    ?>


</body>
</html>