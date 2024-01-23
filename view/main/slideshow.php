<?php
$sql_slideshow = "SELECT * FROM tbl_slideshow ORDER BY id_slideshow ASC";
$query_slideshow = mysqli_query($mysqli, $sql_slideshow);
$query_slideshows = mysqli_query($mysqli, $sql_slideshow);
$currentSlide = 0;
?>
<div class="container">
    <?php
    while ($dong = mysqli_fetch_array($query_slideshow)) {
        ?>
        <div class="mySlides">
            <img src="../admin/modules/quanlislideshow/uploads/<?php echo $dong["hinhanh"] ?>" style="width:100%">
        </div>
        <?php
    }
    ?>



    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>


    <!-- Thumbnail images -->
    <div class="row">
        <?php
        while ($row = mysqli_fetch_array($query_slideshows)) {
            ?>
            <div class="column">
                <img src="../admin/modules/quanlislideshow/uploads/<?php echo $row["hinhanh"] ?>" class="demo cursor"
                    style="width:100%" onclick="currentSlide(<?php echo $currentSlide += 1 ?>)" alt="">
            </div>
            <?php
        }
        ?>
    </div>

</div>