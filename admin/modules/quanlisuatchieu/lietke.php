<?php
$sql_lietke_suatchieu = "SELECT * FROM tbl_ngaychieu,tbl_bophim,tbl_suatchieu WHERE tbl_ngaychieu.id_bophim = tbl_bophim.id_bophim AND tbl_suatchieu.id_ngaychieu = tbl_ngaychieu.id_ngaychieu ORDER BY id_suatchieu DESC";
$row_lietke_suatchieu = mysqli_query($mysqli, $sql_lietke_suatchieu);
?>
<div class="lietkesuatchieu">
<h2 class="title_chuthich">Danh sách suất chiếu</h2>
<table border="1px">

    <tr>
        <th>Id</th>
        <th>Tên bộ phim</th>
        <th>Hình ảnh</th>
        <th>Ngày</th>
        <th>Suất chiếu</th>
        <th>Số lượng</th>
        <th>Quản lí</th>
    </tr>
    <?php
    $i = 0;

    while ($row = mysqli_fetch_array($row_lietke_suatchieu)) {
        $i++;
        ?>
        <tr>
            <td>
                <?php echo $i ?>
            </td>
            <td>
                <?php echo $row["tenbophim"] ?>
            </td>
            <td>
                <img src="quanlibophim/uploads/<?php echo $row["hinhanh"] ?>" alt="" width="150px">
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
                <a href="quanlisuatchieu/xuly.php?idsuatchieu=<?php echo $row["id_suatchieu"] ?>">Xóa</a> | <a
                    href="?action=quanlisuatchieu&query=sua&idsuatchieu=<?php echo $row["id_suatchieu"] ?>">Sửa</a>
            </td>
        </tr>
        <?php
    }
    ?>

</table>
</div>