<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $variable = 8;
    echo "value is now " . $variable;
    echo "Add 2. value is now " . $variable += 2;
    echo "Subtract 4. value is now " . $variable -= 4;
    echo "Multiphy by 5. value is now " .$variable *= 5;
    echo "divide by 3. value is now " . $variable /= 3;
    echo "Increment value by one. value is now " . $variable = ++$variable;
    echo "Decrement value by one. value is now " . $variable = --$variable;
    ?>
</body>
</html>