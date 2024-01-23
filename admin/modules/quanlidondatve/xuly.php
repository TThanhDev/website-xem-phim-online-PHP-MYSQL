<?php
include("../../config/config.php");



$id = $_GET["iddatve"];
$sql_xoa = "DELETE FROM tbl_datve WHERE id_datve='" . $id . "'";
mysqli_query($mysqli, $sql_xoa);
header("Location:../../modules/index.php?action=quanlidondatve&query=lietke");

?>