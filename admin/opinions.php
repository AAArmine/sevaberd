<?php
include "../db_configuration/configuration.php";
$sql_opinions_am = "SELECT * from opinions_am";
$result_opinions_am = mysqli_query($con, $sql_opinions_am);

$sql_opinions_en = "SELECT * from opinions_en";
$result_opinions_en = mysqli_query($con, $sql_opinions_en);

$sql_opinions_ru = "SELECT * from opinions_ru";
$result_opinions_ru = mysqli_query($con, $sql_opinions_ru);
?>
<?php include "header.php" ?>

<body class="sb-nav-fixed">

    <?php include "navMain.php" ?>
    <div id="layoutSidenav_content">


        <!-------------------- main ---------------------------->
        <main>
            <div class="container-fluid">
                <h2 class="mt-4 caption-main">Կարծիքներ մեր մասին</h2>
                <div class="bold-line"></div>

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Կատարել փոփոխություներ հայերեն (կարծիքներ մեր մասին)
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>N</th>
                                        <th>Անուն Ազգանուն</th>
                                        <th class='wide_td'>Կարծիք(ոչ ավել քան 250 նիշ)</th>
                                        <th>Ջնջել</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>N</th>
                                        <th>Անուն Ազգանուն</th>
                                        <th>Կարծիք</th>
                                        <th>Ջնջել</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php if ((mysqli_num_rows($result_opinions_am) > 0)) {
                                        $k = 1;
                                        while ($sql_opinions_am = mysqli_fetch_assoc($result_opinions_am)) {
                                    ?>
                                            <tr>
                                                <td><?php echo $k; ?></td>
                                                <td>
                                                    <input type='text' maxlength="50" datatype='<?php echo $sql_opinions_am['id'] ?>' class='name_opinions_am form-control' value='<?php echo $sql_opinions_am['name_op']; ?>'>
                                                </td>
                                                <td>
                                                    <textarea class='text_opinions_am form-control' maxlength="250"><?php echo $sql_opinions_am['opinion']; ?></textarea>

                                                </td>

                                                <td>
                                                    <button class="delete delete-op" data-toggle="modal" data-target="#Del-Modal_<?php echo $sql_opinions_am['id'] ?>">Ջնջել</button>
                                                    <!-- modal-delete -->
                                                    <div id="Del-Modal_<?php echo $sql_opinions_am['id'] ?>" class="modal fade" role="dialog">
                                                        <div class="modal-dialog">

                                                            <!-- Modal content-->
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>Դուք վստահ եք, որ ցանկանում եք ջնջել «<?php echo $sql_opinions_am['name_op']; ?>» -ի կարծիքը։</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn delete-confirm" data-dismiss="modal" id='delete-<?php echo $sql_opinions_am['id'] ?>'>Այո</button>
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
                    <button class='button_change_dir_am opinions_change_am'> Կատարել փոփոխություն</button>
                </div>




                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Կատարել փոփոխություներ անգլերեն (կարծիքներ մեր մասին)
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable2" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>N</th>
                                        <th>Name Surname (not more than 50 characters)</th>
                                        <th class='wide_td'>Opinion(not more than 250 characters)</th>

                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>N</th>
                                        <th>Name Surname</th>
                                        <th class='wide_td'>Opinion</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php if ((mysqli_num_rows($result_opinions_en) > 0)) {
                                        $k = 1;
                                        while ($sql_opinions_en = mysqli_fetch_assoc($result_opinions_en)) {
                                    ?>
                                            <tr>
                                                <td><?php echo $k; ?></td>
                                                <td>
                                                    <input type='text' datatype='<?php echo $sql_opinions_en['id'] ?>' maxlength="50" class='name_opinions_en form-control' value='<?php echo $sql_opinions_en['name_op']; ?>'>
                                                </td>
                                                <td>
                                                    <textarea class='text_opinions_en form-control' maxlength="250"><?php echo $sql_opinions_en['opinion']; ?></textarea>

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
                    <button class='button_change_dir_en opinions_change_en'> Կատարել փոփոխություն</button>
                </div>




                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Կատարել փոփոխություներ ռուսերեն (կարծիքներ մեր մասին)
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable3" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>N</th>
                                        <th>Имя Фамилия (не более 50 знаков)</th>
                                        <th class='wide_td'>Мнение (не более 250 знаков)</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>N</th>
                                        <th>Имя Фамилия</th>
                                        <th class='wide_td'>Мнение (не более 250 знаков)</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php if ((mysqli_num_rows($result_opinions_ru) > 0)) {
                                        $k = 1;
                                        while ($sql_opinions_ru = mysqli_fetch_assoc($result_opinions_ru)) {
                                    ?>
                                            <tr>
                                                <td><?php echo $k; ?></td>
                                                <td>
                                                    <input type='text' datatype='<?php echo $sql_opinions_ru['id'] ?>' maxlength="50" class='name_opinions_ru form-control' value='<?php echo $sql_opinions_ru['name_op']; ?>'>
                                                </td>
                                                <td>
                                                    <textarea class='text_opinions_ru form-control' maxlength="250"><?php echo $sql_opinions_ru['opinion']; ?></textarea>

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
                    <input type="file" class="opinion_img" style="display:none" name="sp_offer_img">
                </div>
                <div class="make-change">
                    <button class='button_change_dir_ru opinions_change_ru'> Կատարել փոփոխություն</button>
                </div>



                <!-- add opinion -->
                <div class="add-article-section">
                    <h1>Ավելացնել Կարծիք</հ1>
                </div>
                <form onsubmit='return false' action="" method="post" enctype="multipart/form-data" id="form_upload_data">
                    <div class='mt-4'>
                        <label>
                            <input type="file" id="opinions_img" style="display:none" name="opinions_img">
                            <div class='upload-imb-btn mb-1 mt-3' id='select_img'>Ներբեռնել գլխավոր նկարը</div>
                        </label>
                        <button class="delete delete-margin-right" id='remove_uploaded_img'>Չեղարկել</button>
                    </div>

                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <tr>
                            <th>Հայերեն լեզվով անուն, ազգանուն(ոչ ավել քան 50 նիշ)</th>
                            <th class='wide_td'>Հայերեն լեզվով կարծիքի տեքստ(ոչ ավել քան 250 նիշ)</th>
                        </tr>
                        <tr>
                            <td>
                                <input id='opinion-am-name' name='opinion-am-name' type='text' maxlength="50" class='title_dir_en form-control'>
                            </td>
                            <td>
                                <textarea id='opinion-am-text' maxlength="250" name='opinion-am-text' class='text_dir_en form-control'></textarea>
                            </td>
                        </tr>
                        <tr>
                            <th>Name Surname in English</th>
                            <th class='wide_td'>Opinion text in English</th>
                        </tr>
                        <tr>
                            <td>
                                <input id='opinion-en-name' name='opinion-en-name' type='text' maxlength="50" class='title_dir_en form-control'>
                            </td>
                            <td>
                                <textarea id='opinion-en-text' maxlength="250" name='opinion-en-text' class='text_dir_en form-control'></textarea>
                            </td>
                        </tr>
                        <tr>
                            <th>Имя Фамилия на русском языке</th>
                            <th class='wide_td'>Текст отзыва на русском языке</th>
                        </tr>
                        <tr>
                            <td>
                                <input id='opinion-ru-name' name='opinion-ru-name' type='text' maxlength="50" class='title_dir_en form-control'>
                            </td>
                            <td>
                                <textarea id='opinion-ru-text' maxlength="250" name='opinion-ru-text' class='text_dir_en form-control'></textarea>
                            </td>
                        </tr>
                        <tbody>
                        </tbody>
                    </table>
                    <div class="make-change">
                        <button id='add-opinions-submit' class='button_change_dir_am' data-toggle="modal" data-target="#submit_opinions_modal"> Հաստատել</button>
                        <button class="delete delete-margin-right" id='remove-texts'>Չեղարկել</button>
                    </div>
                </form>


                <!-- modalsubmit -->
                <div class="modal fade" id="submit_opinions_modal" role="dialog">
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
    <script src='js/opinions.js'></script>
</body>

</html>