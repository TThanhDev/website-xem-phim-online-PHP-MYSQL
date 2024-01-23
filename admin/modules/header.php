<?php
if (isset($_GET["dangxuat"])&&$_GET["dangxuat"]==1){
    unset($_SESSION["dangnhap"]);
    header("Location:login.php");
}
?>
<div class="header">
    <div class="logo">
        <img src="../../images/logo.jpg">
    </div>

    <!-- menu -->
    <?php
    include("menu.php");
    ?>
    <p>
        <a href="index.php?dangxuat=1">
            Đăng xuất:
            <?php if(isset($_SESSION["dangnhap"])) {
                echo $_SESSION["dangnhap"];
            } ?>
        </a>
        </p>
</div>