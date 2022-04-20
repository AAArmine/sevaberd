<?php
$connect = mysqli_connect('localhost', 'root', '', 'pagination_php');
$pageIndex = isset($_GET['pageIndex']) ? $_GET['pageIndex'] : '';
if ($pageIndex == '' || $pageIndex == 1) {
    $pageDisplay = 0;
} else {
    $pageDisplay = $pageIndex * 2 - 2;
}
echo $pageDisplay;
$result = mysqli_query($connect, "SELECT * FROM table_items limit " . $pageDisplay . ",2");


$result1 = mysqli_query($connect, "SELECT * FROM table_items");
$rowsNumber = mysqli_num_rows($result1);

$perPage = $rowsNumber / 2;
$numPages = ceil($perPage);
?>
<?php
include "header.php";
?>

<title>Document</title>
<style>
    .activePage {
        background-color: blueviolet;
    }

    .pagination-div {
        display: table;
        margin: auto;
    }
</style>
</head>

<body>
    <?php
    if (mysqli_num_rows($result) > 0) {
        while ($sql = mysqli_fetch_assoc($result)) {
            echo $sql['name'] . "<br>";
        }
    } else {
        echo 'Article not found.';
    }


    // echo $numPages . "<br>"; //depi verev kloracum
    ?>
    <div class="pagination-div mt-3">
        <span class="goPrev">
            <i class="fas fa-angle-double-left"></i>
        </span>

        <?php
        for ($i = 1; $i <= $numPages; $i++) {
            if ($pageIndex == $i) {
                echo "<a href='testpage.php?pageIndex=" . $i . "' class='activePage'> " . $i . " </a>";
            } else {
                echo "<a href='testpage.php?pageIndex=" . $i . "'> " . $i . " </a>";
            }
        }
        ?>
        <span class="goPrev">
            <i class="fas fa-angle-double-right"></i>
        </span>

    </div>

    <script>
        var url_string = window.location;
        var url = new URL(url_string);
        var name = url.searchParams.get("pageIndex");

        console.log(name);
    </script>
</body>

</html>