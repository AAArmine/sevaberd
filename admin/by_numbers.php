<?php
include "../db_configuration/configuration.php";
$sql_by_numbers_am = "SELECT * from by_numbers_am";
$result_by_numbers_am = mysqli_query($con, $sql_by_numbers_am);

$sql_by_numbers_en = "SELECT * from by_numbers_en";
$result_by_numbers_en = mysqli_query($con, $sql_by_numbers_en);

$sql_by_numbers_ru = "SELECT * from by_numbers_ru";
$result_by_numbers_ru = mysqli_query($con, $sql_by_numbers_ru);
?>
<?php include "header.php" ?>

<body class="sb-nav-fixed">


    <?php include "navMain.php" ?>


    <div id="layoutSidenav_content">


        <!-------------------- main ---------------------------->
        <main>
            <div class="container-fluid">
                <h2 class="mt-4 caption-main">Ըստ թվերի</h2>
                <div class="bold-line"></div>

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Ըստ թվերի
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>ԲԱԺԻՆ</th>
                                        <th>Թիվը</th>
                                        <th>ՏԵՔՍՏ(ոչ ավել քան 50 սիմվոլ)</th>

                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>ԲԱԺԻՆ</th>
                                        <th>Թիվը</th>
                                        <th>ՏԵՔՍՏ</th>

                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php if ((mysqli_num_rows($result_by_numbers_am) > 0)) {
                                        while ($sql_by_numbers_am = mysqli_fetch_assoc($result_by_numbers_am)) {
                                    ?>
                                            <tr>
                                                <td><?php
                                                    echo $sql_by_numbers_am['id'];
                                                    ?></td>
                                                <td>
                                                    <input type='number' maxlength="4" class='number_by_number_am form-control' value='<?php
                                                                                                                                echo $sql_by_numbers_am['value'];
                                                                                                                                ?>'>
                                                </td>
                                                <td>
                                                    <textarea maxlength="50" class='text_by_number_am form-control'><?php
                                                                                                                echo $sql_by_numbers_am['name'];
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
                    <button class='button_by_numbers_am button_change_dir_am'> Կատարել փոփոխություն</button>
                </div>

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        By Numbers
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable2" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>SECTION</th>
                                        <th>NUMBER</th>
                                        <th>TEXT(no more than 50 symbols)</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>SECTION</th>
                                        <th>NUMBER</th>
                                        <th>TEXT(no more than 50 symbols)</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php if ((mysqli_num_rows($result_by_numbers_en) > 0)) {
                                        while ($sql_by_numbers_en = mysqli_fetch_assoc($result_by_numbers_en)) {
                                    ?>
                                            <tr>
                                                <td>
                                                    <?php
                                                    echo $sql_by_numbers_en['id'];
                                                    ?>
                                                </td>
                                                <td>
                                                    <input type='number' maxlength="4" class='number_by_number_en form-control' value='<?php
                                                                                                                                echo $sql_by_numbers_en['value'];
                                                                                                                                ?>'>

                                                </td>
                                                <td>
                                                    <textarea maxlength="250" class='text_by_number_en form-control'><?php
                                                                                                                echo $sql_by_numbers_en['name'];
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
                    <button class='button_by_numbers_en button_change_dir_en'> Կատարել փոփոխություն</button>
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
                                        <th>ЦЫФРА</th>
                                        <th>ТЕКСТ(не более 250 символов)</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>РАЗДЕЛ</th>
                                        <th>ЦЫФРА</th>
                                        <th>ТЕКСТ</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php if ((mysqli_num_rows($result_by_numbers_ru) > 0)) {
                                        while ($sql_by_numbers_ru = mysqli_fetch_assoc($result_by_numbers_ru)) {
                                    ?>
                                            <tr>
                                                <td>
                                                    <?php
                                                    echo $sql_by_numbers_ru['id'];
                                                    ?>
                                                </td>
                                                <td>
                                                    <input type='number' maxlength="50" class='number_by_number_ru form-control' value='<?php
                                                                                                                                echo $sql_by_numbers_ru['value'];
                                                                                                                                ?>'>
                                                </td>
                                                <td>
                                                    <textarea maxlength="250" class='text_by_number_ru form-control'><?php
                                                                                                                echo $sql_by_numbers_ru['name'];
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
                <button class='button_by_numbers_ru button_change_dir_ru'> Կատարել փոփոխություն</button>
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
    <script src='js/by_numbers.js'></script>
    <script src='js/home.js'></script>
</body>

</html>