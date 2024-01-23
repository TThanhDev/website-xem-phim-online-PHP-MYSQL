<?php
$sql_sua_ngaychieu = "SELECT * FROM tbl_ngaychieu WHERE id_ngaychieu =$_GET[idngaychieu] LIMIT 1";
$query_sua_ngaychieu = mysqli_query($mysqli, $sql_sua_ngaychieu);
?>
<div class="suangaychieu">
    <h2 class="title_chuthich">Sửa thông tin bộ phim</h2>
    <table border="1px">
        <?php
        while($row = mysqli_fetch_array($query_sua_ngaychieu)) {
            ?>
            <form method="POST" action="quanlingaychieu/xuly.php?idngaychieu=<?php echo $_GET["idngaychieu"] ?>"
                enctype="multipart/form-data">
                <tr>
                    <td>Ngày</td>
                    <td><input type="date" value="<?php echo $row["ngaychieu"] ?>" name="ngaychieu"></td>
                </tr>
                <tr>
                    <td>Tên bộ phim</td>
                    <td>
                        <select name="tenbophim">
                            <?php
                            $sql_bophim = "SELECT * FROM tbl_bophim ORDER BY id_bophim DESC";
                            $query_bophim = mysqli_query($mysqli, $sql_bophim);
                            while($row = mysqli_fetch_array($query_bophim)) {
                                if($row["id_bophim"] == $row["id_bophim"]) {
                                    ?>
                                    <option selected value="<?php echo $row["id_bophim"] ?>">
                                        <?php echo $row["tenbophim"] ?>
                                    </option>
                                    <?php
                                } else {
                                    ?>
                                    <option value="<?php echo $row["id_bophim"] ?>">
                                        <?php echo $row["tenbophim"] ?>
                                    </option>
                                    <?php
                                }
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><input class="submit" type="submit" name="suangaychieu" value="Sửa ngày chiếu"></td>
                </tr>
            </form>
            <?php
        }
        ?>


    </table>
</div>