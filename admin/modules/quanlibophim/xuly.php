<?php
include("../../config/config.php");

$mabophim = $_POST["mabophim"];
$tenbophim = $_POST["tenbophim"];
$giatien = $_POST["giatien"];
$mota = $_POST["mota"];
$theloai = $_POST["theloai"];
//xử lí hình ảnh
$hinhanh = $_FILES["hinhanh"]["name"];
$hinhanh_tmp = $_FILES["hinhanh"]["tmp_name"];
$hinhanh = time() . "_" . $hinhanh;

if (isset($_POST["thembophim"])) {
    $sql_them = "INSERT INTO tbl_bophim(mabophim,tenbophim,giatien,mota,hinhanh,id_theloai) 
    VALUE('" . $mabophim . "','" . $tenbophim . "','" . $giatien . "','" . $mota . "','" . $hinhanh . "','" . $theloai . "') ";
    mysqli_query($mysqli, $sql_them);
    move_uploaded_file($hinhanh_tmp, "uploads/" . $hinhanh);
    header("Location:../../modules/index.php?action=quanlibophim&query=them");

} elseif (isset($_POST["suabophim"])) {
    if ($hinhanh != "") {
        move_uploaded_file($hinhanh_tmp, "uploads/" . $hinhanh);
        $sql_update = "UPDATE tbl_bophim SET mabophim = '" . $mabophim . "', tenbophim = '" . $tenbophim . "', giatien = '" . $giatien . "', mota = '" . $mota . "', hinhanh = '" . $hinhanh . "', id_theloai= '" . $theloai . "' WHERE id_bophim= '$_GET[idbophim]' ";
        $sql = "SELECT * FROM tbl_bophim WHERE id_bophim='$_GET[idbophim]' LIMIT 1";
        $query = mysqli_query($mysqli, $sql);
        while ($row = mysqli_fetch_array($query)) {
            unlink("uploads/" . $row["hinhanh"]);
        }
    } else {
        $sql_update = "UPDATE tbl_bophim SET mabophim = '" . $mabophim . "', tenbophim = '" . $tenbophim . "', giatien = '" . $giatien . "', mota = '" . $mota . "' WHERE id_bophim= '$_GET[idbophim]' ";
    }

    mysqli_query($mysqli, $sql_update);
    header("Location:../../modules/index.php?action=quanlibophim&query=them");

} else {
    $id = $_GET["idbophim"];
    $sql = "SELECT * FROM tbl_bophim WHERE id_bophim='$id' LIMIT 1";
    $query = mysqli_query($mysqli, $sql);
    while ($row = mysqli_fetch_array($query)) {
        unlink("uploads/" . $row["hinhanh"]);
    }
    $sql_xoa = "DELETE FROM tbl_bophim WHERE id_bophim='" . $id . "'";
    mysqli_query($mysqli, $sql_xoa);
    header("Location:../../modules/index.php?action=quanlibophim&query=them");
}
?>