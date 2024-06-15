<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: greenyellow; width: 300px; margin-left: auto; margin-right: auto;">
        <form name="f1" method="POST" action="../Controllers/C_AD.php">
            <table>
                <tr>
                    <td colspan="2" style="text-align: center;">Login</td>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username" value=""></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" value=""></td>
                </tr>
                <tr>
                    <td colspan="2" style="padding-left: 35%;">
                        <input type="submit" name="login" value="Login">
                        <input type="button" name="b3" value="Quay lại" onclick="window.location.href='../index.php'">
                    </td>
                </tr>
            </table>
        
        </form>
</body>
</html>