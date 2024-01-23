<?php
if(isset($_POST["timkiem"])) {
    $tukhoa = $_POST["tukhoa"];
}
$sql_phim = "SELECT * FROM tbl_bophim,tbl_theloai WHERE tbl_bophim.id_theloai=tbl_theloai.id_theloai AND tbl_bophim.tenbophim LIKE '%".$tukhoa."%'";
$query_phim = mysqli_query($mysqli, $sql_phim);

?>
<div class="list_movie">
    <h2>
        Từ khóa tìm kiếm:
        <?php echo $_POST["tukhoa"] ?>
    </h2>
    <ul class="movie_box">
        <?php
        while($row = mysqli_fetch_array($query_phim)) {
            ?>
            <li>
                <a href="index.php?quanli=phim&id=<?php echo $row["id_bophim"] ?> #phim">
                    <div class="movie_img">
                        <img src="../admin/modules/quanlibophim/uploads/<?php echo $row["hinhanh"] ?>" alt="">
                    </div>

                    <div class="movie_describe">
                        <a class="name" href="index.php?quanli=phim&id=<?php echo $row_phim["id_bophim"] ?> #phim">
                            <?php echo $row["tenbophim"] ?>
                        </a>
                        <p class="price">
                            <?php echo number_format($row["giatien"], 0, ",", ".")."VND" ?>
                        </p>
                        <a href="index.php?quanli=phim&id=<?php echo $row_phim["id_bophim"] ?> #phim">
                            <button class="btn_bookticket">
                                Đặt vé<ion-icon class="icon" name="ticket-outline"></ion-icon>
                            </button>
                        </a>
                    </div>
                </a>

            </li>
            <?php
        }
        ?>
    </ul>
</div>