<p>thanh toán</p>
<?php
session_start();
include("../../admin/config/config.php");


$sql_ngaychieu = "SELECT * FROM tbl_ngaychieu ORDER BY $_POST[ngaychieu] DESC";
$query_ngaychieu = mysqli_query($mysqli, $sql_ngaychieu);
$rownc = mysqli_fetch_array($query_ngaychieu);

$sql_suatchieu = "SELECT * FROM tbl_suatchieu ORDER BY $_POST[suatchieu] DESC";
$query_suatchieu = mysqli_query($mysqli, $sql_suatchieu);
$rowsc = mysqli_fetch_array($query_suatchieu);

if($_POST["soluongmua"] > $rowsc["soluong"]){
    header("Location:../../view/index.php?quanli=loi#phim");
}
else{
if (isset($_POST["datve"])) {
    $id_khachhang = $_SESSION['id_khachhang'];
    $id_bophim = $_POST["id"];
    $ngaychieu = $rownc["ngaychieu"];
    $suatchieu = $rowsc["suatchieu"];
    $soluong = $_POST["soluongmua"];
    
    $insert_datve = "INSERT INTO tbl_datve(id_khachhang,id_bophim,ngaychieu,suatchieu,soluong) 
    VALUE('" . $id_khachhang . "','" . $id_bophim . "','" . $ngaychieu . "','" . $suatchieu . "','" . $soluong . "') ";
    mysqli_query($mysqli, $insert_datve);
    
    $soluongconlai = $rowsc["soluong"]-$_POST["soluongmua"];
    $update_soluong  = "UPDATE tbl_suatchieu SET soluong = '" . $soluongconlai . "' WHERE id_suatchieu = '$_POST[suatchieu]' ";
    mysqli_query($mysqli, $update_soluong);

    header("Location:../../view/index.php?quanli=camon#phim");
}
}
?>