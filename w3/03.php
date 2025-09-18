<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="http://localhost/PHP/w3/03.php" method="post">
        <table>
            <tr>
                Tên
                <input type="text" name="name" placeholder="Nhập họ tên">
            </tr>
            <tr>
                Năm sinh
                <input type="text" name="year" placeholder="Nhập năm sinh">
            </tr>
            <tr>
                <input type="submit" name="submit" value="Gửi">
            </tr>
        </table>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = $_POST["name"];
                $age = $_POST["year"];
                $age = 2025 - $age;
                echo "Chào mừng bạn " . htmlspecialchars($name) . "!" ."<br>";
                echo "Bạn có tuổi là " . htmlspecialchars($age) . "<br>";
            }
        ?>
    </form>

</body>
</html>