<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách phòng ban</title>
</head>
<body>
    <table border="1" width="100%">
        <caption>Dữ liệu truy xuất từ bảng phòng ban</caption>
        <tr>
            <th>ID phòng ban</th>
            <th>Tên phòng ban</th>
            <th>Mô tả</th>
            <th></th>
        </tr>
        <?php
            foreach ($PBList as $phongban) {
                if (isset($phongban) && is_object($phongban)) {
            echo "<tr>
                    <td>$phongban->IDPB</td>
                    <td>$phongban->Tenpb</td>
                    <td>$phongban->Mota</td>
                    <td>
                        <a href='../Controllers/C_NV.php?mod0=1&id=$phongban->IDPB'>Xem</a>
                        <input type='button' value='Cập nhật' onclick=window.location.href='../Controllers/C_PB.php?mod3=1&id=$phongban->IDPB'>
                    </td>
                </tr>";
            } else {
                echo "<p>Nhân viên không tồn tại.</p>";
            }
        }
        ?>
        <tr>
            <td colspan='5' align='right'>
                <input type='button' value='Thêm' onclick=window.location.href='../Controllers/C_PB.php?mod4=1'>
                <input type='button' value='Xóa' onclick=window.location.href='../Controllers/C_PB.php?mod5=1'>
            </td>
        </tr>
        
    </table>
    <input style="margin-left: 95%;" type="button" value="Quay lại" onclick="window.location.href='../indexLogin.php'">
</body>
</html>