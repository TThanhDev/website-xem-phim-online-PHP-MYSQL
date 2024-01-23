<div id="main">
    <?php
    include("main/slideshow.php");
    ?>
    <div class="main" id="phim">
        <?php
        include("sidebar/sidebar.php");

        if(isset($_GET["quanli"])) {
            $tam = $_GET["quanli"];
        } else {
            $tam = "";
        }

        if($tam == "theloaiphim") {
            include("main/theloaiphim.php");
        } elseif($tam == "phim") {
            include("main/phim.php");
        } elseif($tam == "timkiem") {
            include("main/timkiem.php");
        } elseif($tam == "camon") {
            include("main/camon.php");
        } elseif($tam == "loi") {
            include("main/loi.php");
        } else {
            include("main/index.php");
        }
        ?>

    </div>
    <?php
    include("main/vechungtoi.php");
    ?>
</div>