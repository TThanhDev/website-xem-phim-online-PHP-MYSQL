<?php
$sql_lietke_dondatve = "SELECT * FROM tbl_datve, tbl_bophim, tbl_taikhoan WHERE
tbl_datve.id_khachhang = tbl_taikhoan.id_dangki AND
tbl_datve.id_bophim = tbl_bophim.id_bophim ORDER BY id_datve DESC";
$row_lietke_dondatve = mysqli_query($mysqli, $sql_lietke_dondatve);
?>
<div class="lietkedondatve">
<h2 class="title_chuthich">Danh sách đơn đặt vé</h2>
<table border="1px">

    <tr>
        <th>Id</th>
        <th>Tên khách hàng</th>
        <th>Điện thoại</th>
        <th>Địa chỉ</th>
        <th>Tên bộ phim</th>
        <th>Ngày chiếu</th>
        <th>Suất chiếu</th>
        <th>Số lượng</th>
        <th>Quản lí</th>
    </tr>
    <?php
    $i = 0;

    while ($row = mysqli_fetch_array($row_lietke_dondatve)) {
        $i++;
        ?>
        <tr>
            <td>
                <?php echo $i ?>
            </td>
            <td>
                <?php echo $row["ten"] ?>
            </td>
            <td>
                <?php echo $row["dienthoai"] ?>
            </td>
            <td>
                <?php echo $row["diachi"] ?>
            </td>
            <td>
                <?php echo $row["tenbophim"] ?>
            </td>
            <td>
                <?php echo $row["ngaychieu"] ?>
            </td>
            <td>
                <?php echo $row["suatchieu"] ?>
            </td>
            <td>
                <?php echo $row["soluong"] ?>
            </td>
            <td>
                <a href="quanlidondatve/xuly.php?iddatve=<?php echo $row["id_datve"] ?>">Xóa</a> 
            </td>
        </tr>
        <?php
    }
    ?>

</table>
</div>