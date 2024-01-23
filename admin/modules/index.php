<?php
session_start();
if (!isset($_SESSION["dangnhap"])){
    header("Location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>
    <div class="wrapper">
        <?php
        include("../config/config.php");
        include("header.php");
        include("main.php");
        include("footer.php");
        ?>
    </div>

</body>

</html>