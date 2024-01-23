<?php
include("../../config/config.php");

$ngaychieu = $_POST["ngaychieu"];
$tenbophim = $_POST["tenbophim"];


if(isset($_POST["themngaychieu"])) {
    $sql_them = "INSERT INTO tbl_ngaychieu(id_bophim,ngaychieu) 
    VALUE('".$tenbophim."','".$ngaychieu."') ";
    mysqli_query($mysqli, $sql_them);
    header("Location:../../modules/index.php?action=quanlingaychieu&query=them");

} elseif(isset($_POST["suangaychieu"])) {
    $sql_update = "UPDATE tbl_ngaychieu SET ngaychieu = '".$ngaychieu."', id_bophim = '".$tenbophim."' WHERE id_ngaychieu= '$_GET[idngaychieu]' ";
    mysqli_query($mysqli, $sql_update);
    header("Location:../../modules/index.php?action=quanlingaychieu&query=them");

} else {
    $id = $_GET["idngaychieu"];
    $sql_xoa = "DELETE FROM tbl_ngaychieu WHERE id_ngaychieu='".$id."'";
    mysqli_query($mysqli, $sql_xoa);
    header("Location:../../modules/index.php?action=quanlingaychieu&query=them");
}
?>