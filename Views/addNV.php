<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="C_NV.php" method="POST">
    <h2>Thêm nhân viên: </h2>
        <table>
            <tr>
                <td>IDNV: </td>
                <td><input type="text" name="IDNVAdd"></td>
            </tr>
            <tr>
                <td>Họ tên: </td>
                <td><input type="text" name="HotenAdd"></td>
            </tr>
            <tr>
                <td>IDPB: </td>
                <td>
                    <select name='IDPBAdd'>
                        <?php
                        foreach ($IDPBList as $IDPB)
                            echo "<option value='$IDPB'>$IDPB</option>";
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Địa chỉ: </td>
                <td><input type="text" name="DiachiAdd"></td>
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