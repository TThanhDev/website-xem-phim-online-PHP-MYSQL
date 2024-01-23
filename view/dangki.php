<?php
include("../admin/config/config.php");
if(isset($_POST["dangki"])) {
    $ten = $_POST["hovaten"];
    $email = $_POST["email"];
    $matkhau = md5($_POST["matkhau"]);
    $diachi = $_POST["diachi"];
    $dienthoai = $_POST["dienthoai"];
    $sql_dangki = mysqli_query($mysqli, "INSERT INTO tbl_taikhoan(ten, email, matkhau, diachi, dienthoai) 
    VALUE('".$ten."','".$email."','".$matkhau."','".$diachi."','".$dienthoai."')");
    if($sql_dangki) {
        echo '<p style="color:green">bạn đã đang kí thành công </p>';
        $_SESSION['id_khachhang'] = mysqli_insert_id($mysqli);
        header("Location: dangnhap.php ");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng kí</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>
    <div class="wrapper">
        <form action="" method="POST">
            <div class="form_dangki">
            <table >
                <tr>
                    <td colspan="2"><h2>Đăng kí</h2></td>
                </tr>
                <tr>
                    <td>Họ và tên : </td>
                    <td><input type="text" name="hovaten" ></td>
                </tr>
                <tr>
                    <td>Email : </td>
                    <td><input type="email" name="email"></td>
                </tr>
                <tr>
                    <td>Mật khẩu : </td>
                    <td><input type="password" name="matkhau"></td>
                </tr>
                <tr>
                    <td>Địa chỉ : </td>
                    <td><input type="text" name="diachi"></td>
                </tr>
                <tr>
                    <td>Số điện thoại : </td>
                    <td><input type="tel" name="dienthoai"></td>
                </tr>
                <tr>
                    <td colspan="2"><input class="submit" type="submit" name="dangki" value="Đăng kí"></td>
                </tr>
                <tr>
                    <td colspan="2">Bạn đã có tài khoản?<a href="dangnhap.php">Đăng nhập</a></td>
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

    .form_dangki {
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