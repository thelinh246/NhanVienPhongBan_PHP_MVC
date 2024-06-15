<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="C_PB.php" method="POST">
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
                        <input type='checkbox' id='checkbox' name='check[]' value=$phongban->IDPB>
                    </td>
                </tr>";
            } else {
                echo "<p>Phòng ban không tồn tại.</p>";
            }
        }
        ?>
        <tr>
            <td colspan='5' align='right'>
                <input type='button' name='back' value='Quay lai' id='back' onclick="window.location.href='javascript:history.back()'">
                <input type='submit' name='delete' value='Xóa' id='xoa'>
            </td>
        </tr>
        
    </table>
    </form>
</body>
</html>