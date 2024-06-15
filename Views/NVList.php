<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách nhân viên</title>
</head>
<body>
    <h2>Danh sách nhân viên:</h2>
        <?php
            echo '<table border="1" width="100%">';
            echo '<caption>Du lieu truy xuat tu bang nhan vien</caption>';
            echo '<tr><th>ID nhan vien</th><th>Ho ten</th><th>ID phong ban</th><th>Dia chi</th></tr>';
            foreach ($NVList as $nhanvien) {
                if (isset($nhanvien) && is_object($nhanvien)) {
                    echo "<tr><td> $nhanvien->IDnv </td><td> $nhanvien->Hoten </td><td>$nhanvien->IDPB</td><td>$nhanvien->Diachi</td></tr>";
                } else {
                    echo "<p>Nhân viên không tồn tại.</p>";
                }
            }
            echo '</table>';
        ?>
        <input style="margin-left: 95%;" type="button" name="b2" value="Quay lại" onclick="window.location.href='javascript:history.back()'">
</body>
</html>