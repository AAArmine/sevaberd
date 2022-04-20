<?php
include "../db_configuration/configuration.php";

$sql_menu_fav_am = "SELECT * from menu_fav_am";
$result_menu_fav_am = mysqli_query($con, $sql_menu_fav_am);


$sql_menu_fav_en = "SELECT * from menu_fav_en";
$result_menu_fav_en = mysqli_query($con, $sql_menu_fav_en);


$sql_menu_fav_ru = "SELECT * from menu_fav_ru";
$result_menu_fav_ru = mysqli_query($con, $sql_menu_fav_ru);

// whole menu

$sql_menu_am = "SELECT * from menu_am";
$result_menu_am = mysqli_query($con, $sql_menu_am);


$sql_menu_en = "SELECT * from menu_en";
$result_menu_en = mysqli_query($con, $sql_menu_en);


$sql_menu_ru = "SELECT * from menu_ru";
$result_menu_ru = mysqli_query($con, $sql_menu_ru);



?>
<?php include "header.php" ?>

<body class="sb-nav-fixed">
    <script src='js/menu.js'></script>

    <?php include "navMain.php" ?>
    <div id="layoutSidenav_content">


        <!-------------------- main ---------------------------->
        <main>
            <div class="container-fluid">
                <h2 class="mt-4 caption-main">Ամենասիրելի ուտեստները</h2>
                <div class="bold-line"></div>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Ամենասիրելի ուտեստները <b>հայերեն</b>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Ուտեստի անուն(ոչ ավել քան 90 սիմվոլ)</th>
                                        <th>Նկարագրություն(ոչ ավել քան 300 սիմվոլ)</th>
                                        <th>Փոխել նկարը</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>

                                        <th>Ուտեստի անուն(ոչ ավել քան 90 սիմվոլ)</th>
                                        <th>Նկարագրություն(ոչ ավել քան 300 սիմվոլ)</th>
                                        <th>Փոխել նկարը</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <form onsubmit='return false' action="" method="post" enctype="multipart/form-data" id="form_upload_data_favimg">
                                        <?php
                                        if ((mysqli_num_rows($result_menu_fav_am) > 0)) {
                                            $k = 1;
                                            while ($sql_menu_fav_am = mysqli_fetch_assoc($result_menu_fav_am)) {
                                        ?>
                                                <tr>
                                                    <td>
                                                        <input type='text' name='fav_change_dishname[]' maxlength="90" class='menu_fav_title_am form-control' value='<?php echo $sql_menu_fav_am['name_fav_menu']; ?>' datatype='<?php echo $sql_menu_fav_am['id']; ?>'>
                                                    </td>
                                                    <td>
                                                        <textarea maxlength="300" name='fav_change_dishdesc[]' class='menu_fav_text_am form-control'><?php echo  $sql_menu_fav_am['desc_fav_menu']; ?></textarea>
                                                    </td>
                                                    <td>
                                                        <label>
                                                            <div class="change_fav_img">
                                                                Փոխել նկարը
                                                            </div>
                                                            <input type="file" class='change_fav_imgInput' style="display:none" name="menu_fav_img[]">

                                                        </label>
                                                        <input type="hidden" name='favid[]' value='<?php echo $sql_menu_fav_am['id']; ?>'>

                                                    </td>
                                                </tr>

                                        <?php
                                            }
                                        }
                                        ?>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="make-change">
                    <button type='submit' class='button_change_dir_am button_menu_fav_am'> Կատարել փոփոխություն</button>
                </div>
                </form>

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Ամենասիրելի ուտեստները <b>անգլերեն</b>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Name of the dish(no more than 90 symbols)</th>
                                        <th>Description(no more than 300 symbols)</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Name of the dish(no more than 90 symbols)</th>
                                        <th>Description(no more than 300 symbols)</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php
                                    if ((mysqli_num_rows($result_menu_fav_en) > 0)) {
                                        $k = 1;
                                        while ($sql_menu_fav_en = mysqli_fetch_assoc($result_menu_fav_en)) {
                                    ?>
                                            <tr>
                                                <td>
                                                    <input type='text' maxlength="90" class='menu_fav_title_en form-control' value='<?php echo $sql_menu_fav_en['name_fav_menu']; ?>' datatype='<?php echo $sql_menu_fav_en['id']; ?>'>
                                                </td>
                                                <td>
                                                    <textarea maxlength="300" class='menu_fav_text_en form-control'><?php echo  $sql_menu_fav_en['desc_fav_menu']; ?></textarea>
                                                </td>
                                            </tr>

                                    <?php
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="make-change">
                    <button class='button_change_dir_am button_menu_fav_en'> Կատարել փոփոխություն</button>
                </div>

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Ամենասիրելի ուտեստները <b>ռուսերեն</b>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable_adv_ru" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Название блюда(не более 90 символов)</th>
                                        <th>Описание(не более 300 символов)</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Название блюда(не более 90 символов)</th>
                                        <th>Описание(не более 300 символов)</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php
                                    if ((mysqli_num_rows($result_menu_fav_ru) > 0)) {
                                        $k = 1;
                                        while ($sql_menu_fav_ru = mysqli_fetch_assoc($result_menu_fav_ru)) {
                                    ?>
                                            <tr>
                                                <td>
                                                    <input type='text' maxlength="90" class='menu_fav_title_ru form-control' value='<?php echo $sql_menu_fav_ru['name_fav_menu']; ?>' datatype='<?php echo $sql_menu_fav_ru['id']; ?>'>
                                                </td>
                                                <td>
                                                    <textarea maxlength="300" class='menu_fav_text_ru form-control'><?php echo  $sql_menu_fav_ru['desc_fav_menu']; ?></textarea>
                                                </td>
                                            </tr>

                                    <?php
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="make-change">
                    <button class='button_change_dir_am button_menu_fav_ru'> Կատարել փոփոխություն</button>
                </div>



            </div>
            <div class="container-fluid">
                <h2 class="mt-4 caption-main">Ամբողջ մենյուի ցանկ</h2>
                <div class="bold-line"></div>

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Կատարել փոփոխություներ հայերեն մենյուի ցանկում
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id='dataTable' width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>N</th>
                                        <th>Ուտեստի անվանում (ոչ ավել քան 90 նիշ)</th>
                                        <th class='wide_td'>նկարագրություն(ոչ ավել քան 350 նիշ)</th>
                                        <th>Ընտրել կատեգորիան</th>
                                        <th>Փոխել նկարը</th>
                                        <th>Ջնջել</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>N</th>
                                        <th>Ուտեստի անվանում (ոչ ավել քան 90 նիշ)</th>
                                        <th>նկարագրություն(ոչ ավել քան 350 նիշ)</th>
                                        <th>Ընտրել կատեգորիան</th>
                                        <th>Փոխել նկարը</th>
                                        <th>Ջնջել</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php if ((mysqli_num_rows($result_menu_am) > 0)) {
                                        $k = 1;
                                        while ($sql_menu_am = mysqli_fetch_assoc($result_menu_am)) {
                                    ?>
                                            <tr>
                                                <td><?php echo $k; ?></td>
                                                <td>
                                                    <input type='text' maxlength="90" datatype="<?php echo $sql_menu_am['id']; ?>" class='name_menu_am form-control' value='<?php echo $sql_menu_am['menu_name']; ?>'>
                                                </td>
                                                <td>
                                                    <textarea class='text_menu_am form-control' maxlength="350"><?php echo $sql_menu_am['menu_description']; ?></textarea>
                                                </td>
                                                <td>
                                                    <select name="cars" class="menu_am_category form-control" id="pickCategory">
                                                        <option value="Տաք ուտեստներ" <?php if ($sql_menu_am['category'] == 'Տաք ուտեստներ') {
                                                                                            echo "selected";
                                                                                        } ?>>Տաք ուտեստներ</option>
                                                        <option value="Նախաուտեստներ" <?php if ($sql_menu_am['category'] == 'Նախաուտեստներ') {
                                                                                            echo "selected";
                                                                                        } ?>>Նախաուտեստներ</option>
                                                        <option value="Աղցաններ" <?php if ($sql_menu_am['category'] == 'Աղցաններ') {
                                                                                        echo "selected";
                                                                                    } ?>>Աղցաններ</option>
                                                        <option value="Խմիչքներ" <?php if ($sql_menu_am['category'] == 'Խմիչքներ') {
                                                                                        echo "selected";
                                                                                    } ?>>Խմիչքներ</option>
                                                        <option value="Աղանդեր" <?php if ($sql_menu_am['category'] == 'Աղանդեր') {
                                                                                    echo "selected";
                                                                                } ?>>Աղանդեր</option>
                                                        <option value="Խավարտներ" <?php if ($sql_menu_am['category'] == 'Խավարտներ') {
                                                                                        echo "selected";
                                                                                    } ?>>Խավարտներ</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <form onsubmit='return false' action="" method="post" enctype="multipart/form-data" class='form_uploadData_class' id="form_upload_data_menuImg_<?php echo $sql_menu_am['id']; ?>">
                                                        <label>
                                                            <div class="change_menu_img">
                                                                Փոխել նկարը
                                                            </div>
                                                            <input type="file" class='change_menu_imgInput' style="display:none" name="menu_change_img">
                                                        </label>
                                                        <input type="hidden" name='menu_Id' value='<?php echo $sql_menu_am['id']; ?>'>

                                                        <div>
                                                            <button class="confirm_menu_img" type='submit'>
                                                                Հաստատել
                                                            </button>
                                                        </div>

                                                    </form>
                                                </td>

                                                <td>
                                                    <button class="delete delete-op" data-toggle="modal" data-target="#Del-Modal_<?php echo $sql_menu_am['id'] ?>">Ջնջել</button>
                                                    <!-- modal-delete -->
                                                    <div id="Del-Modal_<?php echo $sql_menu_am['id'] ?>" class="modal fade" role="dialog">
                                                        <div class="modal-dialog">

                                                            <!-- Modal content-->
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>Դուք վստահ եք, որ ցանկանում եք ջնջել «<?php echo $sql_menu_am['menu_name']; ?>» -ը։</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn delete-confirm" data-dismiss="modal" id='delete-<?php echo $sql_menu_am['id'] ?>'>Այո</button>
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
                    <button class='button_change_dir_am menu_change_am'> Կատարել փոփոխություն</button>
                </div>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Կատարել փոփոխություներ անգլերեն մենյուի ցանկում
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable3" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>N</th>
                                        <th>Name of the dish (not more than 90 characters)</th>
                                        <th class='wide_td'>Description(not more than 350 characters)</th>

                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>N</th>
                                        <th>Name of the dish (not more than 90 characters)</th>
                                        <th class='wide_td'>Description(not more than 350 characters)</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php if ((mysqli_num_rows($result_menu_en) > 0)) {
                                        $k = 1;
                                        while ($sql_menu_en = mysqli_fetch_assoc($result_menu_en)) {
                                    ?>
                                            <tr>
                                                <td><?php echo $k; ?></td>
                                                <td>
                                                    <input type='text' datatype=" <?php echo $sql_menu_en['id']; ?>" maxlength="90" class='name_menu_en form-control' value='<?php echo $sql_menu_en['menu_name']; ?>'>
                                                </td>
                                                <td>
                                                    <textarea class='text_menu_en form-control' maxlength="350"><?php echo $sql_menu_en['menu_description']; ?></textarea>
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
                    <button class='button_change_dir_en menu_change_en'> Կատարել փոփոխություն</button>
                </div>

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Կատարել փոփոխություներ ռուսերեն մենյուի ցանկում
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable2" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>N</th>
                                        <th>Название блюда(не более 90 символов)</th>
                                        <th class='wide_td'>Описание(не более 350 символов)</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>N</th>
                                        <th>Название блюда(не более 90 символов)</th>
                                        <th class='wide_td'>Описание(не более 350 символов)</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php if ((mysqli_num_rows($result_menu_ru) > 0)) {
                                        $k = 1;
                                        while ($sql_menu_ru = mysqli_fetch_assoc($result_menu_ru)) {
                                    ?>
                                            <tr>
                                                <td><?php echo $k; ?></td>
                                                <td>
                                                    <input datatype="<?php echo $sql_menu_ru['id']; ?>" type='text' maxlength="90" class='name_menu_ru form-control' value='<?php echo $sql_menu_ru['menu_name']; ?>'>
                                                </td>
                                                <td>
                                                    <textarea class='text_menu_ru form-control' maxlength="350"><?php echo $sql_menu_ru['menu_description']; ?></textarea>

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
                    <button class='button_change_dir_ru menu_change_ru'> Կատարել փոփոխություն</button>
                </div>



                <!-- add menu -->
                <div class="add-article-section">
                    <h1>Ավելացնել նոր մենյու</հ1>
                </div>
                <form onsubmit='return false' action="" method="post" enctype="multipart/form-data" id="form_upload_data">
                    <div class='mt-4'>
                        <label>
                            <input type="file" id="menu_img" style="display:none" name="menu_img">
                            <div class='upload-imb-btn mb-1 mt-3' id='select_img'>Ներբեռնել գլխավոր նկարը</div>
                        </label>
                        <button class="delete delete-margin-right" id='remove_uploaded_img'>Չեղարկել</button>
                    </div>
                    <select id="select_category" name="menu_category">
                        <option value="">Ընտրել կատեգորիան</option>
                        <option value="Տաք ուտեստներ">Տաք ուտեստներ</option>
                        <option value="Նախաուտեստներ">Նախաուտեստներ</option>
                        <option value="Աղցաններ">Աղցաններ</option>
                        <option value="Խմիչքներ">Խմիչքներ</option>
                        <option value="Աղանդեր">Աղանդեր</option>
                        <option value="Խավարտներ">Խավարտներ</option>
                    </select>
                    <div>
                        <input id='write_price' name="menu_price" type="number" placeholder='Ներմուծեք գինը դրամով'>
                    </div>

                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <tr>
                            <th>Հայերեն լեզվով Ուտեստի անուն (ոչ ավել քան 90 նիշ)</th>
                            <th class='wide_td'>Հայերեն լեզվով նկարագրություն (ոչ ավել քան 350 նիշ)</th>
                        </tr>
                        <tr>
                            <td>
                                <input id='menu-am-name' name='menu-am-name' type='text' maxlength="90" class='title_dir_en form-control'>
                            </td>
                            <td>
                                <textarea id='menu-am-text' maxlength="350" name='menu-am-text' class='text_dir_en form-control'></textarea>
                            </td>
                        </tr>
                        <tr>
                            <th>Name of the dish (not more than 90 characters)</th>
                            <th class='wide_td'>Description(not more than 350 characters)</th>
                        </tr>
                        <tr>
                            <td>
                                <input id='menu-en-name' name='menu-en-name' type='text' maxlength="90" class='title_dir_en form-control'>
                            </td>
                            <td>
                                <textarea id='menu-en-text' maxlength="350" name='menu-en-text' class='text_dir_en form-control'></textarea>
                            </td>
                        </tr>
                        <tr>
                            <th>Название блюда(не более 90 символов)</th>
                            <th class='wide_td'>Описание(не более 350 символов)</th>
                        </tr>
                        <tr>
                            <td>
                                <input id='menu-ru-name' name='menu-ru-name' type='text' maxlength="90" class='title_dir_en form-control'>
                            </td>
                            <td>
                                <textarea id='menu-ru-text' maxlength="350" name='menu-ru-text' class='text_dir_en form-control'></textarea>
                            </td>
                        </tr>
                        <tbody>
                        </tbody>
                    </table>
                    <div class="make-change">
                        <button id='add-menus-submit' class='button_change_dir_am' data-toggle="modal" data-target="#submit_menus_modal"> Հաստատել</button>
                        <button class="delete delete-margin-right" id='remove-texts'>Չեղարկել</button>
                    </div>
                </form>


                <!-- modalsubmit -->
                <div class="modal fade" id="submit_menus_modal" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <div id='modal-show-input'>Գլխավոր նկարը, գինը կամ կատեգորիան ընտրված չէ, կամ բոլոր դաշտերը ներմուծված չեն</div>
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

</body>

</html>