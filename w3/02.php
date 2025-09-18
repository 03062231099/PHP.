<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Nhập thông tin sinh viên</h1>
    <form action="http://localhost/PHP/w3/02.php" method="post">
        <table>
            <tr>
                <td>Mã sinh viên:</td>
                <td><input type="text" name="mssv"></td>
            </tr>
            <tr>
                <td>Họ tên:</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Giới tính:</td>
                <td>
                    <input type="radio" name="sex" value="Nam">Nam
                    <input type="radio" name="sex" value="Nữ">Nữ
                </td>
            </tr>
            <tr>
                <td>Ngôn ngữ lập trình:</td>
                <td>
                    <input type="checkbox" name ="lang" value="C++">C++
                    <input type="checkbox" name="lang" value="PHP">PHP
                </td>
            </tr>
            <tr>
                <td>Thành Phố</td>
                <td>
                    <select name="city">
                        <option value="Hà Nội">Hà Nội</option>
                        <option value="Hồ Chí Minh">Hồ Chí Minh</option>
                        <option value="Đà Nẵng">Đà Nẵng</option>
                    </select>
            </tr>
            <tr>
                <td>Tin nhắn</td>
                <td><textarea name="msg" cols="30" rows="5"></textarea></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit" value="Gửi">
                </td>
            </tr>
        </table>
         <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
        $mssv = $_POST["mssv"];
        $hoten = $_POST["name"];
        $gioitinh = $_POST["sex"];
        $ngonngu = $_POST["lang"];
        $thanhpho = $_POST["city"];

        echo "<h2>Thông tin đã nhận được</h2>";
        echo "MSSV: " . htmlspecialchars($mssv) . "<br>";
        echo "Họ tên: " . htmlspecialchars($hoten) . "<br>";
        echo "Giới tính: " . htmlspecialchars($gioitinh) . "<br>";
        echo "Ngôn ngữ lập trình: " . htmlspecialchars($ngonngu) . "<br>";
        echo "Thành phố: " . htmlspecialchars($thanhpho) . "<br>";
        echo "Tin nhắn: " . htmlspecialchars($_POST["msg"]) . "<br>";
        }
    ?>


</body>
</html>
