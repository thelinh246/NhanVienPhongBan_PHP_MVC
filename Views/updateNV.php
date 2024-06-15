<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật nhân viên</title>
</head>
<body>
    <form action="C_NV.php" method="POST">
    <?php
        echo '<table border="1" width="100%">';
        echo '<caption>Dữ liệu truy xuất từ bảng nhân viên</caption>';
        echo '<tr><th>ID nhân viên</th><th>Họ tên</th><th>ID ID phòng ban</th><th>Địa chỉ</th></tr>';
        foreach ($nhanvien as $nv) {
            if (isset($nv) && is_object($nv)) {
                echo "
                    <tr>
                        <td>
                            <input type='hidden' name='IDUd' value='$nv->IDnv'>
                            $nv->IDnv
                        </td>
                        <td>
                            <input style='width: 98%' type='text' name='HotenUd' value='$nv->Hoten'>
                        </td>
                        <td>
                            <select style='width: 98%' name='IDPBUd'>";
                            foreach ($IDPBList as $id){
                                echo "<option value='$id'>$id</option>";
                            }
                        echo"</select>
                        </td>
                        <td>
                            <input style='width: 98%' type='text' name='DiachiUd' value='$nv->Diachi'>
                        </td>
                    </tr>
                    <tr>
                        <td colspan='5' align='right'>
                            <input type='submit' name='update' value='Cập nhật'>
                        </td>
                    </tr>";
            } else {
                echo "<p>Nhân viên không tồn tại.</p>";
            }
        }
        echo '</table>';
    ?>
    <input style="margin-left: 95%;" type="button" value="Quay lại" onclick="window.location.href='javascript:history.back()'">
    </form>
</body>
</html>