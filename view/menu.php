<?php
$sql_theloai = "SELECT * FROM tbl_theloai ORDER BY id_theloai DESC";
$query_theloai = mysqli_query($mysqli, $sql_theloai);

?>
<?php
if(isset($_GET["dangxuat"])&&$_GET["dangxuat"]==1){
    unset($_SESSION["dangnhap"]);
}
?>
<div class="menu">
    <ul class="list_menu">
        <li>
            <a href="index.php">Trang chủ</a>
        </li>

        <li>
            <a href="index.php?quanli=theloaiphim #phim">Loại phim</a>
            <ul class="">
                <?php
                while($row = mysqli_fetch_array($query_theloai)) {
                    ?>
                    <li>
                        <a href="index.php?quanli=theloaiphim&id=<?php echo $row["id_theloai"] ?> #phim">
                            <?php echo $row["theloaiphim"] ?>
                        </a>
                    </li>
                    <?php
                }
                ?>
            </ul>
        </li>
        <li>
            <a href="index.php?quanli=vechungtoi #vechungtoi" >Về chúng tôi</a>
        </li>
        <?php
        if(isset($_SESSION["dangnhap"])){
        ?>
        <li>
            <a href="index.php?dangxuat=1">Đăng xuất</a>
        </li>
        <?php
        }else{
        ?>
        <li>
            <a href="dangnhap.php">Đăng nhập</a>
        </li>
        <?php
        }
        ?>
    </ul>
</div>