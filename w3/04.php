<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="http://localhost/PHP/w3/04.php" method="get">
        <table>
            <tr>
                <input type="text" name="num1" placeholder="nhập số thứ 1">
            </tr>
            <tr>
                <select name="operator" id="">
               <option value="+">Cộng</option>
               <option value="-">Trừ</option>
               <option value="+"~>Nhân</option>
               <option value="/">Chia</option>
            </select>
            </tr>
            <tr>
                <input type="text" name="num2" placeholder="nhập số thứ 2">
            </tr>
            <tr>
                <input type="submit" name="submit" value="Tính">
            </tr>
            <?php
                if (isset($_GET['submit'])) {
                    $num1 = $_GET['num1'];
                    $num2 = $_GET['num2'];
                    $operator = $_GET['operator'];
                    switch ($operator) {
                        case '+':
                            $result = $num1 + $num2;
                            break;
                        case '-':
                            $result = $num1 - $num2;
                            break;
                        case '*':
                            $result = $num1 * $num2;
                            break;
                        case '/':
                            if ($num2 != 0) {
                                $result = $num1 / $num2;
                            } else {
                                $result = "Không thể chia cho 0";
                            }
                            break;
                        default:
                            $result = "Vui lòng chọn phép toán";
                            break;
                    }
                    echo "Kết quả: " . htmlspecialchars($result);
                }
            ?>
        </table>
    </form>
</body>
</html>