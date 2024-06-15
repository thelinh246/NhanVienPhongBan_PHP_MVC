<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách phòng ban</title>
</head>
<body>
    <h2>Danh sách phòng ban:</h2>
        <?php
            echo '<table border="1" width="100%">';
            echo '<caption>Du lieu truy xuat tu bang phong ban</caption>';
            echo '<tr><th>IDPB</th><th>Ten phong ban</th><th>Mo ta</th><th>Nhan vien PB</th></tr>';
            foreach ($PBList as $phongban) {
                if (isset($phongban) && is_object($phongban)) {
                    echo "
                        <tr>
                            <td>
                                $phongban->IDPB
                            </td>
                            <td>
                                $phongban->Tenpb
                            </td>
                            <td>
                                $phongban->Mota
                            </td>
                            <td>
                                <a href='../Controllers/C_NV.php?mod0=1&id=$phongban->IDPB'>Xem</a>
                            </td>
                        </tr>";
                } else {
                    echo "<p>Phòng ban không tồn tại.</p>";
                }
            }
            echo '</table>';
        ?>
        <input style="margin-left: 95%;" type="button" name="b2" value="Quay lại" onclick="window.location.href='../index.php'">
</body>
</html>