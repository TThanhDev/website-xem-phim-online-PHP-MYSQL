<div class="clear"></div>
<div class="main">
    <?php

    if (isset($_GET["action"]) && $_GET["query"]) {
        $tam = $_GET["action"];
        $query = $_GET["query"];
    } else {
        $tam = "";
        $query = "";
    }

    if ($tam == "quanlislideshow" && $query == "them") {
        include("quanlislideshow/them.php");
        include("quanlislideshow/lietke.php");
    } elseif ($tam == "quanlislideshow" && $query == "sua") {
        include("quanlislideshow/sua.php");

    } elseif ($tam == "quanlitheloaiphim" && $query == "them") {
        include("quanlitheloaiphim/them.php");
        include("quanlitheloaiphim/lietke.php");
    } elseif ($tam == "quanlitheloaiphim" && $query == "sua") {
        include("quanlitheloaiphim/sua.php");

    } elseif ($tam == "quanlibophim" && $query == "them") {
        include("quanlibophim/them.php");
        include("quanlibophim/lietke.php");
    } elseif ($tam == "quanlibophim" && $query == "sua") {
        include("quanlibophim/sua.php");

    } elseif ($tam == "quanlingaychieu" && $query == "them") {
        include("quanlingaychieu/them.php");
        include("quanlingaychieu/lietke.php");
    } elseif ($tam == "quanlingaychieu" && $query == "sua") {
        include("quanlingaychieu/sua.php");

    } elseif ($tam == "quanlisuatchieu" && $query == "them") {
        include("quanlisuatchieu/them.php");
        include("quanlisuatchieu/lietke.php");
    } elseif ($tam == "quanlisuatchieu" && $query == "sua") {
        include("quanlisuatchieu/sua.php");

    } elseif ($tam == "quanlidondatve" && $query == "lietke") {
        include("quanlidondatve/lietke.php");
    
    } else {
        include("dashboard.php");
    }
    ?>
</div>