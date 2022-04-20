<?php
include "../db_configuration/configuration.php";

// -----submit village image

if (isset($_FILES['img1']['name'])) {
    $newvalue = explode('.', $_FILES['img1']['name']);

    $newname = $newvalue[0] . uniqid() . "." . end($newvalue);
    $newDestination = '../img_admin/' . $newname;
    echo  $newDestination;
    move_uploaded_file($_FILES['img1']['tmp_name'], $newDestination);
    $sql_insert_img1 = mysqli_query($con, "UPDATE village SET image_1='" . $newname . "' where id='1'");
}

if (isset($_FILES['img2']['name'])) {
    $newvalue = explode('.', $_FILES['img2']['name']);

    $newname = $newvalue[0] . uniqid() . "." . end($newvalue);
    $newDestination = '../img_admin/' . $newname;
    echo  $newDestination;
    move_uploaded_file($_FILES['img2']['tmp_name'], $newDestination);
    $sql_insert_img2 = mysqli_query($con, "UPDATE village SET image_2='" . $newname . "' where id='1'");
}

if (isset($_FILES['img3']['name'])) {
    $newvalue = explode('.', $_FILES['img3']['name']);

    $newname = $newvalue[0] . uniqid() . "." . end($newvalue);
    $newDestination = '../img_admin/' . $newname;
    echo  $newDestination;
    move_uploaded_file($_FILES['img3']['tmp_name'], $newDestination);
    $sql_insert_img3 = mysqli_query($con, "UPDATE village SET image_3='" . $newname . "' where id='1'");
}


// -----submit zipline image

if (isset($_FILES['img1_zip']['name'])) {
    $newvalue = explode('.', $_FILES['img1_zip']['name']);

    $newname = $newvalue[0] . uniqid() . "." . end($newvalue);
    $newDestination = '../img_admin/' . $newname;
    echo  $newDestination;
    move_uploaded_file($_FILES['img1_zip']['tmp_name'], $newDestination);
    $sql_insert_img1 = mysqli_query($con, "UPDATE zipline SET image_1='" . $newname . "' where id='1'");
}

if (isset($_FILES['img2_zip']['name'])) {
    $newvalue = explode('.', $_FILES['img2_zip']['name']);

    $newname = $newvalue[0] . uniqid() . "." . end($newvalue);
    $newDestination = '../img_admin/' . $newname;
    echo  $newDestination;
    move_uploaded_file($_FILES['img2_zip']['tmp_name'], $newDestination);
    $sql_insert_img2 = mysqli_query($con, "UPDATE zipline SET image_2='" . $newname . "' where id='1'");
}

if (isset($_FILES['img3_zip']['name'])) {
    $newvalue = explode('.', $_FILES['img3_zip']['name']);

    $newname = $newvalue[0] . uniqid() . "." . end($newvalue);
    $newDestination = '../img_admin/' . $newname;
    echo  $newDestination;
    move_uploaded_file($_FILES['img3_zip']['tmp_name'], $newDestination);
    $sql_insert_img3 = mysqli_query($con, "UPDATE zipline SET image_3='" . $newname . "' where id='1'");
}



// -----submit shooting image

if (isset($_FILES['img1_shoo']['name'])) {
    $newvalue = explode('.', $_FILES['img1_shoo']['name']);

    $newname = $newvalue[0] . uniqid() . "." . end($newvalue);
    $newDestination = '../img_admin/' . $newname;
    echo  $newDestination;
    move_uploaded_file($_FILES['img1_shoo']['tmp_name'], $newDestination);
    $sql_insert_img1 = mysqli_query($con, "UPDATE shooting SET image_1='" . $newname . "' where id='1'");
}

if (isset($_FILES['img2_shoo']['name'])) {
    $newvalue = explode('.', $_FILES['img2_shoo']['name']);

    $newname = $newvalue[0] . uniqid() . "." . end($newvalue);
    $newDestination = '../img_admin/' . $newname;
    echo  $newDestination;
    move_uploaded_file($_FILES['img2_shoo']['tmp_name'], $newDestination);
    $sql_insert_img2 = mysqli_query($con, "UPDATE shooting SET image_2='" . $newname . "' where id='1'");
}

if (isset($_FILES['img3_shoo']['name'])) {
    $newvalue = explode('.', $_FILES['img3_shoo']['name']);

    $newname = $newvalue[0] . uniqid() . "." . end($newvalue);
    $newDestination = '../img_admin/' . $newname;
    echo  $newDestination;
    move_uploaded_file($_FILES['img3_shoo']['tmp_name'], $newDestination);
    $sql_insert_img3 = mysqli_query($con, "UPDATE shooting SET image_3='" . $newname . "' where id='1'");
}

// make changes


if (isset($_POST['text_village_am'])) {
    $sql = mysqli_query($con, "UPDATE village SET text_am='" . $_POST['text_village_am'] . "', text_en='" . $_POST['text_village_en'] . "', text_ru='" . $_POST['text_village_ru'] . "' WHERE id='1'");
}



if (isset($_POST['text_zipline_am'])) {
    $sql = mysqli_query($con, "UPDATE zipline SET text_am='" . $_POST['text_zipline_am'] . "', text_en='" . $_POST['text_zipline_en'] . "', text_ru='" . $_POST['text_zipline_ru'] . "' WHERE id='1'");
}


if (isset($_POST['text_shooting_am'])) {
    $sql = mysqli_query($con, "UPDATE shooting SET text_am='" . $_POST['text_shooting_am'] . "', text_en='" . $_POST['text_shooting_en'] . "', text_ru='" . $_POST['text_shooting_ru'] . "' WHERE id='1'");
}
