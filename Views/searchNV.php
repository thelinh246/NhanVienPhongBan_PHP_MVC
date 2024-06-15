<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm kiếm nhân viên</title>
</head>
<body style="width: 500px; margin-left: auto; margin-right: auto;">
    <form action="C_NV.php" method="POST">
    <h1 style="margin-left: 10%;">Tìm kiếm nhân viên</h1></br>
    <table>
            <tr>
                <td><input type="radio" name="choice" value="IDnv">ID nhân viên</td>
                <td><input type="radio" name="choice" value="Hoten">Họ tên nhân viên</td>
                <td><input type="radio" name="choice" value="Diachi">Địa chỉ nhân viên</td>
            </tr>
            <tr>
                <td>Nhập thông tin: </td>
                <td><input type="text" name="searchValue" value=""></td>
            </tr>
            <tr>
                <td colspan="2" style="padding-left: 30%;">
                    <input type="submit" name="search" value="Tìm kiếm">
                    <input type="reset" name="reset" value="Reset">
                    <input type="button" name="b2" value="Quay lại" onclick="window.location.href='../index.php'">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>