<?php
$sql_lietke_ngaychieu = "SELECT * FROM tbl_ngaychieu,tbl_bophim WHERE tbl_ngaychieu.id_bophim = tbl_bophim.id_bophim ORDER BY id_ngaychieu DESC";
$row_lietke_ngaychieu = mysqli_query($mysqli, $sql_lietke_ngaychieu);
?>
<div class="lietkengaychieu">
<h2 class="title_chuthich">Danh sách ngày chiếu</h2>
<table border="1px">

    <tr>
        <th>Id</th>
        <th>Ngày</th>
        <th>Tên bộ phim</th>
        <th>Hình ảnh</th>
        <th>Quản lí</th>
    </tr>
    <?php
    $i = 0;

    while ($row = mysqli_fetch_array($row_lietke_ngaychieu)) {
        $i++;
        ?>
        <tr>
            <td>
                <?php echo $i ?>
            </td>
            <td>
                <?php echo $row["ngaychieu"] ?>
            </td>
            <td>
                <?php echo $row["tenbophim"] ?>
            </td>
            <td>
                <img src="quanlibophim/uploads/<?php echo $row["hinhanh"] ?>" alt="" width="150px">
            </td>
            <td>
                <a href="quanlingaychieu/xuly.php?idngaychieu=<?php echo $row["id_ngaychieu"] ?>">Xóa</a> | <a
                    href="?action=quanlingaychieu&query=sua&idngaychieu=<?php echo $row["id_ngaychieu"] ?>">Sửa</a>
            </td>
        </tr>
        <?php
    }
    ?>

</table>
</div>