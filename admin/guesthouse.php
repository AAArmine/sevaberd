<?php
include "../db_configuration/configuration.php";
// guesthouse main
$sql_guesthouse_main_am = "SELECT * from guesthouse_main_am where id='1'";
$result_guesthouse_main_am = mysqli_query($con, $sql_guesthouse_main_am);
if (mysqli_num_rows($result_guesthouse_main_am)) {
    $row_main_am = mysqli_fetch_assoc($result_guesthouse_main_am);
}

$sql_guesthouse_main_en = "SELECT * from guesthouse_main_en where id='1'";
$result_guesthouse_main_en = mysqli_query($con, $sql_guesthouse_main_en);
if (mysqli_num_rows($result_guesthouse_main_en)) {
    $row_main_en = mysqli_fetch_assoc($result_guesthouse_main_en);
}

$sql_guesthouse_main_ru = "SELECT * from guesthouse_main_ru where id='1'";
$result_guesthouse_main_ru = mysqli_query($con, $sql_guesthouse_main_ru);
if (mysqli_num_rows($result_guesthouse_main_ru)) {
    $row_main_ru = mysqli_fetch_assoc($result_guesthouse_main_ru);
}

// guesthouse about

$sql_guesthouse_about_am = "SELECT * from guesthouse_about_am where id='1'";
$result_guesthouse_about_am = mysqli_query($con, $sql_guesthouse_about_am);
if (mysqli_num_rows($result_guesthouse_about_am)) {
    $row_about_am = mysqli_fetch_assoc($result_guesthouse_about_am);
}

$sql_guesthouse_about_en = "SELECT * from guesthouse_about_en where id='1'";
$result_guesthouse_about_en = mysqli_query($con, $sql_guesthouse_about_en);
if (mysqli_num_rows($result_guesthouse_about_en)) {
    $row_about_en = mysqli_fetch_assoc($result_guesthouse_about_en);
}

$sql_guesthouse_about_ru = "SELECT * from guesthouse_about_ru where id='1'";
$result_guesthouse_about_ru = mysqli_query($con, $sql_guesthouse_about_ru);
if (mysqli_num_rows($result_guesthouse_about_ru)) {
    $row_about_ru = mysqli_fetch_assoc($result_guesthouse_about_ru);
}



//guesthouse values

$sql_values_am = "SELECT * from guesthouse_values_am";
$result_values_am = mysqli_query($con, $sql_values_am);


$sql_values_en = "SELECT * from guesthouse_values_en";
$result_values_en = mysqli_query($con, $sql_values_en);


$sql_values_ru = "SELECT * from guesthouse_values_ru";
$result_values_ru = mysqli_query($con, $sql_values_ru);


// guest special offers


?>
<?php include "header.php" ?>

<body class="sb-nav-fixed">

    <?php include "navMain.php" ?>
    <div id="layoutSidenav_content">


        <!-------------------- main ---------------------------->
        <main>
            <div class="container-fluid">
                <h2 class="mt-4 caption-main">Հյուրատուն(Էջի վերևի հիմնական նկարի ֆոնի տեքստ/1 section)</h2>
                <div class="bold-line"></div>

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Հյուրատուն <b>հայերեն</b> (Էջի վերևի հիմնական նկարի ֆոնին)
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>ՎԵՐՆԱԳԻՐ(ոչ ավել քան 70 սիմվոլ)</th>
                                        <th>ՏԵՔՍՏ(ոչ ավել քան 500 սիմվոլ)</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>

                                        <th>ՎԵՐՆԱԳԻՐ</th>
                                        <th>ՏԵՔՍՏ(ոչ ավել քան 500 սիմվոլ)</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td>
                                            <input type='text' maxlength="70" class='guesthouse_main_title_am form-control' value='<?php echo $row_main_am['title_main']; ?>'>
                                        </td>
                                        <td>
                                            <textarea maxlength="500" class='guesthouse_main_text_am form-control'><?php echo  $row_main_am['text_main']; ?></textarea>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="make-change">
                    <button class='button_change_dir_am button_guesthouse_main_am'> Կատարել փոփոխություն</button>
                </div>

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Հյուրատուն <b>անգլերեն</b>(Էջի վերևի հիմնական նկարի ֆոնին)
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable2" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>TITLE</th>
                                        <th>TEXT(no more than 500 symbols)</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>TITLE</th>
                                        <th>TEXT(no more than 500 symbols</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td>
                                            <input type='text' maxlength="70" class='guesthouse_main_title_en form-control' value='<?php echo $row_main_en['title_main']; ?>'>
                                        </td>
                                        <td>
                                            <textarea maxlength="500" class='guesthouse_main_text_en form-control'><?php echo  $row_main_en['text_main']; ?></textarea>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="make-change">
                    <button class='button_change_dir_am button_guesthouse_main_en'> Կատարել փոփոխություն</button>
                </div>



                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Հյուրատուն <b>ռուսերեն</b>(Էջի վերևի հիմնական նկարի ֆոնին)
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable3" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>ЗАГЛАВИЕ</th>
                                        <th>ТЕКСТ(не более 500 символов)</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>ЗАГЛАВИЕ</th>
                                        <th>ТЕКСТ(не более 500 символов)</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td>
                                            <input type='text' maxlength="70" class='guesthouse_main_title_ru  form-control' value='<?php echo $row_main_ru['title_main']; ?>'>
                                        </td>
                                        <td>
                                            <textarea maxlength="500" class='guesthouse_main_text_ru  form-control'><?php echo  $row_main_ru['text_main']; ?></textarea>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="make-change">
                    <button class='button_change_dir_am button_guesthouse_main_ru'> Կատարել փոփոխություն</button>
                </div>



                <!-- guesthouse about -->
                <h2 class="mt-4 caption-main">Հյուրատուն(Սևաբերդ Հյուրատան մասին/2 section)</h2>
                <div class="bold-line"></div>


                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Սևաբերդ Հյուրատան մասին <b>հայերեն</b> (2 section)
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>ՎԵՐՆԱԳԻՐ(ոչ ավել քան 70 սիմվոլ)</th>
                                        <th>ՏԵՔՍՏ(ոչ ավել քան 500 սիմվոլ)</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>

                                        <th>ՎԵՐՆԱԳԻՐ</th>
                                        <th>ՏԵՔՍՏ(ոչ ավել քան 500 սիմվոլ)</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td>
                                            <input type='text' maxlength="70" class='guesthouse_about_title_am form-control' value='<?php echo $row_about_am['title_about']; ?>'>
                                        </td>
                                        <td>
                                            <textarea maxlength="500" class='guesthouse_about_text_am form-control'><?php echo  $row_about_am['text_about']; ?></textarea>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="make-change">
                    <button class='button_change_dir_am button_guesthouse_about_am'> Կատարել փոփոխություն</button>
                </div>

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Սևաբերդ Հյուրատան մասին <b>անգլերեն</b> (2 section)
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Text(no more than 500 symbols)</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>

                                        <th>Title</th>
                                        <th>Text(no more than 500 symbols)</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td>
                                            <input type='text' maxlength="70" class='guesthouse_about_title_en form-control' value='<?php echo $row_about_en['title_about']; ?>'>
                                        </td>
                                        <td>
                                            <textarea maxlength="500" class='guesthouse_about_text_en form-control'><?php echo  $row_about_en['text_about']; ?></textarea>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="make-change">
                    <button class='button_change_dir_am button_guesthouse_about_en'> Կատարել փոփոխություն</button>
                </div>

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Սևաբերդ Հյուրատան մասին <b>ռուսերեն</b> (2 section)
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>ЗАГЛАВИЕ</th>
                                        <th>ТЕКСТ(не более 500 символов)</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>ЗАГЛАВИЕ</th>
                                        <th>ТЕКСТ(не более 500 символов)</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td>
                                            <input type='text' maxlength="70" class='guesthouse_about_title_ru form-control' value='<?php echo $row_about_ru['title_about']; ?>'>
                                        </td>
                                        <td>
                                            <textarea maxlength="500" class='guesthouse_about_text_ru form-control'><?php echo  $row_about_ru['text_about']; ?></textarea>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="make-change">
                    <button class='button_change_dir_am button_guesthouse_about_ru'> Կատարել փոփոխություն</button>
                </div>





                <h2 class="mt-4 caption-main">Արժեքներ ("Մեր արժեքները" բաժին)</h2>
                <div class="bold-line"></div>


                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Արժեքներ <b>հայերեն</b>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable1_val_am" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>ՎԵՐՆԱԳԻՐ(ոչ ավել քան 50 սիմվոլ)</th>
                                        <th>ՏԵՔՍՏ(ոչ ավել քան 500 սիմվոլ)</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>

                                        <th>ՎԵՐՆԱԳԻՐ(ոչ ավել քան 50 սիմվոլ)</th>
                                        <th>ՏԵՔՍՏ(ոչ ավել քան 500 սիմվոլ)</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php
                                    if ((mysqli_num_rows($result_values_am) > 0)) {
                                        $k = 1;
                                        while ($sql_values_am = mysqli_fetch_assoc($result_values_am)) {
                                    ?>
                                            <tr>
                                                <td>
                                                    <input type='text' maxlength="70" class='values_title_am form-control' value='<?php echo $sql_values_am['title_val']; ?>' datatype='<?php echo $sql_values_am['id']; ?>'>
                                                </td>
                                                <td>
                                                    <textarea maxlength="500" class='values_text_am form-control'><?php echo  $sql_values_am['text_val']; ?></textarea>
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
                    <button class='button_change_dir_am button_values_am'> Կատարել փոփոխություն</button>
                </div>

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Առավելություններ <b>անգլերեն</b>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable_val_en" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Title(no more than 50 symbols)</th>
                                        <th>Text(no more than 250 symbols)</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Title(no more than 50 symbols)</th>
                                        <th>Text(no more than 250 symbols)</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php
                                    if ((mysqli_num_rows($result_values_en) > 0)) {
                                        $k = 1;
                                        while ($sql_values_en = mysqli_fetch_assoc($result_values_en)) {
                                    ?>
                                            <tr>
                                                <td>
                                                    <input type='text' maxlength="70" class='values_title_en form-control' value='<?php echo $sql_values_en['title_val']; ?>' datatype='<?php echo $sql_values_en['id']; ?>'>
                                                </td>
                                                <td>
                                                    <textarea maxlength="500" class='values_text_en form-control'><?php echo  $sql_values_en['text_val']; ?></textarea>
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
                    <button class='button_change_dir_am button_values_en'> Կատարել փոփոխություն</button>
                </div>

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Առավելություններ <b>ռուսերեն</b>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable_ru" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>ЗАГЛАВИЕ(не более 50 символов)</th>
                                        <th>ТЕКСТ(не более 250 символов)</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>ЗАГЛАВИЕ(не более 50 символов)</th>
                                        <th>ТЕКСТ(не более 250 символов)</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php
                                    if ((mysqli_num_rows($result_values_ru) > 0)) {
                                        $k = 1;
                                        while ($sql_values_ru = mysqli_fetch_assoc($result_values_ru)) {
                                    ?>
                                            <tr>
                                                <td>
                                                    <input type='text' maxlength="70" class='values_title_ru form-control' value='<?php echo $sql_values_ru['title_val']; ?>' datatype='<?php echo $sql_values_ru['id']; ?>'>
                                                </td>
                                                <td>
                                                    <textarea maxlength="500" class='values_text_ru form-control'><?php echo  $sql_values_ru['text_val']; ?></textarea>
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
                    <button class='button_change_dir_am button_values_ru'> Կատարել փոփոխություն</button>
                </div>


                <!-- hatuk arajarkner hyuratun -->
                <!--end hatuk arajarkner hyuratun -->






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
    <script src='js/guesthouse.js'></script>
</body>

</html>