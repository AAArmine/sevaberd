<?php
include "../db_configuration/configuration.php";
$sql_rooms_am = "SELECT * from rooms_am";
$result_rooms_am = mysqli_query($con, $sql_rooms_am);

$sql_rooms_en = "SELECT * from rooms_en";
$result_rooms_en = mysqli_query($con, $sql_rooms_en);

$sql_rooms_ru = "SELECT * from rooms_ru";
$result_rooms_ru = mysqli_query($con, $sql_rooms_ru);
?>
<?php include "header.php" ?>

<body class="sb-nav-fixed">

    <?php include "navMain.php" ?>
    <div id="layoutSidenav_content">


        <!-------------------- main ---------------------------->
        <main>
            <div class="container-fluid">
                <h2 class="mt-4 caption-main">Սենյակներ</h2>
                <div class="bold-line"></div>

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Սենյակներ հայերեն
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>N</th>
                                        <th>Կոդ/անվանում</th>
                                        <th class='wide_td'>նկարագրություն</th>
                                        <th>հարմարություն_1 (max 100 symbols)</th>
                                        <th>հարմարություն_2 (max 100 symbols)</th>
                                        <th>հարմարություն_3 (max 100 symbols)</th>
                                        <th>հարմարություն_4 (max 100 symbols)</th>
                                        <th>հարմարություն_5 (max 100 symbols)</th>
                                        <th>հարմարություն_6 (max 100 symbols)</th>
                                        <th>հարմարություն_7 (max 100 symbols)</th>
                                        <th>արժեք</th>
                                        <th>Ջնջել</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>N</th>
                                        <th>Կոդ/անվանում</th>
                                        <th class='wide_td'>նկարագրություն</th>
                                        <th>հարմարություն 1 (max 100 symbols)</th>
                                        <th>հարմարություն 2 (max 100 symbols)</th>
                                        <th>հարմարություն 3 (max 100 symbols)</th>
                                        <th>հարմարություն 4 (max 100 symbols)</th>
                                        <th>հարմարություն 5 (max 100 symbols)</th>
                                        <th>հարմարություն 6 (max 100 symbols)</th>
                                        <th>հարմարություն 7 (max 100 symbols)</th>
                                        <th>արժեք</th>
                                        <th>Ջնջել</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php if ((mysqli_num_rows($result_rooms_am) > 0)) {
                                        $k = 1;
                                        while ($sql_rooms_am = mysqli_fetch_assoc($result_rooms_am)) {
                                    ?>
                                            <tr>
                                                <td><?php
                                                    echo $k;
                                                    ?></td>
                                                <td>
                                                    <input type='text' datatype=<?php echo $sql_rooms_am['id']; ?> maxlength="50" class='code_room_am form-control' value='<?php echo $sql_rooms_am['code'];?>'>                                                                                                                                 
                                                </td>
                                                <td>
                                                    <textarea class='desc_room_am form-control withstyle'><?php echo $sql_rooms_am['description'];?></textarea>                                         
                                                </td>
                                                <td>
                                                    <input type='text' maxlength="100" class='option1_room_am form-control' value='<?php  echo $sql_rooms_am['option_1'];?>'>                                                                                                                                                                                                      
                                                </td>
                                                <td>
                                                    <input type='text' maxlength="100" class='option2_room_am form-control' value='<?php  echo $sql_rooms_am['option_2'];?>'>                                                                                                                                                                                                      
                                                </td>
                                                <td>
                                                    <input type='text' maxlength="100" class='option3_room_am form-control' value='<?php  echo $sql_rooms_am['option_3'];?>'>                                                                                                                                                                                                      
                                                </td>
                                                <td>
                                                    <input type='text' maxlength="100" class='option4_room_am form-control' value='<?php  echo $sql_rooms_am['option_4'];?>'>                                                                                                                                                                                                      
                                                </td>
                                                <td>
                                                    <input type='text' maxlength="100" class='option5_room_am form-control' value='<?php  echo $sql_rooms_am['option_5'];?>'>                                                                                                                                                                                                      
                                                </td>
                                                <td>
                                                    <input type='text' maxlength="100" class='option6_room_am form-control' value='<?php  echo $sql_rooms_am['option_6'];?>'>                                                                                                                                                                                                      
                                                </td>
                                                <td>
                                                    <input type='text' maxlength="100" class='option7_room_am form-control' value='<?php  echo $sql_rooms_am['option_7'];?>'>                                                                                                                                                                                                      
                                                </td>
                                                <td>
                                                    <input type='text' maxlength="30" class='price_room_am form-control' value='<?php  echo $sql_rooms_am['price'];?>'>                                                                                                                                                                                                      
                                                </td>

                                                <td>
                                                    <button class="delete" data-toggle="modal" data-target="#Del-Modal_<?php echo $sql_rooms_am['id'] ?>">Ջնջել</button>
                                                    <!-- modal-delete -->
                                                    <div id="Del-Modal_<?php echo $sql_rooms_am['id'] ?>" class="modal fade" role="dialog">
                                                        <div class="modal-dialog">

                                                            <!-- Modal content-->
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>Դուք վստահ եք, որ ցանկանում եք ջնջել «<?php echo $sql_rooms_am['code']; ?>» սենյակը։</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn delete-confirm" data-dismiss="modal" id='delete-<?php echo $sql_rooms_am['id'] ?>'>Այո</button>
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
                    <button class='button_change_dir_am rooms_change_am'> Կատարել փոփոխություն</button>
                </div>



                <!-- en -->
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Սենյակներ անգլերեն
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable2" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>N</th>
                                        <th>Code/name</th>
                                        <th class='wide_td'>Description</th>
                                        <th>option_1 (max 100 symbols)</th>
                                        <th>option_2 (max 100 symbols)</th>
                                        <th>option_3 (max 100 symbols)</th>
                                        <th>option_4 (max 100 symbols)</th>
                                        <th>option_5 (max 100 symbols)</th>
                                        <th>option_6 (max 100 symbols)</th>
                                        <th>option_7 (max 100 symbols)</th>
                                        <th>price</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                    <th>N</th>
                                        <th>Code/name</th>
                                        <th class='wide_td'>Description</th>
                                        <th>option_1 (max 100 symbols)</th>
                                        <th>option_2 (max 100 symbols)</th>
                                        <th>option_3 (max 100 symbols)</th>
                                        <th>option_4 (max 100 symbols)</th>
                                        <th>option_5 (max 100 symbols)</th>
                                        <th>option_6 (max 100 symbols)</th>
                                        <th>option_7 (max 100 symbols)</th>
                                        <th>price</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php if ((mysqli_num_rows($result_rooms_en) > 0)) {
                                        $k = 1;
                                        while ($sql_rooms_en = mysqli_fetch_assoc($result_rooms_en)) {
                                    ?>
                                            <tr>
                                                <td><?php
                                                    echo $k;
                                                    ?></td>
                                                <td>
                                                    <input type='text' datatype=<?php echo $sql_rooms_en['id']; ?> maxlength="50" class='code_room_en form-control' value='<?php echo $sql_rooms_en['code'];?>'>                                                                                                                                 
                                                </td>
                                                <td>
                                                    <textarea class='desc_room_en form-control withstyle'><?php echo $sql_rooms_en['description'];?></textarea>                                         
                                                </td>
                                                <td>
                                                    <input type='text' maxlength="100" class='option1_room_en form-control' value='<?php  echo $sql_rooms_en['option_1'];?>'>                                                                                                                                                                                                      
                                                </td>
                                                <td>
                                                    <input type='text' maxlength="100" class='option2_room_en form-control' value='<?php  echo $sql_rooms_en['option_2'];?>'>                                                                                                                                                                                                      
                                                </td>
                                                <td>
                                                    <input type='text' maxlength="100" class='option3_room_en form-control' value='<?php  echo $sql_rooms_en['option_3'];?>'>                                                                                                                                                                                                      
                                                </td>
                                                <td>
                                                    <input type='text' maxlength="100" class='option4_room_en form-control' value='<?php  echo $sql_rooms_en['option_4'];?>'>                                                                                                                                                                                                      
                                                </td>
                                                <td>
                                                    <input type='text' maxlength="100" class='option5_room_en form-control' value='<?php  echo $sql_rooms_en['option_5'];?>'>                                                                                                                                                                                                      
                                                </td>
                                                <td>
                                                    <input type='text' maxlength="100" class='option6_room_en form-control' value='<?php  echo $sql_rooms_en['option_6'];?>'>                                                                                                                                                                                                      
                                                </td>
                                                <td>
                                                    <input type='text' maxlength="100" class='option7_room_en form-control' value='<?php  echo $sql_rooms_en['option_7'];?>'>                                                                                                                                                                                                      
                                                </td>
                                                <td>
                                                    <input type='text' maxlength="30" class='price_room_en form-control' value='<?php  echo $sql_rooms_en['price'];?>'>                                                                                                                                                                                                      
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
                    <button class='button_change_dir_am rooms_change_en'> Կատարել փոփոխություն</button>
                </div>

                <!-- ru -->

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Սենյակներ ռուսերեն
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable3" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>N</th>
                                        <th>Код/имя</th>
                                        <th class='wide_td'>Описание</th>
                                        <th>удобство_1 (max 100 symbols)</th>
                                        <th>удобство_2 (max 100 symbols)</th>
                                        <th>удобство_3 (max 100 symbols)</th>
                                        <th>удобство_4 (max 100 symbols)</th>
                                        <th>удобство_5 (max 100 symbols)</th>
                                        <th>удобство_6 (max 100 symbols)</th>
                                        <th>удобство_7 (max 100 symbols)</th>
                                        <th>цена</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>N</th>
                                        <th>Код/имя</th>
                                        <th class='wide_td'>Описание</th>
                                        <th>удобство_1 (max 100 symbols)</th>
                                        <th>удобство_2 (max 100 symbols)</th>
                                        <th>удобство_3 (max 100 symbols)</th>
                                        <th>удобство_4 (max 100 symbols)</th>
                                        <th>удобство_5 (max 100 symbols)</th>
                                        <th>удобство_6 (max 100 symbols)</th>
                                        <th>удобство_7 (max 100 symbols)</th>
                                        <th>цена</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php if ((mysqli_num_rows($result_rooms_ru) > 0)) {
                                        $k = 1;
                                        while ($sql_rooms_ru = mysqli_fetch_assoc($result_rooms_ru)) {
                                    ?>
                                            <tr>
                                                <td><?php
                                                    echo $k;
                                                    ?></td>
                                                <td>
                                                    <input type='text' datatype=<?php echo $sql_rooms_ru['id']; ?> maxlength="50" class='code_room_ru form-control' value='<?php echo $sql_rooms_ru['code'];?>'>                                                                                                                                 
                                                </td>
                                                <td>
                                                    <textarea class='desc_room_ru form-control withstyle'><?php echo $sql_rooms_ru['description'];?></textarea>                                         
                                                </td>
                                                <td>
                                                    <input type='text' maxlength="100" class='option1_room_ru form-control' value='<?php  echo $sql_rooms_ru['option_1'];?>'>                                                                                                                                                                                                      
                                                </td>
                                                <td>
                                                    <input type='text' maxlength="100" class='option2_room_ru form-control' value='<?php  echo $sql_rooms_ru['option_2'];?>'>                                                                                                                                                                                                      
                                                </td>
                                                <td>
                                                    <input type='text' maxlength="100" class='option3_room_ru form-control' value='<?php  echo $sql_rooms_ru['option_3'];?>'>                                                                                                                                                                                                      
                                                </td>
                                                <td>
                                                    <input type='text' maxlength="100" class='option4_room_ru form-control' value='<?php  echo $sql_rooms_ru['option_4'];?>'>                                                                                                                                                                                                      
                                                </td>
                                                <td>
                                                    <input type='text' maxlength="100" class='option5_room_ru form-control' value='<?php  echo $sql_rooms_ru['option_5'];?>'>                                                                                                                                                                                                      
                                                </td>
                                                <td>
                                                    <input type='text' maxlength="100" class='option6_room_ru form-control' value='<?php  echo $sql_rooms_ru['option_6'];?>'>                                                                                                                                                                                                      
                                                </td>
                                                <td>
                                                    <input type='text' maxlength="100" class='option7_room_ru form-control' value='<?php  echo $sql_rooms_ru['option_7'];?>'>                                                                                                                                                                                                      
                                                </td>
                                                <td>
                                                    <input type='text' maxlength="30" class='price_room_ru form-control' value='<?php  echo $sql_rooms_ru['price'];?>'>                                                                                                                                                                                                      
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
                    <button class='button_change_dir_am rooms_change_ru'> Կատարել փոփոխություն</button>
                </div>
                






                <!-- add room -->
                
                <div class="add-article-section">
                    <h1>Ավելացնել սենյակ/համար</հ1>
                </div>
                <form onsubmit='return false' action="" method="post" enctype="multipart/form-data" id="form_upload_data">
                    <div class='mt-4'>
                        <label>
                            <input type="file" id="room_img" style="display:none" name="room_img">
                            <div class='upload-imb-btn mb-1 mt-3' id='select_img'>Ներբեռնել գլխավոր նկարը</div>
                        </label>
                        <button class="delete delete-margin-right" id='remove_uploaded_img'>Չեղարկել</button>
                    </div>
                    
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <tr>
                            <th>Հայերեն լեզվով սենյակի կոդ</th>
                            <th class='wide_td'>Հայերեն լեզվով սենյակի նկարագրություն</th>
                            <th>Հայերեն լեզվով արժեք</th>
                            <th>հարմարություն 1 (max 100 symbols)</th>
                            <th>հարմարություն 2 (max 100 symbols)</th>
                            <th>հարմարություն 3 (max 100 symbols)</th>
                            <th>հարմարություն 4 (max 100 symbols)</th>
                            <th>հարմարություն 5 (max 100 symbols)</th>
                            <th>հարմարություն 6 (max 100 symbols)</th>
                            <th>հարմարություն 7(max 100 symbols)</th>

                            
                        </tr>
                        <tr>
                            <td>
                                <input id='room-am-code' maxlength="50" name='room-am-code' type='text' class='title_dir_en form-control withstyle'>
                            </td>
                            <td>
                                <textarea id='room-am-desc' name='room-am-desc' class='text_dir_en form-control withstyle'></textarea>
                            </td>
                            <td>
                                <input id='room-am-price' name='room-am-price' type='number' class='title_dir_en form-control'>
                            </td>
                            <td>
                                <input id='room-am-opt1' maxlength="100" name='room-am-opt1' type='text' class='title_dir_en form-control withstyle'>
                            </td>
                            <td>
                                <input id='room-am-opt2' maxlength="100" name='room-am-opt2' type='text' class='title_dir_en form-control withstyle'>
                            </td>
                            <td>
                                <input id='room-am-opt3' maxlength="100" name='room-am-opt3' type='text' class='title_dir_en form-control withstyle'>
                            </td>
                            <td>
                                <input id='room-am-opt4' maxlength="100" name='room-am-opt4' type='text' class='title_dir_en form-control withstyle'>
                            </td>
                            <td>
                                <input id='room-am-opt5' maxlength="100" name='room-am-opt5' type='text' class='title_dir_en form-control withstyle'>
                            </td>
                            <td>
                                <input id='room-am-opt6' maxlength="100" name='room-am-opt6' type='text' class='title_dir_en form-control withstyle'>
                            </td>
                            <td>
                                <input id='room-am-opt7' maxlength="100" name='room-am-opt7' type='text' class='title_dir_en form-control withstyle'>
                            </td>

                        </tr>


                        <tr>
                            <th>Code/name in English</th>
                            <th class='wide_td'>Description in English</th>
                            <th>Price (max 100 symbols)</th>
                            <th>Option 1(max 100 symbols)</th>
                            <th>Option 2 (max 100 symbols)</th>
                            <th>Option 3(max 100 symbols)</th>
                            <th>Option 4 (max 100 symbols)</th>
                            <th>Option 5 (max 100 symbols)</th>
                            <th>Option 6 (max 100 symbols)</th>
                            <th>Option 7 (max 100 symbols)</th>
                        </tr>
                        <tr>
                        <td>
                                <input id='room-en-code' maxlength="50" name='room-en-code' type='text' class='title_dir_en form-control withstyle'>
                            </td>
                            <td>
                                <textarea id='room-en-desc' name='room-en-desc' class='text_dir_en form-control withstyle'></textarea>
                            </td>
                            <td>
                                <input id='room-en-price' name='room-en-price' type='number' class='title_dir_en form-control'>
                            </td>
                            <td>
                                <input id='room-en-opt1' maxlength="100" name='room-en-opt1' type='text' class='title_dir_en form-control withstyle'>
                            </td>
                            <td>
                                <input id='room-en-opt2' maxlength="100" name='room-en-opt2' type='text' class='title_dir_en form-control withstyle'>
                            </td>
                            <td>
                                <input id='room-en-opt3' maxlength="100" name='room-en-opt3' type='text' class='title_dir_en form-control withstyle'>
                            </td>
                            <td>
                                <input id='room-en-opt4' maxlength="100" name='room-en-opt4' type='text' class='title_dir_en form-control withstyle'>
                            </td>
                            <td>
                                <input id='room-en-opt5' maxlength="100" name='room-en-opt5' type='text' class='title_dir_en form-control withstyle'>
                            </td>
                            <td>
                                <input id='room-en-opt6' maxlength="100" name='room-en-opt6' type='text' class='title_dir_en form-control withstyle'>
                            </td>
                            <td>
                                <input id='room-en-opt7' maxlength="100" name='room-en-opt7' type='text' class='title_dir_en form-control withstyle'>
                            </td>
                        </tr>
                        <tr>

                            <th>Код/имя на русском языке</th>
                            <th class='wide_td'>Описание на русском языке</th>
                            <th>цена на русском языке</th>
                            <th>удобство 1 (max 100 symbols)</th>
                            <th>удобство 2 (max 100 symbols)</th>
                            <th>удобство 3 (max 100 symbols)</th>
                            <th>удобство 4 (max 100 symbols)</th>
                            <th>удобство 5 (max 100 symbols)</th>
                            <th>удобство 6 (max 100 symbols)</th>
                            <th>удобство 7 (max 100 symbols)</th>
                        </tr>
                        <tr>
                        <td>
                                <input id='room-ru-code' maxlength="50" name='room-ru-code' type='text' class='title_dir_en form-control withstyle'>
                            </td>
                            <td>
                                <textarea id='room-ru-desc' name='room-ru-desc' class='text_dir_en form-control withstyle'></textarea>
                            </td>
                            <td>
                                <input id='room-ru-price' name='room-ru-price' type='number' class='title_dir_en form-control'>
                            </td>
                            <td>
                                <input id='room-ru-opt1' maxlength="100" name='room-ru-opt1' type='text' class='title_dir_en form-control withstyle'>
                            </td>
                            <td>
                                <input id='room-ru-opt2' maxlength="100" name='room-ru-opt2' type='text' class='title_dir_en form-control withstyle'>
                            </td>
                            <td>
                                <input id='room-ru-opt3' maxlength="100" name='room-ru-opt3' type='text' class='title_dir_en form-control withstyle'>
                            </td>
                            <td>
                                <input id='room-ru-opt4' maxlength="100" name='room-ru-opt4' type='text' class='title_dir_en form-control withstyle'>
                            </td>
                            <td>
                                <input id='room-ru-opt5' maxlength="100" name='room-ru-opt5' type='text' class='title_dir_en form-control withstyle'>
                            </td>
                            <td>
                                <input id='room-ru-opt6' maxlength="100" name='room-ru-opt6' type='text' class='title_dir_en form-control withstyle'>
                            </td>
                            <td>
                                <input id='room-ru-opt7' maxlength="100" name='room-ru-opt7' type='text' class='title_dir_en form-control withstyle'>
                            </td>
                        </tr>
                        <tbody>
                        </tbody>
                    </table>
                    <div class="make-change">
                        <button id='add-room-submit' class='button_change_dir_am' data-toggle="modal" data-target="#submit_room_modal"> Հաստատել</button>
                        <button class="delete delete-margin-right" id='remove-texts'>Չեղարկել</button>
                    </div>
                </form>


                <!-- modalsubmit -->
                <div class="modal fade" id="submit_room_modal" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <div id='modal-show-input'> Գլխավոր նկարը կամ հիմնական դաշտերը(արժեք, նկար, նկարագրություն, կոդ) ներմուծված չեն։
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
    <script src='js/rooms.js'></script>
</body>

</html>