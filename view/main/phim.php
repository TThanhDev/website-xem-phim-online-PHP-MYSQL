<?php
$sql_chitiet = "SELECT * FROM tbl_bophim,tbl_theloai,tbl_ngaychieu,tbl_suatchieu WHERE
  tbl_bophim.id_theloai=tbl_theloai.id_theloai AND 
  tbl_bophim.id_bophim='$_GET[id]'  LIMIT 1";
$query_chitiet = mysqli_query($mysqli, $sql_chitiet);
$id=$_GET['id'];
?>
<div class="wrapper_phim">
    <?php
    while ($row_chitiet = mysqli_fetch_array($query_chitiet)) {
        ?>
        <div class="hinhanh_phim">
            <img src="../admin/modules/quanlibophim/uploads/<?php echo $row_chitiet["hinhanh"] ?>" alt="">
        </div>
        <form method="POST" action="main/thanhtoan.php" enctype="multipart/form-data">
            <div class="chitiet_phim">
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <p>Tên phim :
                    <?php echo $row_chitiet["tenbophim"] ?>
                </p>
                <p>Thể loại :
                    <?php echo $row_chitiet["theloaiphim"] ?>
                </p>
                <p>Mô tả :
                    <?php echo $row_chitiet["mota"] ?>
                </p>
                <p>Giá :
                    <?php echo number_format($row_chitiet["giatien"], 0, ",", ".") . "VND" ?>/1vé
                </p>
                <p>Ngày chiếu :
                    <select name="ngaychieu">
                        <?php
                        $sql_ngaychieu = "SELECT * FROM tbl_ngaychieu, tbl_bophim WHERE
                        tbl_ngaychieu.id_bophim = tbl_bophim.id_bophim ORDER BY id_ngaychieu DESC";
                        $query_ngaychieu = mysqli_query($mysqli, $sql_ngaychieu);
                        $ngaychieu = $row["ngaychieu"];
                        while ($row = mysqli_fetch_array($query_ngaychieu)) {
                            if ($row["tenbophim"] == $row_chitiet["tenbophim"]) {
                                ?>
                                <option value="<?php echo $row["id_ngaychieu"] ?>">
                                    <?php

                                    echo $row["ngaychieu"] ?>
                                </option>

                                <?php
                            }
                        }
                        ?>
                    </select>
                </p>
                <p>Suất chiếu :
                    <select name="suatchieu">
                        <?php
                        $sql_suatchieu = "SELECT * FROM tbl_suatchieu, tbl_ngaychieu, tbl_bophim WHERE
                        tbl_suatchieu.id_ngaychieu = tbl_ngaychieu.id_ngaychieu AND
                        tbl_ngaychieu.id_bophim = tbl_bophim.id_bophim ORDER BY id_suatchieu DESC";
                        $query_suatchieu = mysqli_query($mysqli, $sql_suatchieu);
                        while ($row = mysqli_fetch_array($query_suatchieu)) {
                            if (($row["tenbophim"] == $row_chitiet["tenbophim"])) {
                                ?>
                                <option value="<?php echo $row["id_suatchieu"] ?>">
                                    <?php echo $row["suatchieu"] ?>
                                </option>
                                <?php
                            }
                        }
                        ?>
                    </select>
                </p>
                <p>Số lượng :
                    <?php
                    $sql_suatchieu = "SELECT * FROM tbl_suatchieu, tbl_ngaychieu, tbl_bophim WHERE
                        tbl_suatchieu.id_ngaychieu = tbl_ngaychieu.id_ngaychieu AND
                        tbl_ngaychieu.id_bophim = tbl_bophim.id_bophim ORDER BY id_suatchieu DESC";
                    $query_suatchieu = mysqli_query($mysqli, $sql_suatchieu);

                    ?>
                    <input type="number" name="soluongmua" style="width: 50px;">/
                    <?php
                     while ($row = mysqli_fetch_array($query_suatchieu)) {
                        if ($row["tenbophim"] == $row_chitiet["tenbophim"]) {
                            echo $row["soluong"];
                        }
                    }
                     ?>
                </p>
                <p class="button_datve">
                    <?php
                    if (isset($_SESSION["dangnhap"])) {
                        ?>
                        <input class="submit" type="submit" name="datve" value="Đặt vé">
                        
                        <?php
                    } else {
                        ?>
                        <a href="dangnhap.php">Đăng nhập để đặt vé</a>
                        <?php
                    }
                    ?>
                </p>
            </div>
        </form>

        <?php
    }
    ?>
</div>

<style>
    .wrapper_phim {
        height: 500px;
        width: 90%;

    }

    .hinhanh_phim {
        float: left;
        width: 30%;
        border: 2px solid #CD9B1D;
        border-radius: 10px;
        text-align: center;
        margin: 20px;
    }

    .hinhanh_phim img {
        border-radius: 10px;

    }

    .chitiet_phim {
        float: left;
        width: 50%;
        margin: 40px 0 5px 0;
        text-align: center;
    }

    .chitiet_phim p {
        color: #CD9B1D;
        font-size: 2em;
    }

    .chitiet_phim input,
    select {
        background: transparent;
        border: none;
        outline: none;
        font-size: 1em;
        color: #CD9B1D;
    }

    .button_datve {
        text-align: center;
        margin-top: 20px;
    }

    .button_datve a {
        text-decoration: none;
        padding: 10px;
        color: #550000;
        background-color: #CD9B1D;
        font-size: 1.2em;
        border-radius: 5px;
        width: 30%;
    }
</style>