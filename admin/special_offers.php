<?php
include "../db_configuration/configuration.php";
$sql_sp_offers_am = "SELECT * from special_offers_am";
$result_sp_offers_am = mysqli_query($con, $sql_sp_offers_am);

$sql_sp_offers_en = "SELECT * from special_offers_en";
$result_sp_offers_en = mysqli_query($con, $sql_sp_offers_en);

$sql_sp_offers_ru = "SELECT * from special_offers_ru";
$result_sp_offers_ru = mysqli_query($con, $sql_sp_offers_ru);
?>
<?php include "header.php" ?>

<body class="sb-nav-fixed">

    <?php include "navMain.php" ?>
    <div id="layoutSidenav_content">


        <!-------------------- main ---------------------------->
        <main>
            <div class="container-fluid">
                <h2 class="mt-4 caption-main">Հատուկ առաջարկներ</h2>
                <div class="bold-line"></div>

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Հատուկ առաջարկներ
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>N</th>
                                        <th>ՎԵՐՆԱԳԻՐ</th>
                                        <th class='wide_td'>ՏԵՔՍՏ</th>
                                        <th>ԿԱԶՄ․ին</th>
                                        <th>Ջնջել</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>N</th>
                                        <th>ՎԵՐՆԱԳԻՐ</th>
                                        <th>ՏԵՔՍՏ</th>
                                        <th>ԿԱԶՄ․ին</th>
                                        <th>Ջնջել</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php if ((mysqli_num_rows($result_sp_offers_am) > 0)) {
                                        $k = 1;
                                        while ($sql_sp_offers_am = mysqli_fetch_assoc($result_sp_offers_am)) {
                                    ?>
                                            <tr>
                                                <td><?php
                                                    echo $k;
                                                    ?></td>
                                                <td>
                                                    <input type='text' datatype=<?php echo $sql_sp_offers_am['id']; ?> maxlength="50" class='title_offer_am form-control' value='<?php
                                                                                                                                                                                    echo $sql_sp_offers_am['title_offers'];
                                                                                                                                                                                    ?>'>
                                                </td>
                                                <td>
                                                    <textarea class='text_offer_am form-control'><?php
                                                                                                    echo $sql_sp_offers_am['text_offers'];
                                                                                                    ?></textarea>
                                                </td>
                                                <td>
                                                    Այո
                                                    <input type="checkbox" class="checked_for_companies" <?php if ($sql_sp_offers_am['for_companies'] == 'checked') {
                                                                                                                echo $sql_sp_offers_am['for_companies'];
                                                                                                            }  ?>>
                                                </td>
                                                <td>
                                                    <button class="delete" data-toggle="modal" data-target="#Del-Modal_<?php echo $sql_sp_offers_am['id'] ?>">Ջնջել</button>
                                                    <!-- modal-delete -->
                                                    <div id="Del-Modal_<?php echo $sql_sp_offers_am['id'] ?>" class="modal fade" role="dialog">
                                                        <div class="modal-dialog">

                                                            <!-- Modal content-->
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>Դուք վստահ եք, որ ցանկանում եք ջնջել «<?php echo $sql_sp_offers_am['title_offers']; ?>» առաջարկը։</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn delete-confirm" data-dismiss="modal" id='delete-<?php echo $sql_sp_offers_am['id'] ?>'>Այո</button>
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
                        Special Offers
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable2" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>N</th>
                                        <th>TITLE</th>
                                        <th class='wide_td'>TEXT</th>

                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>N</th>
                                        <th>TITLE</th>
                                        <th class='wide_td'>TEXT</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php if ((mysqli_num_rows($result_sp_offers_en) > 0)) {
                                        $k = 1;
                                        while ($sql_sp_offers_en = mysqli_fetch_assoc($result_sp_offers_en)) {
                                    ?>
                                            <tr>
                                                <td><?php
                                                    echo $k;
                                                    ?></td>
                                                <td>
                                                    <input type='text' maxlength="50" class='title_offer_en form-control' value='<?php
                                                                                                                    echo $sql_sp_offers_en['title_offers'];
                                                                                                                    ?>'>
                                                </td>
                                                <td>
                                                    <textarea class='text_offer_en form-control'><?php
                                                                                                    echo $sql_sp_offers_en['text_offers'];
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
                        Специальные предложения
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable3" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>N</th>
                                        <th>ЗАГЛАВИЕ</th>
                                        <th class='wide_td'>ТЕКСТ</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>N</th>
                                        <th>ЗАГЛАВИЕ</th>
                                        <th class='wide_td'>ТЕКСТ</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php if ((mysqli_num_rows($result_sp_offers_ru) > 0)) {
                                        $k = 1;
                                        while ($sql_sp_offers_ru = mysqli_fetch_assoc($result_sp_offers_ru)) {
                                    ?>
                                            <tr>
                                                <td><?php
                                                    echo $k;
                                                    ?></td>
                                                <td>
                                                    <input type='text' maxlength="50" class='title_offer_ru form-control' value='<?php
                                                                                                                                    echo $sql_sp_offers_ru['title_offers'];
                                                                                                                                    ?>'>
                                                </td>
                                                <td>
                                                    <textarea class='text_offer_ru form-control'><?php
                                                                                                    echo $sql_sp_offers_ru['text_offers'];
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
                    <div class='for_companies'>
                        <label>
                            <input type="checkbox" id='submit-for-companies-checked' name='submit-for-companies-checked'>
                            <span>Նշել, եթե առաջարկը վերաբերվում է կազմակերպություններին</span>
                        </label>
                    </div>
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <tr>
                            <th>Հայերեն լեզվով վերնագիր</th>
                            <th class='wide_td'>Հայերեն լեզվով տեքստ</th>
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
    <script src='js/special_offers.js'></script>
</body>

</html>