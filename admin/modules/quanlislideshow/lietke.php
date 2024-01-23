<?php
$sql_lietke_slideshow = "SELECT * FROM tbl_slideshow ORDER BY id_slideshow DESC";
$row_lietke_slideshow = mysqli_query($mysqli, $sql_lietke_slideshow);
?>
<div class="lietkeslideshow">
<h2 class="title_chuthich">Danh sách slideshow</h2>
<table border="1px">

    <tr>
        <th>Id</th>
        <th>Hình ảnh</th>
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
                <img src="quanlislideshow/uploads/<?php echo $row["hinhanh"] ?>" alt="" width="500px">
            </td>
            <td>
                <a href="quanlislideshow/xuly.php?idslideshow=<?php echo $row["id_slideshow"] ?>">Xóa</a> | <a
                    href="?action=quanlislideshow&query=sua&idslideshow=<?php echo $row["id_slideshow"] ?>">Sửa</a>
            </td>
        </tr>
        <?php
    }
    ?>

</table>
</div>