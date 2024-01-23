<div class="themsuatchieu">
    <h2 class="title_chuthich">Thêm suất chiếu</h2>
    <table border="1px">
        <form method="POST" action="quanlisuatchieu/xuly.php" enctype="multipart/form-data">
            
            <tr>
                <td>Ngày</td>
                <td>

                    <select name="ngaychieu">
                        <?php
                        $sql_ngaychieu = "SELECT * FROM tbl_ngaychieu,tbl_bophim WHERE tbl_ngaychieu.id_bophim = tbl_bophim.id_bophim ORDER BY id_ngaychieu DESC";
                        $query_ngaychieu = mysqli_query($mysqli, $sql_ngaychieu);
                        while($row = mysqli_fetch_array($query_ngaychieu)) {
                            ?>
                            <option value="<?php echo $row["id_ngaychieu"] ?>">
                                <?php echo $row["ngaychieu"] ?>
                                <?php echo $row["tenbophim"] ?>
                            </option>
                            <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Suất chiếu</td>
                <td><input type="time" value="<?php echo $row["suatchieu"] ?>" name="suatchieu"></td>
            </tr>
            <tr>
                <td>Số lượng</td>
                <td><input type="number" value="<?php echo $row["soluong"] ?>" name="soluong"></td>
            </tr>

            <tr>
                <td colspan="2">
                    <input class="submit" type="submit" name="themsuatchieu" value="Thêm suất chiếu">
                </td>
            </tr>
        </form>

    </table>

</div>