<?php
$mysqli = new mysqli("localhost", "root", "", "buyticket");

// Check connection
if ($mysqli->connect_errno) {
    echo "Kết nối MySQLi lỗi " . $mysqli->connect_error;
    exit();
}
?>