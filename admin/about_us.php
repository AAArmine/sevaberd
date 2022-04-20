<?php
include "../db_configuration/configuration.php";
$sql_about_village = "SELECT * from village where id='1'";
$result_about_village = mysqli_query($con, $sql_about_village);
if (mysqli_num_rows($result_about_village)) {
    $row_about_village = mysqli_fetch_assoc($result_about_village);
}

$sql_about_zipline = "SELECT * from zipline where id='1'";
$result_about_zipline = mysqli_query($con, $sql_about_zipline);
if (mysqli_num_rows($result_about_zipline)) {
    $row_about_zipline = mysqli_fetch_assoc($result_about_zipline);
}

$sql_about_shooting = "SELECT * from shooting where id='1'";
$result_about_shooting = mysqli_query($con, $sql_about_shooting);
if (mysqli_num_rows($result_about_shooting)) {
    $row_about_shooting = mysqli_fetch_assoc($result_about_shooting);
}


?>
<?php include "header.php" ?>

<body class="sb-nav-fixed">

    <?php include "navMain.php" ?>
    <div id="layoutSidenav_content">


        <!-------------------- main ---------------------------->
        <main>
            <div class="container-fluid">
                <h2 class="mt-4 caption-main">Մեր մասին</h2>
                <div class="bold-line"></div>

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Փոխել լուսանկարները(Սևաբերդ գյուղ)
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Լուսանկար1</th>
                                        <th>փոխել լուս. 1</th>
                                        <th>Լուսանկար2</th>
                                        <th>փոխել լուս. 2</th>
                                        <th>Լուսանկար3</th>
                                        <th>փոխել լուս. 3</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Լուսանկար1</th>
                                        <th>փոխել լուս. 1</th>
                                        <th>Լուսանկար2</th>
                                        <th>փոխել լուս. 2</th>
                                        <th>Լուսանկար3</th>
                                        <th>փոխել լուս. 3</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="img_display_about" style="background-image: url('../img_admin/<?php echo $row_about_village['image_1']; ?>');">
                                            </div>
                                        </td>
                                        <td>
                                            <form onsubmit='return false' action="" method="post" enctype="multipart/form-data" id="form_upload_image1">
                                                <label>
                                                    <input type="file" id="img1" style="display:none" name="img1">
                                                    <div class='upload-imb-btn1 mb-1 mt-3' id='select_img1'>Ներբեռնել 1 նկարը</div>
                                                </label>
                                                <input type='submit' id='change_img1_submit' value='Հաստատել' class='button_change_dir_am' name="img1_submitted">
                                            </form>
                                        </td>
                                        <td>
                                            <div class="img_display_about" style="background-image: url('../img_admin/<?php echo $row_about_village['image_2']; ?>');">
                                            </div>
                                        </td>
                                        <td>
                                            <form onsubmit='return false' action="" method="post" enctype="multipart/form-data" id="form_upload_image2">
                                                <label>
                                                    <input type="file" id="img2" style="display:none" name="img2">
                                                    <div class='upload-imb-btn1 mb-1 mt-3' id='select_img2'>Ներբեռնել 2 նկարը</div>
                                                </label>
                                                <button id='change_img2_submit' class='button_change_dir_am'> Հաստատել</button>
                                            </form>
                                        </td>
                                        <td>
                                            <div class="img_display_about" style="background-image: url('../img_admin/<?php echo $row_about_village['image_3']; ?>');">
                                            </div>
                                        </td>
                                        <td>
                                            <form onsubmit='return false' action="" method="post" enctype="multipart/form-data" id="form_upload_image3">
                                                <label>
                                                    <input type="file" id="img3" style="display:none" name="img3">
                                                    <div class='upload-imb-btn1 mb-1 mt-3' id='select_img3'>Ներբեռնել 3 նկարը</div>
                                                </label>
                                                <button id='change_img3_submit' class='button_change_dir_am'> Հաստատել</button>
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Փոխել տեքստերը(Սևաբերդ գյուղ)
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Տեքստ հայերեն</th>
                                        <th>Տեքստ անգլերեն</th>
                                        <th>Տեքստ ռուսերեն</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Տեքստ հայերեն</th>
                                        <th>Տեքստ անգլերեն</th>
                                        <th>Տեքստ ռուսերեն</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td>
                                            <textarea rows='15' class='text_about_village_am form-control'><?php echo $row_about_village['text_am']; ?></textarea>
                                        </td>
                                        <td>
                                            <textarea rows='15' class='text_about_village_en form-control'><?php echo $row_about_village['text_en']; ?></textarea>
                                        </td>
                                        <td>
                                            <textarea rows='15' class='text_about_village_ru form-control'><?php echo $row_about_village['text_ru']; ?></textarea>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="make-change">
                    <button class='button_change_dir_am village_text_change'> Կատարել փոփոխություն տեքստում</button>
                </div>



                <!-- 2 -->
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Փոխել լուսանկարները(Զիփլայն)
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable2" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Լուսանկար1</th>
                                        <th>փոխել լուս. 1</th>
                                        <th>Լուսանկար2</th>
                                        <th>փոխել լուս. 2</th>
                                        <th>Լուսանկար3</th>
                                        <th>փոխել լուս. 3</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Լուսանկար1</th>
                                        <th>փոխել լուս. 1</th>
                                        <th>Լուսանկար2</th>
                                        <th>փոխել լուս. 2</th>
                                        <th>Լուսանկար3</th>
                                        <th>փոխել լուս. 3</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="img_display_about" style="background-image: url('../img_admin/<?php echo $row_about_zipline['image_1']; ?>');">
                                            </div>
                                        </td>
                                        <td>
                                            <form onsubmit='return false' action="" method="post" enctype="multipart/form-data" id="form_upload_image1_zip">
                                                <label>
                                                    <input type="file" id="img1_zip" style="display:none" name="img1_zip">
                                                    <div class='upload-imb-btn1 mb-1 mt-3' id='select_img1_zip'>Ներբեռնել 1 նկարը</div>
                                                </label>
                                                <input type='submit' id='change_img1_submit_zip' value='Հաստատել' class='button_change_dir_am' name="img1_submitted_zip">
                                            </form>
                                        </td>
                                        <td>
                                            <div class="img_display_about" style="background-image: url('../img_admin/<?php echo $row_about_zipline['image_2']; ?>');">
                                            </div>
                                        </td>
                                        <td>
                                            <form onsubmit='return false' action="" method="post" enctype="multipart/form-data" id="form_upload_image2_zip">
                                                <label>
                                                    <input type="file" id="img2_zip" style="display:none" name="img2_zip">
                                                    <div class='upload-imb-btn1 mb-1 mt-3' id='select_img2_zip'>Ներբեռնել 2 նկարը</div>
                                                </label>
                                                <button id='change_img2_submit_zip' class='button_change_dir_am'> Հաստատել</button>
                                            </form>
                                        </td>
                                        <td>
                                            <div class="img_display_about" style="background-image: url('../img_admin/<?php echo $row_about_zipline['image_3']; ?>');">
                                            </div>
                                        </td>
                                        <td>
                                            <form onsubmit='return false' action="" method="post" enctype="multipart/form-data" id="form_upload_image3_zip">
                                                <label>
                                                    <input type="file" id="img3_zip" style="display:none" name="img3_zip">
                                                    <div class='upload-imb-btn1 mb-1 mt-3' id='select_img3_zip'>Ներբեռնել 3 նկարը</div>
                                                </label>
                                                <button id='change_img3_submit_zip' class='button_change_dir_am'> Հաստատել</button>
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Փոխել տեքստերը(Զիփլայն)
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable2-2" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Տեքստ հայերեն</th>
                                        <th>Տեքստ անգլերեն</th>
                                        <th>Տեքստ ռուսերեն</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Տեքստ հայերեն</th>
                                        <th>Տեքստ անգլերեն</th>
                                        <th>Տեքստ ռուսերեն</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td>
                                            <textarea rows='15' class='text_about_zipline_am form-control'><?php echo $row_about_zipline['text_am']; ?></textarea>
                                        </td>
                                        <td>
                                            <textarea rows='15' class='text_about_zipline_en form-control'><?php echo $row_about_zipline['text_en']; ?></textarea>
                                        </td>
                                        <td>
                                            <textarea rows='15' class='text_about_zipline_ru form-control'><?php echo $row_about_zipline['text_ru']; ?></textarea>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="make-change">
                    <button class='button_change_dir_am zipline_text_change'> Կատարել փոփոխություն տեքստում</button>
                </div>

                <!-- 3 -->

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Փոխել լուսանկարները(Հրաձգարան)
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable3" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Լուսանկար1</th>
                                        <th>փոխել լուս. 1</th>
                                        <th>Լուսանկար2</th>
                                        <th>փոխել լուս. 2</th>
                                        <th>Լուսանկար3</th>
                                        <th>փոխել լուս. 3</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Լուսանկար1</th>
                                        <th>փոխել լուս. 1</th>
                                        <th>Լուսանկար2</th>
                                        <th>փոխել լուս. 2</th>
                                        <th>Լուսանկար3</th>
                                        <th>փոխել լուս. 3</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="img_display_about" style="background-image: url('../img_admin/<?php echo $row_about_shooting['image_1']; ?>');">
                                            </div>
                                        </td>
                                        <td>
                                            <form onsubmit='return false' action="" method="post" enctype="multipart/form-data" id="form_upload_image1_shoo">
                                                <label>
                                                    <input type="file" id="img1_shoo" style="display:none" name="img1_shoo">
                                                    <div class='upload-imb-btn1 mb-1 mt-3' id='select_img1_shoo'>Ներբեռնել 1 նկարը</div>
                                                </label>
                                                <input type='submit' id='change_img1_submit_shoo' value='Հաստատել' class='button_change_dir_am' name="img1_submitted_shoo">
                                            </form>
                                        </td>
                                        <td>
                                            <div class="img_display_about" style="background-image: url('../img_admin/<?php echo $row_about_shooting['image_2']; ?>');">
                                            </div>
                                        </td>
                                        <td>
                                            <form onsubmit='return false' action="" method="post" enctype="multipart/form-data" id="form_upload_image2_shoo">
                                                <label>
                                                    <input type="file" id="img2_shoo" style="display:none" name="img2_shoo">
                                                    <div class='upload-imb-btn1 mb-1 mt-3' id='select_img2_shoo'>Ներբեռնել 2 նկարը</div>
                                                </label>
                                                <button id='change_img2_submit_shoo' class='button_change_dir_am'> Հաստատել</button>
                                            </form>
                                        </td>
                                        <td>
                                            <div class="img_display_about" style="background-image: url('../img_admin/<?php echo $row_about_shooting['image_3']; ?>');">
                                            </div>
                                        </td>
                                        <td>
                                            <form onsubmit='return false' action="" method="post" enctype="multipart/form-data" id="form_upload_image3_shoo">
                                                <label>
                                                    <input type="file" id="img3_shoo" style="display:none" name="img3_shoo">
                                                    <div class='upload-imb-btn1 mb-1 mt-3' id='select_img3_shoo'>Ներբեռնել 3 նկարը</div>
                                                </label>
                                                <button id='change_img3_submit_shoo' class='button_change_dir_am'> Հաստատել</button>
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Փոխել տեքստերը(Հրաձգարան)
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Տեքստ հայերեն</th>
                                        <th>Տեքստ անգլերեն</th>
                                        <th>Տեքստ ռուսերեն</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Տեքստ հայերեն</th>
                                        <th>Տեքստ անգլերեն</th>
                                        <th>Տեքստ ռուսերեն</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td>
                                            <textarea rows='15' class='text_about_shooting_am form-control'><?php echo $row_about_shooting['text_am']; ?></textarea>
                                        </td>
                                        <td>
                                            <textarea rows='15' class='text_about_shooting_en form-control'><?php echo $row_about_shooting['text_en']; ?></textarea>
                                        </td>
                                        <td>
                                            <textarea rows='15' class='text_about_shooting_ru form-control'><?php echo $row_about_shooting['text_ru']; ?></textarea>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="make-change">
                    <button class='button_change_dir_am shooting_text_change'> Կատարել փոփոխություն տեքստում</button>
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
    <script src='js/about.js'></script>

</body>

</html>