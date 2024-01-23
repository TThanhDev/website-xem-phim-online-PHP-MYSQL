<?php
$sql_sua_slideshow = "SELECT * FROM tbl_slideshow WHERE id_slideshow =$_GET[idslideshow] LIMIT 1";
$query_sua_slideshow = mysqli_query($mysqli, $sql_sua_slideshow);
?>
<div class="suaslideshow">
    <h2 class="title_chuthich">Sửa hình ảnh slideshow</h2>
    <table border="1px">
        <?php
        while ($row = mysqli_fetch_array($query_sua_slideshow)) {
            ?>
            <form method="POST" action="quanlislideshow/xuly.php?idslideshow=<?php echo $_GET["idslideshow"] ?>"
                enctype="multipart/form-data">
                <tr>
                    <td>Hình ảnh</td>
                    <td>
                        <input type="file" name="hinhanh">
                        <img src="quanlislideshow/uploads/<?php echo $row["hinhanh"] ?>" alt="" width="500px">
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><input class="submit" type="submit" name="suaslideshow" value="Sửa hình ảnh slideshow"></td>
                </tr>
            </form>
            <?php
        }
        ?>


    </table>
</div>