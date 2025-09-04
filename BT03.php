<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table width = "300px" cellspacing = "0px" cellpadding =  "0px"  border = "1px">
        <?php 
        for ($i = 0; $i < 8; $i++) {
            echo "<tr>";
                for ($j = 1; $j < 8 ; $j++) {
                    $s = $i+$j;
                    if ($s % 2== 0) {
                        echo "<td heigh = 30px width = 30px color = #FFFFFF>";
                    }
                    else{
                        echo "<td heigh = 30px width = 30px color = #000000>";
                    }
                }

            echo"</tr>";
        }
        ?>
    </table>
</body>
</html>