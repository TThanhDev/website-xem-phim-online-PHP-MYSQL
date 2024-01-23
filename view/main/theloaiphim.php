<?php
$sql_phim = "SELECT * FROM tbl_bophim WHERE  tbl_bophim.id_theloai='$_GET[id]' ORDER BY id_bophim DESC";
$query_phim = mysqli_query($mysqli, $sql_phim);

$sql_cate = "SELECT * FROM tbl_theloai WHERE tbl_theloai.id_theloai='$_GET[id]' LIMIT 1";
$query_cate = mysqli_query($mysqli, $sql_cate);
$row_title = mysqli_fetch_array($query_cate);
?>
<div class="list_movie">
    <h2>
        Thể loại:
        <?php echo $row_title["theloaiphim"] ?>
    </h2>
    <ul class="movie_box">
        <?php
        while ($row_phim = mysqli_fetch_array($query_phim)) {
            ?>
            <li>
                <a href="index.php?quanli=phim&id=<?php echo $row_phim["id_bophim"] ?> #phim">
                    <div class="movie_img">
                        <img src="../admin/modules/quanlibophim/uploads/<?php echo $row_phim["hinhanh"] ?>" alt="">
                    </div>

                    <div class="movie_describe">
                        <a class="name" href="index.php?quanli=phim&id=<?php echo $row_phim["id_bophim"] ?> #phim">
                            <?php echo $row_phim["tenbophim"] ?>
                        </a>
                        <p class="price">
                            <?php echo number_format($row_phim["giatien"], 0, ",", ".") . "VND" ?>
                        </p>
                        <a href="index.php?quanli=phim&id=<?php echo $row_phim["id_bophim"] ?> #phim">
                        <button class="btn_bookticket">
                            Đặt vé<ion-icon class="icon" name="ticket-outline" ></ion-icon>
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