<?php
include("../../config/config.php");

$tentheloaiphim=$_POST["tentheloaiphim"];
$thutu=$_POST["thutu"];
if(isset($_POST["themtheloaiphim"])){
    $sql_them = "INSERT INTO tbl_theloai(theloaiphim,thutu) VALUE('".$tentheloaiphim."','".$thutu."') ";
    mysqli_query($mysqli,$sql_them);
    header("Location:../../modules/index.php?action=quanlitheloaiphim&query=them");
}elseif(isset($_POST["suatheloaiphim"])){
    $sql_update = "UPDATE tbl_theloai SET theloaiphim = '".$tentheloaiphim."', thutu = '".$thutu."' WHERE id_theloai= '$_GET[idtheloai]' ";
    mysqli_query($mysqli,$sql_update);
    header("Location:../../modules/index.php?action=quanlitheloaiphim&query=them");
}else{
    $id = $_GET["idtheloai"];
    $sql_xoa = "DELETE FROM tbl_theloai WHERE id_theloai='".$id."'";
    mysqli_query($mysqli,$sql_xoa);
    header("Location:../../modules/index.php?action=quanlitheloaiphim&query=them");
}
?>