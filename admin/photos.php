<?php
include "../db_configuration/configuration.php";
$sql_photos = "SELECT * from photos";
$result_photos = mysqli_query($con, $sql_photos);
?>
<?php include "header.php" ?>

<body class="sb-nav-fixed">

    <?php include "navMain.php" ?>
    <div id="layoutSidenav_content">


        <!-------------------- main ---------------------------->
        <main>
            <div class="container-fluid">
                <h2 class="mt-4 caption-main">Լուսանկարներ/պատկերասրահ</h2>
                <div class="bold-line"></div>

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Փոխել լուսանկարի կատեգորիան/ջնջել լուսանկարը
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>N</th>
                                        <th>Լուսանկար</th>
                                        <th>Կատեգորիա</th>
                                        <th>Ջնջել</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>N</th>
                                        <th>Լուսանկար</th>
                                        <th>Կատեգորիա</th>
                                        <th>Ջնջել</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php if ((mysqli_num_rows($result_photos) > 0)) {
                                        $k = 1;
                                        while ($sql_photos = mysqli_fetch_assoc($result_photos)) {
                                    ?>
                                            <tr>
                                                <td><?php
                                                    echo $k;
                                                    ?></td>
                                                <td>
                                                    <div class='photo_div' data_type=<?php echo $sql_photos['name']; ?> datatype=<?php echo $sql_photos['id']; ?> style="background-image: url('../photos/<?php echo  $sql_photos['name'] ?>');">


                                                    </div>
                                                </td>
                                                <td>
                                                    <select class="photo_category form-control">
                                                        <option value="category 1" <?php if ($sql_photos['category_am'] == "Ռեստորան") echo 'selected="selected"'; ?>>Ռեստորան</option>
                                                        <option value="category 2" <?php if ($sql_photos['category_am'] == "Հյուրատուն") echo 'selected="selected"'; ?>>Հյուրատուն</option>
                                                        <option value="category 3" <?php if ($sql_photos['category_am'] == "Քայլարշավներ") echo 'selected="selected"'; ?>>Քայլարշավներ</option>
                                                        <option value="category 4" <?php if ($sql_photos['category_am'] == "Լեռնագնացություն") echo 'selected="selected"'; ?>>Լեռնագնացություն</option>
                                                        <option value="category 5" <?php if ($sql_photos['category_am'] == "Լեռնահեծանվային տուրեր") echo 'selected="selected"'; ?>>Լեռնահեծանվային տուրեր</option>
                                                        <option value="category 6" <?php if ($sql_photos['category_am'] == "Դահուկային տուրեր") echo 'selected="selected"'; ?>>Դահուկային տուրեր</option>
                                                        <option value="category 7" <?php if ($sql_photos['category_am'] == "Կվադրոցիկլ") echo 'selected="selected"'; ?>>Կվադրոցիկլ</option>
                                                        <option value="category 8" <?php if ($sql_photos['category_am'] == "Ձիավարություն") echo 'selected="selected"'; ?>>Ձիավարություն</option>
                                                    </select>

                                                </td>

                                                <td>
                                                    <button class="delete" data-toggle="modal" data-target="#Del-Modal_<?php echo $sql_photos['id'] ?>">Ջնջել</button>
                                                    <!-- modal-delete -->
                                                    <div id="Del-Modal_<?php echo $sql_photos['id'] ?>" class="modal fade" role="dialog">
                                                        <div class="modal-dialog">

                                                            <!-- Modal content-->
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>Դուք վստահ եք, որ ցանկանում եք ջնջել «<?php echo $sql_photos['name']; ?>» լուսանկարը։</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn delete-confirm" data-dismiss="modal" id='delete-<?php echo $sql_photos['id'] ?>'>Այո</button>
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
                    <button class='button_change_dir_am photos_change'> Կատարել փոփոխություն</button>
                </div>










                <div class="add-article-section">
                    <h1>Ավելացնել լուսանկար</հ1>
                </div>
                <form onsubmit='return false' action="" method="post" enctype="multipart/form-data" id="form_upload_data">
                    <div class='mt-4'>
                        <label>
                            <input type="file" id="photo_input" style="display:none" name="photo_input">
                            <div class='upload-imb-btn mb-1 mt-3' id='select_photo'>Ներբեռնել լուսանկար</div>
                        </label>
                        <button class="delete delete-margin-right" id='remove_uploaded_photo'>Չեղարկել</button>
                        <select class="photo_category mb-5 form-control" name="photo_category" id='photo_category'>
                        <option value="">Ընտրել կատեգորիան</option>
                        <option value="category 1">Ռեստորան</option>
                        <option value="category 2">Հյուրատուն</option>
                        <option value="category 3">Քայլարշավներ</option>
                        <option value="category 4">Լեռնագնացություն</option>
                        <option value="category 5">Լեռնահեծանվային տուրեր</option>
                        <option value="category 6">Դահուկային տուրեր</option>
                        <option value="category 7">Կվադրոցիկլ</option>
                        <option value="category 8">Ձիավարություն</option>
                    </select>
                    </div>


                    <div class="make-change">
                        <button id='add-photo-submit' class='button_change_dir_am' data-toggle="modal" data-target="#submit_photos_modal"> Հաստատել</button>
                        <button class="delete delete-margin-right" id='remove-texts'>Չեղարկել</button>
                    </div>
                </form>


                <!-- modalsubmit -->
                <div class="modal fade" id="submit_photos_modal" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <input class='form-control' style='border:none;' type='text' value='Տեսանյութը կամ կատեգորիան ներմուծված չի։' id='modal-show-input'>
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
    <script src='js/photos.js'></script>
</body>

</html>