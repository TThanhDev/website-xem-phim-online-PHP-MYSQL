<?php
$sql_lietke_theloaiphim = "SELECT * FROM tbl_theloai ORDER BY thutu DESC";
$row_lietke_theloaiphim = mysqli_query($mysqli, $sql_lietke_theloaiphim);
?>
<div class="lietketheloaiphim">
<h2 class="title_chuthich">Danh sách thể loại phim</h2>
<table border="1px">

    <tr>
        <th>Id</th>
        <th>Tên thể loại phim</th>
        <th>Quản lí</th>
    </tr>
    <?php
    $i = 0;

    while ($row = mysqli_fetch_array($row_lietke_theloaiphim)) {
        $i++;
        ?>
        <tr>
            <td>
                <?php echo $i ?>
            </td>
            <td>
                <?php echo $row["theloaiphim"] ?>
            </td>
            <td>
                <a href="quanlitheloaiphim/xuly.php?idtheloai=<?php echo $row["id_theloai"] ?>">Xóa</a> | <a
                    href="?action=quanlitheloaiphim&query=sua&idtheloai=<?php echo $row["id_theloai"] ?>">Sửa</a>
            </td>
        </tr>
        <?php
    }
    ?>

</table>
</div>