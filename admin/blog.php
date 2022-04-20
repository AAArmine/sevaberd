<?php
include "../db_configuration/configuration.php";
$sql_blog_am = "SELECT * from blog_am";
$result_blog_am = mysqli_query($con, $sql_blog_am);

$sql_blog_en = "SELECT * from blog_en";
$result_blog_en = mysqli_query($con, $sql_blog_en);

$sql_blog_ru = "SELECT * from blog_ru";
$result_blog_ru = mysqli_query($con, $sql_blog_ru);
?>
<?php include "header.php" ?>

<body class="sb-nav-fixed">

    <?php include "navMain.php" ?>
    <div id="layoutSidenav_content">


        <!-------------------- main ---------------------------->
        <main>
            <div class="container-fluid">
                <h2 class="mt-4 caption-main">Բլոգ</h2>
                <div class="bold-line"></div>

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Կատարել փոփոխություններ ԲԼՈԳ հայերենում
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>N</th>
                                        <th>ՎԵՐՆԱԳԻՐ(no more than 250 symbols)</th>
                                        <th class='wide_td'>ՏԵՔՍՏ</th>
                                        <th>Կատեգորիա</th>
                                        <th>Ամսաթիվ</th>
                                        <th>Ջնջել</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>N</th>
                                        <th>ՎԵՐՆԱԳԻՐ(no more than 250 symbols)</th>
                                        <th>ՏԵՔՍՏ</th>
                                        <th>Կատեգորիա</th>
                                        <th>Ամսաթիվ</th>
                                        <th>Ջնջել</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php if ((mysqli_num_rows($result_blog_am) > 0)) {
                                        $k = 1;
                                        while ($sql_blog_am = mysqli_fetch_assoc($result_blog_am)) {
                                    ?>
                                            <tr>
                                                <td><?php
                                                    echo $k;
                                                    ?></td>
                                                <td>
                                                    <input type='text' datatype=<?php echo $sql_blog_am['id']; ?> maxlength="50" class='title_blog_am form-control' value='<?php
                                                                                                                                                                            echo $sql_blog_am['title'];
                                                                                                                                                                            ?>'>
                                                </td>
                                                <td>
                                                    <textarea class='text_blog_am form-control'><?php
                                                                                                echo $sql_blog_am['text'];
                                                                                                ?></textarea>
                                                </td>
                                                <td>
                                                    <select class="blog_category form-control">
                                                        <option value="category 1" <?php if ($sql_blog_am['category'] == "Հայաստան") echo 'selected="selected"'; ?>>Հայաստան</option>
                                                        <option value="category 2" <?php if ($sql_blog_am['category'] == "Կոտայքի մարզ") echo 'selected="selected"'; ?>>Կոտայքի մարզ</option>
                                                        <option value="category 3" <?php if ($sql_blog_am['category'] == "Սևաբերդ") echo 'selected="selected"'; ?>>Սևաբերդ</option>
                                                        <option value="category 4" <?php if ($sql_blog_am['category'] == "Պատմամշակութային վայրեր") echo 'selected="selected"'; ?>>Պատմամշակութային վայրեր</option>
                                                        <option value="category 5" <?php if ($sql_blog_am['category'] == "Ժամանցի վայրեր") echo 'selected="selected"'; ?>>Ժամանցի վայրեր</option>
                                                    </select>

                                                </td>
                                                <td>
                                                    <input type="date" class="blog_date" value='<?php echo $sql_blog_am['date_current']; ?>'>
                                                </td>
                                                <td>
                                                    <button class="delete" data-toggle="modal" data-target="#Del-Modal_<?php echo $sql_blog_am['id'] ?>">Ջնջել</button>
                                                    <!-- modal-delete -->
                                                    <div id="Del-Modal_<?php echo $sql_blog_am['id'] ?>" class="modal fade" role="dialog">
                                                        <div class="modal-dialog">

                                                            <!-- Modal content-->
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>Դուք վստահ եք, որ ցանկանում եք ջնջել «<?php echo $sql_blog_am['title']; ?>» բլոգը։</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn delete-confirm" data-dismiss="modal" id='delete-<?php echo $sql_blog_am['id'] ?>'>Այո</button>
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
                    <button class='button_change_dir_am blog_change_am'> Կատարել փոփոխություն</button>
                </div>


                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Կատարել փոփոխություններ ԲԼՈԳ անգլերենում
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable2" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>N</th>
                                        <th>TITLE(no more than 250 symbols)</th>
                                        <th class='wide_td'>TEXT</th>

                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>N</th>
                                        <th>TITLE(no more than 250 symbols)</th>
                                        <th class='wide_td'>TEXT</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php if ((mysqli_num_rows($result_blog_en) > 0)) {
                                        $k = 1;
                                        while ($sql_blog_en = mysqli_fetch_assoc($result_blog_en)) {
                                    ?>
                                            <tr>
                                                <td><?php
                                                    echo $k;
                                                    ?></td>
                                                <td>
                                                    <input type='text' maxlength="250" class='title_blog_en form-control' value='<?php
                                                                                                                                    echo $sql_blog_en['title'];
                                                                                                                                    ?>'>
                                                </td>
                                                <td>
                                                    <textarea class='text_blog_en form-control'><?php
                                                                                                echo $sql_blog_en['text'];
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
                    <button class='button_change_dir_am blog_change_en'> Կատարել փոփոխություն</button>
                </div>

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Կատարել փոփոխություններ ԲԼՈԳ ռուսերենում
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable3" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>N</th>
                                        <th>ЗАГЛАВИЕ(no more than 250 symbols)</th>
                                        <th class='wide_td'>ТЕКСТ</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>N</th>
                                        <th>ЗАГЛАВИЕ(no more than 250 symbols)</th>
                                        <th class='wide_td'>ТЕКСТ</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php if ((mysqli_num_rows($result_blog_ru) > 0)) {
                                        $k = 1;
                                        while ($sql_blog_ru = mysqli_fetch_assoc($result_blog_ru)) {
                                    ?>
                                            <tr>
                                                <td><?php
                                                    echo $k;
                                                    ?></td>
                                                <td>
                                                    <input type='text' maxlength="250" class='title_blog_ru form-control' value='<?php
                                                                                                                                    echo $sql_blog_ru['title'];
                                                                                                                                    ?>'>
                                                </td>
                                                <td>
                                                    <textarea class='text_blog_ru form-control'><?php
                                                                                                echo $sql_blog_ru['text'];
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
                    <button class='button_change_dir_am blog_change_ru'> Կատարել փոփոխություն</button>
                </div>




                <div class="add-article-section">
                    <h1>Ավելացնել բլոգ</հ1>
                </div>
                <form onsubmit='return false' action="" method="post" enctype="multipart/form-data" id="form_upload_data">
                    <div class='mt-4'>
                        <label>
                            <input type="file" id="blog_img" style="display:none" name="blog_img">
                            <div class='upload-imb-btn mb-1 mt-3' id='select_img'>Ներբեռնել գլխավոր նկարը</div>
                        </label>
                        <button class="delete delete-margin-right" id='remove_uploaded_img'>Չեղարկել</button>
                    </div>
                    <div class='for_select_blog'>
                        <select class="blog_category mb-5 form-control" name="blog_category" id="blog_category">
                            <option value="">Ընտրել կատեգորիան</option>
                            <option value="category 1">Հայաստան</option>
                            <option value="category 2">Կոտայքի մարզ</option>
                            <option value="category 3">Սևաբերդ</option>
                            <option value="category 4">Պատմամշակութային վայրեր</option>
                            <option value="category 5">Ժամանցի վայրեր</option>
                        </select>
                    </div>
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <tr>
                            <th>Հայերեն լեզվով վերնագիր</th>
                            <th class='wide_td'>Հայերեն լեզվով տեքստ</th>
                        </tr>
                        <tr>
                            <td>
                                <input id='blogs-am-title' name='blogs-am-title' type='text' maxlength="250" class='title_dir_en form-control'>
                            </td>
                            <td>
                                <textarea id='blogs-am-text' name='blogs-am-text' class='text_dir_en form-control'></textarea>
                            </td>
                        </tr>
                        <tr>
                            <th>Title in English</th>
                            <th class='wide_td'>Text in English</th>
                        </tr>
                        <tr>
                            <td>
                                <input id='blogs-en-title' name='blogs-en-title' type='text' maxlength="250" class='title_dir_en form-control'>
                            </td>
                            <td>
                                <textarea id='blogs-en-text' name='blogs-en-text' class='text_dir_en form-control'></textarea>
                            </td>
                        </tr>
                        <tr>
                            <th>Заглавие на русском языке</th>
                            <th class='wide_td'>ТЕКСТ на русском языке</th>
                        </tr>
                        <tr>
                            <td>
                                <input id='blogs-ru-title' name='blogs-ru-title' type='text' maxlength="250" class='title_dir_en form-control'>
                            </td>
                            <td>
                                <textarea id='blogs-ru-text' name='blogs-ru-text' class='text_dir_en form-control'></textarea>
                            </td>
                        </tr>
                        <tbody>
                        </tbody>
                    </table>
                    <div class="make-change">
                        <button id='add-blog-submit' class='button_change_dir_am' data-toggle="modal" data-target="#submit_blog_modal"> Հաստատել</button>
                        <button class="delete delete-margin-right" id='remove-texts'>Չեղարկել</button>
                    </div>
                </form>


                <!-- modalsubmit -->
                <div class="modal fade" id="submit_blog_modal" role="dialog">
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
    <script src='js/blog.js'></script>
</body>

</html>