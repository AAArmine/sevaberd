<!-- ======= Carusel ======= -->
<section id="testimonials_staff" class="w-100 industries-slide-section">
    <div class="container">
        <div class="row">
            <div class="container-carusel">
                <div class="owl-carousel staff-carousel" id="owl-carousel">
                    <?php
                    while ($sql_staff_ru = mysqli_fetch_assoc($result_staff_ru)) {
                    ?>
                        <div class="testimonial-item">
                            <div class="row-d">
                                <div class="opinionImgCircle" style="background-image: url('../img_admin/<?php echo $sql_staff_ru['image_st'] ?>');">
                                </div>
                                <div class="opinions_text_item">
                                    <div class="opinions_name_div">
                                        <?php
                                        echo $sql_staff_ru['name_st'];
                                        ?>
                                    </div>
                                    <div class="opinions_name_text">
                                        <?php
                                        echo $sql_staff_ru['position'];
                                        ?>
                                    </div>


                                </div>

                            </div>

                        </div>
                    <?php
                    }
                    ?>



                </div>
            </div>
        </div>
    </div>
</section>