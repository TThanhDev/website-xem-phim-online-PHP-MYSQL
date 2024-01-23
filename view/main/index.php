<?php
if(isset($_GET['page'])) {
    $trang = $_GET['page'];
} else {
    $trang = 1;
}
if($trang == "" || $trang == 1) {
    $begin = 0;
} else {
    $begin = ($trang * 8) - 8;
}
$sql_phim = "SELECT * FROM tbl_bophim,tbl_theloai WHERE  tbl_bophim.id_theloai=tbl_theloai.id_theloai ORDER BY tbl_bophim.id_bophim DESC LIMIT $begin,8 ";
$query_phim = mysqli_query($mysqli, $sql_phim);


?>
<div class="list_movie">
    <h2>
        Danh sách phim
        <ion-icon name="list-outline"></ion-icon>
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
                        <a class="name" href="index.php?quanli=phim&id=<?php echo $row["id_bophim"] ?> #phim">
                            <?php echo $row["tenbophim"] ?>
                        </a>
                        <p class="price">
                            <?php echo number_format($row["giatien"], 0, ",", ".")."VND" ?>
                        </p>
                        <a href="index.php?quanli=phim&id=<?php echo $row["id_bophim"] ?> #phim">
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

    <?php
    $sql_page = mysqli_query($mysqli, "SELECT * FROM tbl_bophim");
    $row_count = mysqli_num_rows($sql_page);
    $page = ceil($row_count / 8);
    ?>
    <ul class="list_page">
        <?php
        for($i = 1; $i <= $page; $i++) {
            ?>
            <li <?php if($i == $trang) {
                echo 'style="background:#EEC900"';
            } else {
                echo '';
            } ?>><a
                    href="index.php?page=<?php echo $i ?> #phim">
                    <?php echo $i ?>
                </a></li>
            <?php
        }
        ?>
    </ul>
    <style>
        ul.list_page {
            padding: 0;
            margin: 0;
            list-style: none;
        }

        ul.list_page li {
            float: left;
            padding: 5px 10px;
            margin: 5px;
            background-color: #8B6914;
        }

        ul.list_page li a {
            display: block;
            color: #550000;
            text-align: center;
            text-decoration: none;
        }
    </style>
</div>