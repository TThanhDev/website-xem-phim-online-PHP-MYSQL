<?php
$sql_theloai = "SELECT * FROM tbl_theloai ORDER BY id_theloai DESC";
$query_theloai = mysqli_query($mysqli, $sql_theloai);

?>
<div class="footer">
    <div class="footer_logo">
        <img src="../images/logo.jpg" alt="" style="width: 50%;">
    </div>

    <div class="footer_menu">
        <ul style="display: flex;list-style: none;">
            <li style="padding: 0 15px;">
                <a href="index.php">Trang chủ</a>
            </li>

            <li style="padding: 0 15px;">
                <a href="index.php?quanli=theloaiphim #phim">Loại phim</a>
                <ul class="">
                    <?php
                    while ($row = mysqli_fetch_array($query_theloai)) {
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
            <li style="padding: 0 15px;">
                <a href="index.php?quanli=vechungtoi">Về chúng tôi</a>
            </li>
        </ul>
    </div>
    <div class="footer_contact">
        <h3>Liên hệ</h3>
        <a href=""><ion-icon name="logo-skype"></ion-icon></a>
        <a href=""><ion-icon name="logo-discord"></ion-icon></a>
        <a href=""><ion-icon name="logo-facebook"></ion-icon></a>
        <a href=""><ion-icon name="logo-instagram"></ion-icon></a>
        <a href=""><ion-icon name="logo-twitter"></ion-icon></a>
    </div>
</div>