<?php

include "../db_configuration/configuration.php";
include "../videos_process_sql.php";
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
        <?php include "galleryNav_video.php"?>
        <div class="tab-content">

            <!-- category5 -->
            <div class="tab-pane fade show active" id="category_5" role="tabpanel" aria-labelledby="home-tab">
                <div class="photos_flex d-flex justify-content-around">
                    <?php 
                    
                        while($sql_videos_cat5 = mysqli_fetch_assoc($result_videos_cat5)){
                    ?>
                    <div><video width="320" height="240" src='../videos/<?php echo $sql_videos_cat5['name']; ?>' controls>
                    
                    </div>
                    <?php
                        }
                    ?>
                </div>
            

                <div class="pagination-div mt-3">
                    <?php
                    for ($i = 1; $i <= $numPages_cat5; $i++) {
                        if ($pageIndex5 == $i || (!$pageIndex5 && $i==1)) {
                            echo "<a href='gallery_video_mountBiking.php?pageIndex5=" . $i . "' class='activePage'> " . $i . " </a>";
                        } else {
                            echo "<a href='gallery_video_mountBiking.php?pageIndex5=" . $i . "'> " . $i . " </a>";
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