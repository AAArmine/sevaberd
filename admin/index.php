<?php
include "../db_configuration/configuration.php";
$sql_main_dir_am = "SELECT * from main_directions_am";
$result_main_dir_am = mysqli_query($con, $sql_main_dir_am);

$sql_main_dir_en = "SELECT * from main_directions_en";
$result_main_dir_en = mysqli_query($con, $sql_main_dir_en);

$sql_main_dir_ru = "SELECT * from main_directions_ru";
$result_main_dir_ru = mysqli_query($con, $sql_main_dir_ru);
?>
<?php include "header.php" ?>

<body class="sb-nav-fixed">


    <?php include "navMain.php" ?>


    <div id="layoutSidenav_content">


        <!-------------------- main ---------------------------->
        <main>
            <div class="container-fluid">
                <h2 class="mt-4 caption-main">Հիմնական ուղղությունները</h2>
                <div class="bold-line"></div>

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Կենտրոնի հիմնական ուղղությունները
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>ԲԱԺԻՆ</th>
                                        <th>ՎԵՐՆԱԳԻՐ</th>
                                        <th>ՏԵՔՍՏ(ոչ ավել քան 250 սիմվոլ)</th>

                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>ԲԱԺԻՆ</th>
                                        <th>ՎԵՐՆԱԳԻՐ</th>
                                        <th>ՏԵՔՍՏ</th>

                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php if ((mysqli_num_rows($result_main_dir_am) > 0)) {
                                        while ($sql_main_dir_am = mysqli_fetch_assoc($result_main_dir_am)) {
                                    ?>
                                            <tr>
                                                <td><?php
                                                    echo $sql_main_dir_am['id'];
                                                    ?></td>
                                                <td>
                                                    <input type='text' maxlength="50" class='title_dir_am form-control' value='<?php
                                                                                                                                echo $sql_main_dir_am['dir_title'];
                                                                                                                                ?>'>
                                                </td>
                                                <td>
                                                    <textarea maxlength="250" class='text_dir_am form-control'><?php
                                                                                                                echo $sql_main_dir_am['dir_text'];
                                                                                                                ?></textarea>
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
                    <button class='button_change_dir_am'> Կատարել փոփոխություն</button>
                </div>

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        The main directions of the center
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable2" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>SECTION</th>
                                        <th>TITLE</th>
                                        <th>TEXT(no more than 250 symbols)</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>SECTION</th>
                                        <th>TITLE</th>
                                        <th>TEXT</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php if ((mysqli_num_rows($result_main_dir_en) > 0)) {
                                        while ($sql_main_dir_en = mysqli_fetch_assoc($result_main_dir_en)) {
                                    ?>
                                            <tr>
                                                <td>
                                                    <?php
                                                    echo $sql_main_dir_en['id'];
                                                    ?>
                                                </td>
                                                <td>
                                                    <input type='text' maxlength="50" class='title_dir_en form-control' value='<?php
                                                                                                                                echo $sql_main_dir_en['dir_title'];
                                                                                                                                ?>'>

                                                </td>
                                                <td>
                                                    <textarea maxlength="250" class='text_dir_en form-control'><?php
                                                                                                                echo $sql_main_dir_en['dir_text'];
                                                                                                                ?>
                                                    </textarea>
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
                    <button class='button_change_dir_en'> Կատարել փոփոխություն</button>
                </div>



                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Основные направления центра
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable3" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>РАЗДЕЛ</th>
                                        <th>ЗАГЛАВИЕ</th>
                                        <th>ТЕКСТ(не более 250 символов)</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>РАЗДЕЛ</th>
                                        <th>ЗАГЛАВИЕ</th>
                                        <th>ТЕКСТ</th>

                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php if ((mysqli_num_rows($result_main_dir_ru) > 0)) {
                                        while ($sql_main_dir_ru = mysqli_fetch_assoc($result_main_dir_ru)) {
                                    ?>
                                            <tr>
                                                <td>
                                                    <?php
                                                    echo $sql_main_dir_ru['id'];
                                                    ?>
                                                </td>
                                                <td>
                                                    <input type='text' maxlength="50" class='title_dir_ru form-control' value='<?php
                                                                                                                                echo $sql_main_dir_ru['dir_title'];
                                                                                                                                ?>'>
                                                </td>
                                                <td>
                                                    <textarea maxlength="250" class='text_dir_ru form-control'><?php
                                                                                                                echo $sql_main_dir_ru['dir_text'];
                                                                                                                ?> 
                                                        </textarea>
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
            </div>
            <div class="make-change">
                <button class='button_change_dir_ru'> Կատարել փոփոխություն</button>
            </div>
            <div class="bold-line"></div>


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
    <script src='js/index_dir.js'></script>
</body>

</html>