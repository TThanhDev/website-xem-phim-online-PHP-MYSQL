<div class="themngaychieu">
    <h2 class="title_chuthich">Thêm ngày chiếu</h2>
    <table  border="1px">
        <form method="POST" action="quanlingaychieu/xuly.php" enctype="multipart/form-data">
            <tr>
                <td>Ngày</td>
                <td><input type="date" name="ngaychieu"></td>
            </tr>
            <tr>
                <td>Tên bộ phim</td>
                <td>
                    <select name="tenbophim">
                        <?php
                        $sql_bophim = "SELECT * FROM tbl_bophim ORDER BY id_bophim DESC";
                        $query_bophim = mysqli_query($mysqli, $sql_bophim);
                        while($row = mysqli_fetch_array($query_bophim)) {
                            ?>
                            <option value="<?php echo $row["id_bophim"] ?>">
                                <?php echo $row["tenbophim"] ?>
                            </option>
                            <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>

            <tr>
                <td colspan="2">
                    <input class="submit" type="submit" name="themngaychieu" value="Thêm ngày chiếu">
                </td>
            </tr>
        </form>

    </table>

</div>