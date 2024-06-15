<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" width="100%">
        <caption>Du lieu truy xuat tu bang nhan vien</caption>
        <tr>
            <th>ID nhan vien</th>
            <th>Ho ten</th>
            <th>ID phong ban</th>
            <th>Dia chi</th>
            <th></th>
        </tr>
        <?php
            foreach ($NVList as $nhanvien) {
                if (isset($nhanvien) && is_object($nhanvien)) {
            echo "<tr>
                    <td>$nhanvien->IDnv</td>
                    <td>$nhanvien->Hoten</td>
                    <td>$nhanvien->IDPB</td>
                    <td>$nhanvien->Diachi</td>
                    <td>
                        <input type='button' value='Cập nhật' onclick=window.location.href='../Controllers/C_NV.php?mod4=1&id=$nhanvien->IDnv'>
                    </td>
                </tr>";
            } else {
                echo "<p>Nhân viên không tồn tại.</p>";
            }
        }
        ?>
        <tr>
            <td colspan='5' align='right'>
                <input type='button' value='Thêm' onclick=window.location.href='../Controllers/C_NV.php?mod5=1'>
                <input type='button' value='Xóa' onclick=window.location.href='../Controllers/C_NV.php?mod6=1'>
            </td>
        </tr>
        
    </table>
    <input style="margin-left: 95%;" type="button" value="Quay lại" onclick="window.location.href='../indexLogin.php'">
</body>
</html>