<div class="header">
    <div class="logo">
        <img src="../images/logo.jpg">
    </div>

    <form action="index.php?quanli=timkiem" method="POST">
    <div class="search">
        <input class="input_search" type="text" name="tukhoa" required>
        <button type="submit" class="submit_search" name="timkiem">
            <ion-icon class="icon" name="search-outline"></ion-icon>
        </button>
    </div>
    </form>

    <!-- menu -->
    <?php
    include("menu.php");
    // echo buiding_menu(0, $menuData);
    if(isset($_SESSION["dangnhap"])){
        echo '<div><ion-icon name="person-circle-outline" style="float:left;color:#CD9B1D"></ion-icon>'.'<p style="float:left;color:#CD9B1D">'.$_SESSION["dangnhap"].'</p></div>';
    }
    
    ?>
</div>