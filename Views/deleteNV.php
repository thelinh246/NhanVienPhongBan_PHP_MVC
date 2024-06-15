<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="C_NV.php" method="POST">
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
                        <input type='checkbox' id='checkbox' name='check[]' value=$nhanvien->IDnv>
                    </td>
                    </tr>";
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
        </br>
    </form>
</body>
</html>