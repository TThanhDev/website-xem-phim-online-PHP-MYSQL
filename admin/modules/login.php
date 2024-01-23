<?php
session_start();
include("../config/config.php");
if(isset($_POST["dangnhap"])) {
    $taikhoan = $_POST["username"];
    $matkhau = md5($_POST["password"]);
    $sql = "SELECT * FROM tbl_admin WHERE username ='".$taikhoan."' AND password ='".$matkhau."' LIMIT 1";
    $row = mysqli_query($mysqli, $sql);
    $count = mysqli_num_rows($row);
    if($count > 0) {
        $_SESSION["dangnhap"] = $taikhoan;
        header("Location:index.php");
    } else {
        echo '<p style="color:white">Tài khoản hoặc Mật khẩu không đúng, vui lòng nhập lại. </p>';
        header("Location:login.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập quản trị viên</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>
    <div class="wrapper">
        <form action="" autocomplete="off" method="POST">
            <div class="form_dangnhap">
                <table>
                    <tr>
                        <td colspan="2">
                            <h2>Đăng nhập quản trị viên</h2>
                        </td>
                    </tr>
                    <tr>
                        <td>tài khoản</td>
                        <td><input type="text" name="username"></td>
                    </tr>
                    <tr>
                        <td>mật khẩu</td>
                        <td><input type="password" name="password"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input class="submit" type="submit" name="dangnhap" value="Đăng nhập"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <a href="../../view/dangnhap.php">Đăng nhập với tư cách người dùng</a>
                        </td>
                    </tr>
                </table>
            </div>
        </form>

    </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</body>

</html>
<style>
    .wrapper {
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #CD9B1D;
        height: 700px;
    }

    .form_dangnhap {
        border: 2px solid #8B6914;
        border-radius: 20px;
    }

    table {
        width: 100%;
        font-size: 1.3em;
        border-spacing: 20px;
        border: none;
    }

    input {
        background: transparent;
        border: none;
        outline: none;
        color: #CD9B1D;
        width: 300px;
        text-align: start;
        border-bottom: 2px solid #CD9B1D;
    }

    .submit {
        color: #550000;
        background-color: #CD9B1D;
        cursor: pointer;
        border-radius: 5px;
        font-size: 1.2em;
        width: 100%;
        text-align: center;
    }

    a {
        text-decoration: none;
        color: #CD9B1D;
    }

    a:hover {
        text-decoration: underline;
        color: #8B6914;
    }

    h2 {
        margin: 70px 0 40px 0;
    }
</style>