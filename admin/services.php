<?php
include "../db_configuration/configuration.php";
$sql_services_am = "SELECT * from services_am";
$result_services_am = mysqli_query($con, $sql_services_am);

$sql_services_en = "SELECT * from services_en";
$result_services_en = mysqli_query($con, $sql_services_en);

$sql_services_ru = "SELECT * from services_ru";
$result_services_ru = mysqli_query($con, $sql_services_ru);
?>
<?php include "header.php" ?>

<body class="sb-nav-fixed">

    <?php include "navMain.php" ?>
    <div id="layoutSidenav_content">


        <!-------------------- main ---------------------------->
        <main>
            <div class="container-fluid">
                <h2 class="mt-4 caption-main">Ծառայություններ</h2>
                <div class="bold-line"></div>

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Կատարել փոփոխություներ հայերեն (Ծառայություններ) 
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>N</th>
                                        <th>ՎԵՐՆԱԳԻՐ (ոչ ավել քան 50 նիշ)</th>
                                        <th class='wide_td'>ՏԵՔՍՏ</th>
                                    
                                        <th>Ջնջել</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>N</th>
                                        <th>ՎԵՐՆԱԳԻՐ (ոչ ավել քան 50 նիշ)</th>
                                        <th>ՏԵՔՍՏ</th>
                                        <th>Ջնջել</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                <?php if ((mysqli_num_rows($result_services_am) > 0)) {
                                        $k = 1;
                                        while ($sql_services_am = mysqli_fetch_assoc($result_services_am)) {
                                    ?>
                                            <tr>
                                                <td><?php
                                                    echo $k;
                                                    ?></td>
                                                <td>
                                                    <input type='text' datatype=<?php echo $sql_services_am['id']; ?> maxlength="50" class='title_services_am form-control' value='<?php echo $sql_services_am['title'];?>'>
                                                </td>
                                                <td>
                                                    <textarea class='text_services_am form-control'><?php echo $sql_services_am['text'];?></textarea>
                                                                                                    
                                                </td>
                                                
                                                <td>
                                                    <button class="delete" data-toggle="modal" data-target="#Del-Modal_<?php echo $sql_services_am['id'] ?>">Ջնջել</button>
                                                    <!-- modal-delete -->
                                                    <div id="Del-Modal_<?php echo $sql_services_am['id'] ?>" class="modal fade" role="dialog">
                                                        <div class="modal-dialog">

                                                            <!-- Modal content-->
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>Դուք վստահ եք, որ ցանկանում եք ջնջել «<?php echo $sql_services_am['title']; ?>» ծառայությունը։</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn delete-confirm" data-dismiss="modal" id='delete-<?php echo $sql_services_am['id'] ?>'>Այո</button>
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
                    <button class='button_change_dir_am services_change_am'> Կատարել փոփոխություն</button>
                </div>

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Կատարել փոփոխություներ անգլերեն (Ծառայություններ) 
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable2" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>N</th>
                                        <th>TITLE (not more than 50 characters)</th>
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
                                    <?php if ((mysqli_num_rows($result_services_en) > 0)) {
                                        $k = 1;
                                        while ($sql_services_en = mysqli_fetch_assoc($result_services_en)) {
                                    ?>
                                            <tr>
                                                <td><?php
                                                    echo $k;
                                                    ?></td>
                                                <td>
                                                    <input type='text' maxlength="50" datatype=<?php echo $sql_services_en['id']; ?> class='title_services_en form-control' value='<?php echo $sql_services_en['title'];?>'>
                                                                                                                                        
                                                </td>
                                                <td>
                                                    <textarea class='text_services_en form-control'><?php
                                                                                                    echo $sql_services_en['text'];
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
                    <button class='button_change_dir_en services_change_en'> Կատարել փոփոխություն</button>
                </div>

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Կատարել փոփոխություներ ռուսերեն (արկածային տուրիզմ) 
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable3" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>N</th>
                                        <th>ЗАГЛАВИЕ (не более 50 знаков)</th>
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
                                    <?php if ((mysqli_num_rows($result_services_ru) > 0)) {
                                        $k = 1;
                                        while ($sql_services_ru = mysqli_fetch_assoc($result_services_ru)) {
                                    ?>
                                            <tr>
                                                <td><?php
                                                    echo $k;
                                                    ?></td>
                                                <td>
                                                    <input type='text' datatype=<?php echo $sql_services_ru['id']; ?> maxlength="50" class='title_services_ru form-control' value='<?php echo $sql_services_ru['title'];?>'>                                                                                                                                                                 
                                                </td>
                                                <td>
                                                    <textarea class='text_services_ru form-control' ><?php
                                                                                                    echo $sql_services_ru['text'];
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
                    <button class='button_change_dir_ru services_change_ru'> Կատարել փոփոխություն</button>
                </div>


                <div class="add-article-section">
                    <h1>Ավելացնել ծառայություն</հ1>
                </div>
                <form onsubmit='return false' action="" method="post" enctype="multipart/form-data" id="form_upload_data">
                    <div class='mt-4'>
                        <label>
                            <input type="file" id="services_img" style="display:none" name="services_img">
                            <div class='upload-imb-btn mb-1 mt-3' id='select_img'>Ներբեռնել գլխավոր նկարը</div>
                        </label>
                        <button class="delete delete-margin-right" id='remove_uploaded_img'>Չեղարկել</button>
                    </div>
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <tr>
                            <th>Հայերեն լեզվով վերնագիր (ոչ ավել քան 50 նիշ)</th>
                            <th class='wide_td'>Հայերեն լեզվով տեքստ (ոչ ավել քան 250 նիշ)</th>
                        </tr>
                        <tr>
                            <td>
                                <input id='services-am-title' name='services-am-title' type='text' maxlength="50" class='title_dir_en form-control'>
                            </td>
                            <td>
                                <textarea id='services-am-text' name='services-am-text' class='text_dir_en form-control' maxlength="250"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <th>Title in English</th>
                            <th class='wide_td'>Text in English</th>
                        </tr>
                        <tr>
                            <td>
                                <input id='services-en-title' name='services-en-title' type='text' maxlength="50" class='title_dir_en form-control'>
                            </td>
                            <td>
                                <textarea id='services-en-text' name='services-en-text' class='text_dir_en form-control' maxlength="250"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <th>Заглавие на русском языке</th>
                            <th class='wide_td'>ТЕКСТ на русском языке</th>
                        </tr>
                        <tr>
                            <td>
                                <input id='services-ru-title' name='services-ru-title' type='text' maxlength="50" class='title_dir_en form-control'>
                            </td>
                            <td>
                                <textarea id='services-ru-text' name='services-ru-text' class='text_dir_en form-control' maxlength="250"></textarea>
                            </td>
                        </tr>
                        <tbody>
                        </tbody>
                    </table>
                    <div class="make-change">
                        <button id='add-services-submit' class='button_change_dir_am' data-toggle="modal" data-target="#submit_services_modal"> Հաստատել</button>
                        <button class="delete delete-margin-right" id='remove-texts'>Չեղարկել</button>
                    </div>
                </form>


                <!-- modalsubmit -->
                <div class="modal fade" id="submit_services_modal" role="dialog">
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
    <script src='js/services.js'></script>
   
</body>

</html>