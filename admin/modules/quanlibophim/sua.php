<?php
$sql_sua_bophim = "SELECT * FROM tbl_bophim WHERE id_bophim =$_GET[idbophim] LIMIT 1";
$query_sua_bophim = mysqli_query($mysqli, $sql_sua_bophim);
?>
<div class="suabophim">
    <h2 class="title_chuthich">Sửa thông tin bộ phim</h2>
    <table class="tbl_suabophim" border="1px">
        <?php
        while ($row = mysqli_fetch_array($query_sua_bophim)) {
            ?>
            <form method="POST" action="quanlibophim/xuly.php?idbophim=<?php echo $_GET["idbophim"] ?>"
                enctype="multipart/form-data">
                <tr>
                    <td>Mã bộ phim</td>
                    <td><input type="text" value="<?php echo $row["mabophim"] ?>" name="mabophim"></td>
                </tr>
                <tr>
                    <td>Tên bộ phim</td>
                    <td><input type="text" value="<?php echo $row["tenbophim"] ?>" name="tenbophim"></td>
                </tr>
                <tr>
                    <td>Giá tiền</td>
                    <td><input type="text" value="<?php echo $row["giatien"] ?>" name="giatien"></td>
                </tr>
                <tr>
                    <td>Mô tả</td>
                    <td><textarea name="mota" rows="5"><?php echo $row["mota"] ?></textarea></td>
                </tr>
                <tr>
                    <td>Hình ảnh</td>
                    <td>
                        <input type="file" name="hinhanh">
                        <img src="quanlibophim/uploads/<?php echo $row["hinhanh"] ?>" alt="" width="150px">
                    </td>
                </tr>
                <tr>
                    <td>Thể loại </td>
                    <td>
                        <select name="theloai">
                            <?php
                            $sql_theloai = "SELECT * FROM tbl_theloai ORDER BY id_theloai DESC";
                            $query_theloai = mysqli_query($mysqli, $sql_theloai);
                            while ($row = mysqli_fetch_array($query_theloai)) {
                                if ($row["id_theloai"] == $row["id_theloai"]){
                                ?>
                                <option selected value="<?php echo $row["id_theloai"] ?>">
                                    <?php echo $row["theloaiphim"] ?>
                                </option>
                                <?php
                                }else{
                                ?>
                                <option value="<?php echo $row["id_theloai"] ?>">
                                    <?php echo $row["theloaiphim"] ?>
                                </option>
                                <?php
                                }
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><input class="submit" type="submit" name="suabophim" value="Sửa bộ phim"></td>
                </tr>
            </form>
            <?php
        }
        ?>


    </table>
</div>