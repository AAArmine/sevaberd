<?php
include "../db_configuration/configuration.php";
// restaurant special offers
$sql_rest_sp_offers_am = "SELECT * from  rest_special_offers_am";
$result_rest_sp_offers_am = mysqli_query($con, $sql_rest_sp_offers_am);

$sql_rest_sp_offers_en = "SELECT * from  rest_special_offers_en";
$result_rest_sp_offers_en = mysqli_query($con, $sql_rest_sp_offers_en);

$sql_rest_sp_offers_ru = "SELECT * from  rest_special_offers_ru";
$result_rest_sp_offers_ru = mysqli_query($con, $sql_rest_sp_offers_ru);


// special days
$sql_rest_sp_days_am = "SELECT * from  rest_special_days_am";
$result_rest_sp_days_am = mysqli_query($con, $sql_rest_sp_days_am);

$sql_rest_sp_days_en = "SELECT * from  rest_special_days_en";
$result_rest_sp_days_en = mysqli_query($con, $sql_rest_sp_days_en);

$sql_rest_sp_days_ru = "SELECT * from  rest_special_days_ru";
$result_rest_sp_days_ru = mysqli_query($con, $sql_rest_sp_days_ru);
?>
<?php include "header.php" ?>

<body class="sb-nav-fixed">

    <?php include "navMain.php" ?>
    <div id="layoutSidenav_content">


        <!-------------------- main ---------------------------->
        <main>
            <div class="container-fluid">
                <h2 class="mt-4 caption-main"> Ռեստորան հատուկ առաջարկներ</h2>
                <div class="bold-line"></div>

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Կատարել փոփոխություններ Ռեստորան հատուկ առաջարկներ
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>N</th>
                                        <th>ՎԵՐՆԱԳԻՐ(max 50 symbols)</th>
                                        <th class='wide_td'>ՏԵՔՍՏ(max 300 symbols)</th>
                                        <th>Ջնջել</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>N</th>
                                        <th>ՎԵՐՆԱԳԻՐ(max 50 symbols)</th>
                                        <th>ՏԵՔՍՏ(max 300 symbols)</th>
                                        <th>Ջնջել</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php if ((mysqli_num_rows($result_rest_sp_offers_am) > 0)) {
                                        $k = 1;
                                        while ($sql_rest_sp_offers_am = mysqli_fetch_assoc($result_rest_sp_offers_am)) {
                                    ?>
                                            <tr>
                                                <td><?php
                                                    echo $k;
                                                    ?></td>
                                                <td>
                                                    <input type='text' datatype=<?php echo $sql_rest_sp_offers_am['id']; ?> maxlength="50" class='title_offer_am form-control' value='<?php
                                                                                                                                                                                    echo $sql_rest_sp_offers_am['title_offers'];
                                                                                                                                                                                    ?>'>
                                                </td>
                                                <td>
                                                    <textarea maxlength='300' rows='6' class='text_offer_am form-control' maxlength='300'><?php
                                                                                                    echo $sql_rest_sp_offers_am['text_offers'];
                                                                                                    ?></textarea>
                                                </td>
                                                <td>
                                                    <button class="delete" data-toggle="modal" data-target="#Del-Modal_<?php echo $sql_rest_sp_offers_am['id'] ?>">Ջնջել</button>
                                                    <!-- modal-delete -->
                                                    <div id="Del-Modal_<?php echo $sql_rest_sp_offers_am['id'] ?>" class="modal fade" role="dialog">
                                                        <div class="modal-dialog">

                                                            <!-- Modal content-->
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>Դուք վստահ եք, որ ցանկանում եք ջնջել «<?php echo $sql_rest_sp_offers_am['title_offers']; ?>» առաջարկը։</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn delete-confirm" data-dismiss="modal" id='delete-<?php echo $sql_rest_sp_offers_am['id'] ?>'>Այո</button>
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Չեղարկել</button>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <!-- end modal -->
                                                </td>
                                            </tr>

                                    <?php
                                            $k++;
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                <div class="make-change">
                    <button class='button_change_dir_am spOffers_change_am'> Կատարել փոփոխություն</button>
                </div>


                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Կատարել փոփոխություններ  Reataurant Special Offers
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable2" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>N</th>
                                        <th>TITLE(max 50 symbols)</th>
                                        <th class='wide_td'>TEXT(max 300 symbols)</th>

                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>N</th>
                                        <th>TITLE(max 50 symbols)</th>
                                        <th class='wide_td'>TEXT(max 300 symbols)</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php if ((mysqli_num_rows($result_rest_sp_offers_en) > 0)) {
                                        $k = 1;
                                        while ($sql_rest_sp_offers_en = mysqli_fetch_assoc($result_rest_sp_offers_en)) {
                                    ?>
                                            <tr>
                                                <td><?php
                                                    echo $k;
                                                    ?></td>
                                                <td>
                                                    <input type='text' maxlength='50' class='title_offer_en form-control' value='<?php
                                                                                                                    echo $sql_rest_sp_offers_en['title_offers'];
                                                                                                                    ?>'>
                                                </td>
                                                <td>
                                                    <textarea maxlength='300' class='text_offer_en form-control'><?php
                                                                                                    echo $sql_rest_sp_offers_en['text_offers'];
                                                                                                    ?></textarea>
                                                </td>
                                            </tr>
                                    <?php
                                            $k++;
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
                <div class="make-change">
                    <button class='button_change_dir_am spOffers_change_en'> Կատարել փոփոխություն</button>
                </div>

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Կատարել փոփոխություններ  Ресторан Специальные предложения
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable3" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>N</th>
                                        <th>ЗАГЛАВИЕ(max 50 symbols)</th>
                                        <th class='wide_td'>ТЕКСТ(max 300 symbols)</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>N</th>
                                        <th>ЗАГЛАВИЕ(max 50 symbols)</th>
                                        <th class='wide_td'>ТЕКСТ(max 300 symbols)</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php if ((mysqli_num_rows($result_rest_sp_offers_ru) > 0)) {
                                        $k = 1;
                                        while ($sql_rest_sp_offers_ru = mysqli_fetch_assoc($result_rest_sp_offers_ru)) {
                                    ?>
                                            <tr>
                                                <td><?php
                                                    echo $k;
                                                    ?></td>
                                                <td>
                                                    <input type='text' maxlength="50" class='title_offer_ru form-control' value='<?php
                                                                                                                                    echo $sql_rest_sp_offers_ru['title_offers'];
                                                                                                                                    ?>'>
                                                </td>
                                                <td>
                                                    <textarea maxlength="300" class='text_offer_ru form-control'><?php
                                                                                                    echo $sql_rest_sp_offers_ru['text_offers'];
                                                                                                    ?></textarea>
                                                </td>

                                            </tr>
                                    <?php
                                            $k++;
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
                <div class="make-change">
                    <button class='button_change_dir_am spOffers_change_ru'> Կատարել փոփոխություն</button>
                </div>

                <div class="add-article-section">
                    <h1>Ավելացնել Առաջարկ</հ1>
                </div>
                <form onsubmit='return false' action="" method="post" enctype="multipart/form-data" id="form_upload_data">
                    <div class='mt-4'>
                        <label>
                            <input type="file" id="sp_offer_img" style="display:none" name="sp_offer_img">
                            <div class='upload-imb-btn mb-1 mt-3' id='select_img'>Ներբեռնել գլխավոր նկարը</div>
                        </label>
                        <button class="delete delete-margin-right" id='remove_uploaded_img'>Չեղարկել</button>
                    </div>
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <tr>
                            <th>Հայերեն լեզվով վերնագիր (max 50 symbols)</th>
                            <th class='wide_td'>Հայերեն լեզվով տեքստ (max 300 symbols)</th>
                        </tr>
                        <tr>
                            <td>
                                <input id='sp-offers-am-title' name='sp-offers-am-title' type='text' maxlength="50" class='title_dir_en form-control'>
                            </td>
                            <td>
                                <textarea id='sp-offers-am-text' name='sp-offers-am-text' class='text_dir_en form-control'></textarea>
                            </td>
                        </tr>
                        <tr>
                            <th>Title in English</th>
                            <th class='wide_td'>Text in English</th>
                        </tr>
                        <tr>
                            <td>
                                <input id='sp-offers-en-title' name='sp-offers-en-title' type='text' maxlength="50" class='title_dir_en form-control'>
                            </td>
                            <td>
                                <textarea id='sp-offers-en-text' name='sp-offers-en-text' class='text_dir_en form-control'></textarea>
                            </td>
                        </tr>
                        <tr>
                            <th>Заглавие на русском языке</th>
                            <th class='wide_td'>ТЕКСТ на русском языке</th>
                        </tr>
                        <tr>
                            <td>
                                <input id='sp-offers-ru-title' name='sp-offers-ru-title' type='text' maxlength="50" class='title_dir_en form-control'>
                            </td>
                            <td>
                                <textarea id='sp-offers-ru-text' name='sp-offers-ru-text' class='text_dir_en form-control'></textarea>
                            </td>
                        </tr>
                        <tbody>
                        </tbody>
                    </table>
                    <div class="make-change">
                        <button id='add-offer-submit' class='button_change_dir_am' data-toggle="modal" data-target="#submit_so_offer_modal"> Հաստատել</button>
                        <button class="delete delete-margin-right" id='remove-texts'>Չեղարկել</button>
                    </div>
                </form>


                <!-- modalsubmit -->
                <div class="modal fade" id="submit_so_offer_modal" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <input class='form-control' style='border:none;' type='text' value='Գլխավոր նկարը կամ բոլոր դաշտերը ներմուծված չեն։' id='modal-show-input'>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>

                    </div>
                </div>



        <!-- hatuk orer_______________________________ -->


                <div class="container-fluid">
                <h2 class="mt-4 caption-main"> Ռեստորան հատուկ միջոցառումների օրեր</h2>
                <div class="bold-line"></div>

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Կատարել փոփոխություններ հատուկ միջոցառումների օրերում
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable-d1" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>N</th>
                                        <th>ՎԵՐՆԱԳԻՐ(max 50 symbols)</th>
                                        <th class='wide_td'>ՏԵՔՍՏ(max 300 symbols)</th>
                                        <th>Ջնջել</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>N</th>
                                        <th>ՎԵՐՆԱԳԻՐ(max 50 symbols)</th>
                                        <th>ՏԵՔՍՏ(max 300 symbols)</th>
                                        <th>Ջնջել</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php if ((mysqli_num_rows($result_rest_sp_days_am) > 0)) {
                                        $k = 1;
                                        while ($sql_rest_sp_days_am = mysqli_fetch_assoc($result_rest_sp_days_am)) {
                                    ?>
                                            <tr>
                                                <td><?php
                                                    echo $k;
                                                    ?></td>
                                                <td>
                                                    <input type='text' datatype=<?php echo $sql_rest_sp_days_am['id']; ?> maxlength="50" class='title_day_am form-control' value='<?php
                                                                                                                                                                                    echo $sql_rest_sp_days_am['title_days'];
                                                                                                                                                                                    ?>'>
                                                </td>
                                                <td>
                                                    <textarea maxlength='300' rows='6' class='text_day_am form-control' maxlength='300'><?php
                                                                                                    echo $sql_rest_sp_days_am['text_days'];
                                                                                                    ?></textarea>
                                                </td>
                                                <td>
                                                    <button class="delete" data-toggle="modal" data-target="#Del-dayModal_<?php echo $sql_rest_sp_days_am['id'] ?>">Ջնջել</button>
                                                    <!-- modal-delete -->
                                                    <div id="Del-dayModal_<?php echo $sql_rest_sp_days_am['id'] ?>" class="modal fade" role="dialog">
                                                        <div class="modal-dialog">

                                                            <!-- Modal content-->
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>Դուք վստահ եք, որ ցանկանում եք ջնջել «<?php echo $sql_rest_sp_days_am['title_days']; ?>» առաջարկը։</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn delete-confirm-days" data-dismiss="modal" id='delete-<?php echo $sql_rest_sp_days_am['id'] ?>'>Այո</button>
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Չեղարկել</button>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <!-- end modal -->
                                                </td>
                                            </tr>

                                    <?php
                                            $k++;
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                <div class="make-change">
                    <button class='button_change_dir_am days_change_am'> Կատարել փոփոխություն</button>
                </div>


                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Կատարել փոփոխություններ  Restaurant special event days
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable-d2" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>N</th>
                                        <th>TITLE(max 50 symbols)</th>
                                        <th class='wide_td'>TEXT(max 300 symbols)</th>

                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>N</th>
                                        <th>TITLE(max 50 symbols)</th>
                                        <th class='wide_td'>TEXT(max 300 symbols)</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php if ((mysqli_num_rows($result_rest_sp_days_en) > 0)) {
                                        $k = 1;
                                        while ($sql_rest_sp_days_en = mysqli_fetch_assoc($result_rest_sp_days_en)) {
                                    ?>
                                            <tr>
                                                <td><?php
                                                    echo $k;
                                                    ?></td>
                                                <td>
                                                    <input type='text'  datatype=<?php echo $sql_rest_sp_days_en['id']; ?>  maxlength='50' class='title_day_en form-control' value='<?php
                                                                                                                    echo $sql_rest_sp_days_en['title_days'];
                                                                                                                    ?>'>
                                                </td>
                                                <td>
                                                    <textarea maxlength='300' class='text_day_en form-control'><?php
                                                                                                    echo $sql_rest_sp_days_en['text_days'];
                                                                                                    ?></textarea>
                                                </td>
                                            </tr>
                                    <?php
                                            $k++;
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
                <div class="make-change">
                    <button class='button_change_dir_am days_change_en'> Կատարել փոփոխություն</button>
                </div>

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Կատարել փոփոխություններ  Дни специальных мероприятий в ресторане
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable-d3" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>N</th>
                                        <th>ЗАГЛАВИЕ(max 50 symbols)</th>
                                        <th class='wide_td'>ТЕКСТ(max 300 symbols)</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>N</th>
                                        <th>ЗАГЛАВИЕ(max 50 symbols)</th>
                                        <th class='wide_td'>ТЕКСТ(max 300 symbols)</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php if ((mysqli_num_rows($result_rest_sp_days_ru) > 0)) {
                                        $k = 1;
                                        while ($sql_rest_sp_days_ru = mysqli_fetch_assoc($result_rest_sp_days_ru)) {
                                    ?>
                                            <tr>
                                                <td><?php
                                                    echo $k;
                                                    ?></td>
                                                <td>
                                                    <input datatype=<?php echo $sql_rest_sp_days_ru['id']; ?> type='text' maxlength="50" class='title_day_ru form-control' value='<?php
                                                                                                                                    echo $sql_rest_sp_days_ru['title_days'];
                                                                                                                                    ?>'>
                                                </td>
                                                <td>
                                                    <textarea maxlength="300" class='text_day_ru form-control'><?php
                                                                                                    echo $sql_rest_sp_days_ru['text_days'];
                                                                                                    ?></textarea>
                                                </td>

                                            </tr>
                                    <?php
                                            $k++;
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
                <div class="make-change">
                    <button class='button_change_dir_am days_change_ru'> Կատարել փոփոխություն</button>
                </div>





                <div class="add-article-section">
                    <h1>Ավելացնել հատուկ միջոցառումների օր</հ1>
                </div>
                <form onsubmit='return false' action="" method="post" enctype="multipart/form-data" id="form_upload_day_data">
                    <div class='mt-4'>
                        <label>
                            <input type="file" id="rest_day_img" style="display:none" name="rest_day_img">
                            <div class='upload-imb-btn mb-1 mt-3' id='select_day_img'>Ներբեռնել գլխավոր նկարը</div>
                        </label>
                        <button class="delete delete-margin-right" id='remove_day_uploaded_img'>Չեղարկել</button>
                    </div>
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <tr>
                            <th>Հայերեն լեզվով վերնագիր (ոչ ավել քան 50 նիշ)</th>
                            <th class='wide_td'>Հայերեն լեզվով տեքստ (ոչ ավել քան 250 նիշ)</th>
                        </tr>
                        <tr>
                            <td>
                                <input id='day-am-title' name='day-am-title' type='text' maxlength="50" class='title_dir_en form-control'>
                            </td>
                            <td>
                                <textarea id='day-am-text' name='day-am-text' class='text_dir_en form-control' maxlength="250"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <th>Title in English</th>
                            <th class='wide_td'>Text in English</th>
                        </tr>
                        <tr>
                            <td>
                                <input id='day-en-title' name='day-en-title' type='text' maxlength="50" class='title_dir_en form-control'>
                            </td>
                            <td>
                                <textarea id='day-en-text' name='day-en-text' class='text_dir_en form-control' maxlength="250"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <th>Заглавие на русском языке</th>
                            <th class='wide_td'>ТЕКСТ на русском языке</th>
                        </tr>
                        <tr>
                            <td>
                                <input id='day-ru-title' name='day-ru-title' type='text' maxlength="50" class='title_dir_en form-control'>
                            </td>
                            <td>
                                <textarea id='day-ru-text' name='day-ru-text' class='text_dir_en form-control' maxlength="250"></textarea>
                            </td>
                        </tr>
                        <tbody>
                        </tbody>
                    </table>
                    <div class="make-change">
                        <button id='add-day-submit' class='button_change_dir_am' data-toggle="modal" data-target="#submit_day_modal"> Հաստատել</button>
                        <button class="delete delete-margin-right" id='remove-day-texts'>Չեղարկել</button>
                    </div>
                </form>


                <!-- modalsubmit -->
                <div class="modal fade" id="submit_day_modal" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <input class='form-control' style='border:none;' type='text' value='Գլխավոր նկարը կամ բոլոր դաշտերը ներմուծված չեն։' id='modal-day-show-input'>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>

                    </div>
                </div>

        </main>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; www.sevaberd.am 2021</div>
                </div>
            </div>
        </footer>
    </div>

    </div>

    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script> -->
    <!-- <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script> -->
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/datatables-demo.js"></script>
    <script src='js/rest_sp_of_days.js'></script>
</body>

</html>