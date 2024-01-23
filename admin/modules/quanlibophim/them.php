<div class="thembophim">
    <h2 class="title_chuthich">Thêm bộ phim</h2>
    <table class="tbl_thembophim" border="1px">
        <form method="POST" action="quanlibophim/xuly.php" enctype="multipart/form-data">
            <tr>
                <td>Mã bộ phim</td>
                <td><input type="text" name="mabophim"></td>
            </tr>
            <tr>
                <td>Tên bộ phim</td>
                <td><input type="text" name="tenbophim"></td>
            </tr>
            <tr>
                <td>Giá tiền</td>
                <td><input type="text" name="giatien"></td>
            </tr>
            <tr>
                <td>Mô tả</td>
                <td><textarea name="mota" rows="5"></textarea></td>
            </tr>
            <tr>
                <td>Hình ảnh</td>
                <td><input type="file" name="hinhanh"></td>
            </tr>
            <tr>
                <td>Thể loại </td>
                <td>
                    <select name="theloai">
                        <?php
                            $sql_theloai = "SELECT * FROM tbl_theloai ORDER BY id_theloai DESC";
                            $query_theloai = mysqli_query($mysqli, $sql_theloai);
                            while ($row = mysqli_fetch_array($query_theloai)){
                        ?>
                        <option value="<?php echo $row["id_theloai"] ?>"><?php echo $row["theloaiphim"] ?></option>
                        <?php
                            }
                        ?>
                    </select>
                </td>
            </tr>

            <tr>
                <td colspan="2"><input class="submit" type="submit" name="thembophim" value="Thêm bộ phim">
                </td>
            </tr>
        </form>

    </table>

</div>