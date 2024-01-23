<?php
session_start();
include("../admin/config/config.php");
if(isset($_POST["dangnhap"])) {
    $email = $_POST["email"];
    $matkhau = md5($_POST["password"]);
    $sql = "SELECT * FROM tbl_taikhoan WHERE email ='".$email."' AND matkhau ='".$matkhau."' LIMIT 1";
    $row = mysqli_query($mysqli, $sql);
    $count = mysqli_num_rows($row);
    if($count > 0) {
        $row_data = mysqli_fetch_array($row);
        $_SESSION["dangnhap"] = $row_data["ten"];
        $_SESSION["id_khachhang"] = $row_data["id_dangki"];
        header("Location:index.php");
    } else {
        echo '<p style="color:white">Tài khoản hoặc Mật khẩu không đúng, vui lòng nhập lại. </p>';
        header("Location:dangnhap.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>
    <div class="wrapper">
        <form action="" autocomplete="off" method="POST">
            <div class="form_dangnhap">
            <table>
                <tr>
                    <td colspan="2">
                        <h2>Đăng nhập</h2>
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                    <td>mật khẩu</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td colspan="2"><input class="submit" type="submit" name="dangnhap" value="Đăng nhập"></td>
                </tr>
                <tr>
                    <td colspan="2">Bạn chưa có tài khoản?<a href="dangki.php">Đăng kí</a></td>
                </tr>
                <tr>
                    <td colspan="2"><a href="../admin/modules/login.php">Đăng nhập với tư cách quản trị viên</a></td>
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
    }

    input {
        background: transparent;
        border: none;
        outline: none;
        color: #CD9B1D;
        width: 300px;
        font-size: 1.2em;
        border-bottom: 2px solid #CD9B1D;
    }

    .submit {
        color: #550000;
        background-color: #CD9B1D;
        cursor: pointer;
        border-radius: 5px;
        font-size: 1.2em;
        width: 100%;
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