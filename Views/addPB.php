<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="C_PB.php" method="POST">
    <h2>Thêm phòng ban: </h2>
        <table>
            <tr>
                <td>IDPB: </td>
                <td><input type="text" name="IDPBAdd"></td>
            </tr>
            <tr>
                <td>Tên phòng ban: </td>
                <td><input type="text" name="TenpbAdd"></td>
            </tr>
            <tr>
                <td>Mô tả: </td>
                <td><input type="text" name="MotaAdd"></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="add" value="Thêm">
                    <input type="reset" name="reset" value="Reset">
                    <input type="button" value="Quay lại" onclick="window.location.href='javascript:history.back()'">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>