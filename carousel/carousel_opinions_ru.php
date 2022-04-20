<!-- ======= Carusel ======= -->
<section id="testimonials" class="w-100 industries-slide-section">
    <div class="container">
        <div class="row">
            <div class="container-carusel">
                <div class="owl-carousel birth-event-carousel" id="owl-carousel">
                    <?php
                    while ($sql_opinions_ru = mysqli_fetch_assoc($result_opinions_ru)) {
                    ?>
                        <div class="testimonial-item">
                            <div class="row-d">
                                <div class="opinionImgCircle" style="background-image: url('../img_admin/<?php echo $sql_opinions_ru['image_op'] ?>');">
                                </div>
                                <div class="opinions_text_item">
                                    <div class="opinions_name_div">
                                        <?php
                                        echo $sql_opinions_ru['name_op'];
                                        ?>
                                    </div>
                                    <div class="quoteDiv">
                                        <img src="../Icons/left-quote.png" alt="" class="quoteImg1 quoteImg">
                                    </div>
                                    <div class="opinions_name_text">
                                        <?php
                                        echo $sql_opinions_ru['opinion'];
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