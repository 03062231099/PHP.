<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php 
  $arr = array("Tokyo", "Mexico City", "New York City", "Mumbai", "Seoul", "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London") ;
for ($i = 0; $i < count($arr) ; $i ++){
    echo"".$arr[$i]."" . ",";
}
sort ($arr);
foreach ($arr as $k => $val) {
    echo "".$val."" ."\n";
}
$arr[]=("Los Angeles");
$arr[]=("Calcutta");
$arr[]=("Osaka");
$arr[]=("Beijing");
sort( $arr);  
foreach ($arr as $k => $val) {
    echo "".$val."". "/n";
}
  ?>
</body>
</html>