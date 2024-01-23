<?php
$sql_lietke_bophim = "SELECT * FROM tbl_bophim,tbl_theloai WHERE tbl_bophim.id_theloai = tbl_theloai.id_theloai ORDER BY id_bophim DESC";
$row_lietke_slideshow = mysqli_query($mysqli, $sql_lietke_bophim);
?>
<div class="lietkebophim">
<h2 class="title_chuthich">Danh sách bộ phim</h2>
<table border="1px">

    <tr>
        <th>Id</th>
        <th>Mã bộ phim</th>
        <th>Tên bộ phim</th>
        <th>Hình ảnh</th>
        <th>Giá tiền</th>
        <th>Mô tả</th>
        <th>Thể loại</th>
        <th>Quản lí</th>
    </tr>
    <?php
    $i = 0;

    while ($row = mysqli_fetch_array($row_lietke_slideshow)) {
        $i++;
        ?>
        <tr>
            <td>
                <?php echo $i ?>
            </td>
            <td>
                <?php echo $row["mabophim"] ?>
            </td>
            <td>
                <?php echo $row["tenbophim"] ?>
            </td>
            <td>
                <img src="quanlibophim/uploads/<?php echo $row["hinhanh"] ?>" alt="" width="150px">
            </td>
            <td>
                <?php echo number_format($row["giatien"],0,",",".")."VND" ?>
            </td>
            <td>
                <?php echo $row["mota"] ?>
            </td>
            <td>
                <?php echo $row["theloaiphim"] ?>
            </td>
            <td>
                <a href="quanlibophim/xuly.php?idbophim=<?php echo $row["id_bophim"] ?>">Xóa</a> | <a
                    href="?action=quanlibophim&query=sua&idbophim=<?php echo $row["id_bophim"] ?>">Sửa</a>
            </td>
        </tr>
        <?php
    }
    ?>

</table>
</div>