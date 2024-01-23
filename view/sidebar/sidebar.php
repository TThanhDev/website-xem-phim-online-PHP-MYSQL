
<div class="sidebar">
    <h2>Thể loại</h2>
    <ul class="type_index">
        <?php
        $sql_theloai = "SELECT * FROM tbl_theloai ORDER BY id_theloai DESC";
        $query_theloai = mysqli_query($mysqli, $sql_theloai);
        while ($row = mysqli_fetch_array($query_theloai)) {
            ?>
            <li>
                <a href="index.php?quanli=theloaiphim&id=<?php echo $row["id_theloai"] ?> #phim">
                    <?php echo $row["theloaiphim"] ?>
                </a>
            </li>
            <?php
        }
        ?>
    </ul>
</div>