<?php
include "../db_configuration/configuration.php";
// restaurant main
$sql_restaurant_main_am = "SELECT * from restaurant_main_am where id='1'";
$result_restaurant_main_am = mysqli_query($con, $sql_restaurant_main_am);
if (mysqli_num_rows($result_restaurant_main_am)) {
    $row_main_am = mysqli_fetch_assoc($result_restaurant_main_am);
}

$sql_restaurant_main_en = "SELECT * from restaurant_main_en where id='1'";
$result_restaurant_main_en = mysqli_query($con, $sql_restaurant_main_en);
if (mysqli_num_rows($result_restaurant_main_en)) {
    $row_main_en = mysqli_fetch_assoc($result_restaurant_main_en);
}

$sql_restaurant_main_ru = "SELECT * from restaurant_main_ru where id='1'";
$result_restaurant_main_ru = mysqli_query($con, $sql_restaurant_main_ru);
if (mysqli_num_rows($result_restaurant_main_ru)) {
    $row_main_ru = mysqli_fetch_assoc($result_restaurant_main_ru);
}

// restourant about

$sql_restaurant_about_am = "SELECT * from restaurant_about_am where id='1'";
$result_restaurant_about_am = mysqli_query($con, $sql_restaurant_about_am);
if (mysqli_num_rows($result_restaurant_about_am)) {
    $row_about_am = mysqli_fetch_assoc($result_restaurant_about_am);
}

$sql_restaurant_about_en = "SELECT * from restaurant_about_en where id='1'";
$result_restaurant_about_en = mysqli_query($con, $sql_restaurant_about_en);
if (mysqli_num_rows($result_restaurant_about_en)) {
    $row_about_en = mysqli_fetch_assoc($result_restaurant_about_en);
}

$sql_restaurant_about_ru = "SELECT * from restaurant_about_ru where id='1'";
$result_restaurant_about_ru = mysqli_query($con, $sql_restaurant_about_ru);
if (mysqli_num_rows($result_restaurant_about_ru)) {
    $row_about_ru = mysqli_fetch_assoc($result_restaurant_about_ru);
}



// restourant advantages

$sql_restaurant_adv_am = "SELECT * from restaurant_adv_am ";
$result_restaurant_adv_am = mysqli_query($con, $sql_restaurant_adv_am);


$sql_restaurant_adv_en = "SELECT * from restaurant_adv_en";
$result_restaurant_adv_en = mysqli_query($con, $sql_restaurant_adv_en);


$sql_restaurant_adv_ru = "SELECT * from restaurant_adv_ru";
$result_restaurant_adv_ru = mysqli_query($con, $sql_restaurant_adv_ru);

// your events with us 3

$sql_restaurant_events_am = "SELECT * from restaurant_events_am ";
$result_restaurant_events_am = mysqli_query($con, $sql_restaurant_events_am);


$sql_restaurant_events_en = "SELECT * from restaurant_events_en";
$result_restaurant_events_en = mysqli_query($con, $sql_restaurant_events_en);


$sql_restaurant_events_ru = "SELECT * from restaurant_events_ru";
$result_restaurant_events_ru = mysqli_query($con, $sql_restaurant_events_ru);

?>
<?php include "header.php" ?>

<body class="sb-nav-fixed">

    <?php include "navMain.php" ?>
    <div id="layoutSidenav_content">


        <!-------------------- main ---------------------------->
        <main>
            <div class="container-fluid">
                <h2 class="mt-4 caption-main">????????????????(?????? ?????????? ???????????????? ?????????? ???????? ??????????/1 section)</h2>
                <div class="bold-line"></div>

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        ???????????????? <b>??????????????</b> (?????? ?????????? ???????????????? ?????????? ??????????)
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>????????????????</th>
                                        <th>??????????(???? ???????? ?????? 500 ????????????)</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>

                                        <th>????????????????</th>
                                        <th>??????????(???? ???????? ?????? 500 ????????????)</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td>
                                            <input type='text' maxlength="70" class='restaurant_main_title_am form-control' value='<?php echo $row_main_am['title_main']; ?>'>
                                        </td>
                                        <td>
                                            <textarea maxlength="500" class='restaurant_main_text_am form-control'><?php echo  $row_main_am['text_main']; ?></textarea>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="make-change">
                    <button class='button_change_dir_am button_restaurant_main_am'> ?????????????? ????????????????????????</button>
                </div>

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        ???????????????? <b>????????????????</b>(?????? ?????????? ???????????????? ?????????? ??????????)
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
                                            <input type='text' maxlength="70" class='restaurant_main_title_en form-control' value='<?php echo $row_main_en['title_main']; ?>'>
                                        </td>
                                        <td>
                                            <textarea maxlength="500" class='restaurant_main_text_en form-control'><?php echo  $row_main_en['text_main']; ?></textarea>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="make-change">
                    <button class='button_change_dir_am button_restaurant_main_en'> ?????????????? ????????????????????????</button>
                </div>



                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        ???????????????? <b>????????????????</b>(?????? ?????????? ???????????????? ?????????? ??????????)
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable3" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>????????????????</th>
                                        <th>??????????(???? ?????????? 500 ????????????????)</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>????????????????</th>
                                        <th>??????????(???? ?????????? 500 ????????????????)</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td>
                                            <input type='text' maxlength="70" class='restaurant_main_title_ru  form-control' value='<?php echo $row_main_ru['title_main']; ?>'>
                                        </td>
                                        <td>
                                            <textarea maxlength="500" class='restaurant_main_text_ru  form-control'><?php echo  $row_main_ru['text_main']; ?></textarea>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="make-change">
                    <button class='button_change_dir_am button_restaurant_main_ru'> ?????????????? ????????????????????????</button>
                </div>



                <!-- restaurant about -->
                <h2 class="mt-4 caption-main">????????????????(?????????????? ?????????????????? ??????????/2 section)</h2>
                <div class="bold-line"></div>


                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        ?????????????? ?????????????????? ?????????? <b>??????????????</b> (2 section)
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>????????????????</th>
                                        <th>??????????(???? ???????? ?????? 700 ????????????)</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>

                                        <th>????????????????</th>
                                        <th>??????????(???? ???????? ?????? 700 ????????????)</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td>
                                            <input type='text' maxlength="70" class='restaurant_about_title_am form-control' value='<?php echo $row_about_am['title_about']; ?>'>
                                        </td>
                                        <td>
                                            <textarea maxlength="500" class='restaurant_about_text_am form-control'><?php echo  $row_about_am['text_about']; ?></textarea>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="make-change">
                    <button class='button_change_dir_am button_restaurant_about_am'> ?????????????? ????????????????????????</button>
                </div>

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        ?????????????? ?????????????????? ?????????? <b>????????????????</b> (2 section)
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Text(no more than 700 symbols)</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>

                                        <th>Title</th>
                                        <th>Text(no more than 700 symbols)</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td>
                                            <input type='text' maxlength="70" class='restaurant_about_title_en form-control' value='<?php echo $row_about_en['title_about']; ?>'>
                                        </td>
                                        <td>
                                            <textarea maxlength="500" class='restaurant_about_text_en form-control'><?php echo  $row_about_en['text_about']; ?></textarea>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="make-change">
                    <button class='button_change_dir_am button_restaurant_about_en'> ?????????????? ????????????????????????</button>
                </div>

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        ?????????????? ?????????????????? ?????????? <b>????????????????</b> (2 section)
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>????????????????</th>
                                        <th>??????????(???? ?????????? 700 ????????????????)</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>????????????????</th>
                                        <th>??????????(???? ?????????? 700 ????????????????)</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td>
                                            <input type='text' maxlength="70" class='restaurant_about_title_ru form-control' value='<?php echo $row_about_ru['title_about']; ?>'>
                                        </td>
                                        <td>
                                            <textarea maxlength="500" class='restaurant_about_text_ru form-control'><?php echo  $row_about_ru['text_about']; ?></textarea>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="make-change">
                    <button class='button_change_dir_am button_restaurant_about_ru'> ?????????????? ????????????????????????</button>
                </div>

                <h2 class="mt-4 caption-main">????????????????????????????????</h2>
                <div class="bold-line"></div>


                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        ???????????????????????????????? <b>??????????????</b>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable1_adv_am" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>????????????????(???? ???????? ?????? 50 ????????????)</th>
                                        <th>??????????(???? ???????? ?????? 250 ????????????)</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>

                                        <th>????????????????(???? ???????? ?????? 50 ????????????)</th>
                                        <th>??????????(???? ???????? ?????? 250 ????????????)</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php
                                    if ((mysqli_num_rows($result_restaurant_adv_am) > 0)) {
                                        $k = 1;
                                        while ($sql_restaurant_adv_am = mysqli_fetch_assoc($result_restaurant_adv_am)) {
                                    ?>
                                            <tr>
                                                <td>
                                                    <input type='text' maxlength="50" class='restaurant_adv_title_am form-control' value='<?php echo $sql_restaurant_adv_am['title_adv']; ?>' datatype='<?php echo $sql_restaurant_adv_am['id']; ?>'>
                                                </td>
                                                <td>
                                                    <textarea maxlength="250" class='restaurant_adv_text_am form-control'><?php echo  $sql_restaurant_adv_am['text_adv']; ?></textarea>
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
                    <button class='button_change_dir_am button_restaurant_adv_am'> ?????????????? ????????????????????????</button>
                </div>

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        ???????????????????????????????? <b>????????????????</b>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable_adv_en" width="100%" cellspacing="0">
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
                                    if ((mysqli_num_rows($result_restaurant_adv_en) > 0)) {
                                        $k = 1;
                                        while ($sql_restaurant_adv_en = mysqli_fetch_assoc($result_restaurant_adv_en)) {
                                    ?>
                                            <tr>
                                                <td>
                                                    <input type='text' maxlength="50" class='restaurant_adv_title_en form-control' value='<?php echo $sql_restaurant_adv_en['title_adv']; ?>' datatype='<?php echo $sql_restaurant_adv_en['id']; ?>'>
                                                </td>
                                                <td>
                                                    <textarea maxlength="250" class='restaurant_adv_text_en form-control'><?php echo  $sql_restaurant_adv_en['text_adv']; ?></textarea>
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
                    <button class='button_change_dir_am button_restaurant_adv_en'> ?????????????? ????????????????????????</button>
                </div>

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        ???????????????????????????????? <b>????????????????</b>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable_adv_ru" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>????????????????(???? ?????????? 50 ????????????????)</th>
                                        <th>??????????(???? ?????????? 250 ????????????????)</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>????????????????(???? ?????????? 50 ????????????????)</th>
                                        <th>??????????(???? ?????????? 250 ????????????????)</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php
                                    if ((mysqli_num_rows($result_restaurant_adv_ru) > 0)) {
                                        $k = 1;
                                        while ($sql_restaurant_adv_ru = mysqli_fetch_assoc($result_restaurant_adv_ru)) {
                                    ?>
                                            <tr>
                                                <td>
                                                    <input type='text' maxlength="50" class='restaurant_adv_title_ru form-control' value='<?php echo $sql_restaurant_adv_ru['title_adv']; ?>' datatype='<?php echo $sql_restaurant_adv_ru['id']; ?>'>
                                                </td>
                                                <td>
                                                    <textarea maxlength="250" class='restaurant_adv_text_ru form-control'><?php echo  $sql_restaurant_adv_ru['text_adv']; ?></textarea>
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
                    <button class='button_change_dir_am button_restaurant_adv_ru'> ?????????????? ????????????????????????</button>
                </div>


                <!-- mijocarumnery mez het 3 hat -->






                <h2 class="mt-4 caption-main">???????? ?????? ???????????????????????????? ?????? ?????? (3 items)</h2>
                <div class="bold-line"></div>


                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        ???????? ?????? ???????????????????????????? ?????? ?????? <b>??????????????</b>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable1_event3_am" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>????????????????(???? ???????? ?????? 50 ????????????)</th>
                                        <th>??????????(???? ???????? ?????? 250 ????????????)</th>
                                        <th>?????????? ??????????</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>

                                        <th>????????????????(???? ???????? ?????? 50 ????????????)</th>
                                        <th>??????????(???? ???????? ?????? 250 ????????????)</th>
                                        <th>?????????? ??????????</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <form onsubmit='return false' action="" method="post" enctype="multipart/form-data" id="form_data_your_events">
                                        <?php
                                        if ((mysqli_num_rows($result_restaurant_events_am) > 0)) {
                                            $k = 1;
                                            while ($sql_restaurant_events_am = mysqli_fetch_assoc($result_restaurant_events_am)) {
                                        ?>
                                                <tr>
                                                    <td>
                                                        <input type='text' name='restaurant_events_name[]' maxlength="90" class='restaurant_events_title_am form-control' value='<?php echo $sql_restaurant_events_am['name_event']; ?>'>


                                                    </td>
                                                    <td>
                                                        <textarea maxlength="350" name='restaurant_events_desc[]' class='restaurant_events_text_am form-control'><?php echo  $sql_restaurant_events_am['desc_event']; ?></textarea>
                                                    </td>
                                                    <td>
                                                        <label>
                                                            <div class="change_fav_img">
                                                                ?????????? ??????????
                                                            </div>
                                                            <input type="file" class='change_fav_imgInput change_event_imgInput' style="display:none" name="restaurant_events_img[]">

                                                        </label>
                                                        <input type="hidden" name='eventid[]' value='<?php echo $sql_restaurant_events_am['id']; ?>'>

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
                    <button type='submit' class='button_change_dir_am button_restaurant_events_am'> ?????????????? ????????????????????????</button>
                </div>
                </form>

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        ???????? ?????? ???????????????????????????? ?????? ?????? <b>????????????????</b>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>TITLE(no more than 90 symbols)</th>
                                        <th>Description(no more than 350 symbols)</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>TITLE (no more than 90 symbols)</th>
                                        <th>Description(no more than 350 symbols)</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php
                                    if ((mysqli_num_rows($result_restaurant_events_en) > 0)) {
                                        $k = 1;
                                        while ($sql_restaurant_events_en = mysqli_fetch_assoc($result_restaurant_events_en)) {
                                    ?>
                                            <tr>
                                                <td>
                                                    <input type='text' maxlength="90" class='restaurant_events_title_en form-control' value='<?php echo $sql_restaurant_events_en['name_event']; ?>' datatype='<?php echo $sql_restaurant_events_en['id']; ?>'>
                                                </td>
                                                <td>
                                                    <textarea maxlength="350" class='restaurant_events_text_en form-control'><?php echo  $sql_restaurant_events_en['desc_event']; ?></textarea>
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
                    <button class='button_change_dir_am button_restaurant_events_en'> ?????????????? ????????????????????????</button>
                </div>

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        ???????? ?????? ???????????????????????????? ?????? ?????? <b>????????????????</b>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable_adv_ru" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>????????????????(???? ?????????? 90 ????????????????)</th>
                                        <th>????????????????(???? ?????????? 350 ????????????????)</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>????????????????(???? ?????????? 90 ????????????????)</th>
                                        <th>????????????????(???? ?????????? 350 ????????????????)</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php
                                    if ((mysqli_num_rows($result_restaurant_events_ru) > 0)) {
                                        $k = 1;
                                        while ($sql_restaurant_events_ru = mysqli_fetch_assoc($result_restaurant_events_ru)) {
                                    ?>
                                            <tr>
                                                <td>
                                                    <input type='text' maxlength="90" class='restaurant_events_title_ru form-control' value='<?php echo $sql_restaurant_events_ru['name_event']; ?>' datatype='<?php echo $sql_restaurant_events_ru['id']; ?>'>
                                                </td>
                                                <td>
                                                    <textarea maxlength="350" class='restaurant_events_text_ru form-control'><?php echo  $sql_restaurant_events_ru['desc_event']; ?></textarea>
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
                    <button class='button_change_dir_am button_restaurant_events_ru'> ?????????????? ????????????????????????</button>
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
    <script src='js/restaurant.js'></script>
</body>

</html>