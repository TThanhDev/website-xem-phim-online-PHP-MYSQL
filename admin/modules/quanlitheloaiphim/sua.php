<?php
$sql_sua_theloaiphim = "SELECT * FROM tbl_theloai WHERE id_theloai=$_GET[idtheloai] LIMIT 1";
$query_sua_theloaiphim = mysqli_query($mysqli, $sql_sua_theloaiphim);
?>
<div class="suatheloaiphim">
<h2 class="title_chuthich">Sửa thể loại phim</h2>
<table class="tbl_suatheloaiphim" border="1px">
    <form method="POST" action="quanlitheloaiphim/xuly.php?idtheloai=<?php echo $_GET["idtheloai"] ?>">
        <?php
        while ($row = mysqli_fetch_array($query_sua_theloaiphim)) {
        ?>
            <tr>
                <td>Tên thể loại phim</td>
                <td><input type="text" value="<?php echo $row["theloaiphim"]?>" name="tentheloaiphim"></td>
            </tr>
            <tr>
                <td>Thứ tự</td>
                <td><input type="text" value="<?php echo $row["thutu"]?>" name="thutu"></td>
            </tr>
            <tr>
                <td colspan="2"><input class="submit" type="submit" name="suatheloaiphim" value="Sửa thể loại phim"></td>
            </tr>
        <?php
        }
        ?>
    </form>

</table>
</div>