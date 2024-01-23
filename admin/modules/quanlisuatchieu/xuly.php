<?php
include("../../config/config.php");

$ngaychieu = $_POST["ngaychieu"];
$tenbophim = $_POST["tenbophim"];
$suatchieu = $_POST["suatchieu"];
$soluong = $_POST["soluong"];


if(isset($_POST["themsuatchieu"])) {
    $sql_them = "INSERT INTO tbl_suatchieu(id_ngaychieu,suatchieu,soluong) 
    VALUE('".$ngaychieu."','".$suatchieu."','".$soluong."') ";
    mysqli_query($mysqli, $sql_them);
    header("Location:../../modules/index.php?action=quanlisuatchieu&query=them");

} elseif(isset($_POST["suasuatchieu"])) {
    $sql_update = "UPDATE tbl_suatchieu SET id_ngaychieu = '".$ngaychieu."', suatchieu = '".$suatchieu."', soluong = '".$soluong."' WHERE id_suatchieu= '$_GET[idsuatchieu]' ";
    mysqli_query($mysqli, $sql_update);
    header("Location:../../modules/index.php?action=quanlisuatchieu&query=them");

} else {
    $id = $_GET["idsuatchieu"];
    $sql_xoa = "DELETE FROM tbl_suatchieu WHERE id_suatchieu='".$id."'";
    mysqli_query($mysqli, $sql_xoa);
    header("Location:../../modules/index.php?action=quanlisuatchieu&query=them");
}
?>