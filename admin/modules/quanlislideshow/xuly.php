<?php
include("../../config/config.php");

//xử lí hình ảnh
$hinhanh = $_FILES["hinhanh"]["name"];
$hinhanh_tmp = $_FILES["hinhanh"]["tmp_name"];
$hinhanh = time() . "_" . $hinhanh;

if (isset($_POST["themslideshow"])) {
    $sql_them = "INSERT INTO tbl_slideshow(hinhanh) VALUE('" . $hinhanh . "') ";
    mysqli_query($mysqli, $sql_them);
    move_uploaded_file($hinhanh_tmp, "uploads/" . $hinhanh);
    header("Location:../../modules/index.php?action=quanlislideshow&query=them");

} elseif (isset($_POST["suaslideshow"])) {

    move_uploaded_file($hinhanh_tmp, "uploads/" . $hinhanh);
    $sql_update = "UPDATE tbl_slideshow SET  hinhanh = '" . $hinhanh . "' WHERE id_slideshow= '$_GET[idslideshow]' ";
    $sql = "SELECT * FROM tbl_slideshow WHERE id_slideshow='$_GET[idslideshow]' LIMIT 1";
    $query = mysqli_query($mysqli, $sql);
    while ($row = mysqli_fetch_array($query)) {
        unlink("uploads/" . $row["hinhanh"]);
    }

    mysqli_query($mysqli, $sql_update);
    header("Location:../../modules/index.php?action=quanlislideshow&query=them");

} else {
    $id = $_GET["idslideshow"];
    $sql = "SELECT * FROM tbl_slideshow WHERE id_slideshow='$id' LIMIT 1";
    $query = mysqli_query($mysqli, $sql);
    while ($row = mysqli_fetch_array($query)) {
        unlink("uploads/" . $row["hinhanh"]);
    }
    $sql_xoa = "DELETE FROM tbl_slideshow WHERE id_slideshow='" . $id . "'";
    mysqli_query($mysqli, $sql_xoa);
    header("Location:../../modules/index.php?action=quanlislideshow&query=them");
}
?>