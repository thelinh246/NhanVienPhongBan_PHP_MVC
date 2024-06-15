<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật phòng ban</title>
</head>
<body>
    <form action="C_PB.php" method="POST">
    
        <table border="1" width="100%">
            <caption>Dữ liệu truy xuất từ bảng phòng ban</caption>
            <tr><th>ID phòng ban</th><th>Tên phòng ban</th><th>Mô tả</th></tr>
        <?php
        foreach ($phongban as $pb) {
            if (isset($pb) && is_object($pb)) {
                echo "
                    <tr>
                        <td>
                            <input type='hidden' name='IDUd' value='$pb->IDPB'>
                            $pb->IDPB
                        </td>
                        <td>
                            <input style='width: 98%' type='text' name='TenpbUd' value='$pb->Tenpb'>
                        </td>
                        <td>
                            <input style='width: 98%' type='text' name='MotaUd' value='$pb->Mota'>
                        </td>
                    </tr>
                    <tr>
                        <td colspan='5' align='right'>
                            <input type='submit' name='update' value='Cập nhật'>
                        </td>
                    </tr>";
            } else {
                echo "<p>Phòng ban không tồn tại.</p>";
            }
        }
        ?>
        </table>
    
    <input style="margin-left: 95%;" type="button" value="Quay lại" onclick="window.location.href='javascript:history.back()'">
    </form>
</body>
</html>