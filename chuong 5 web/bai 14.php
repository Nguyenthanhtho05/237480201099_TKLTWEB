<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$a = [
[1.1,2.3,3.1,4.0,5.0],
[6.2,7.7,8.8,9.5,1.2],
[4.6,1.9,3.6,8.9,1.5],
[1.6,1.7,1.8,1.9,2.0]
];

$max = $a[0][0];
$min = $a[0][0];
$sum = 0;

for($i=0;$i<count($a);$i++){
 for($j=0;$j<count($a[$i]);$j++){

  if($a[$i][$j] > $max)
   $max = $a[$i][$j];

  if($a[$i][$j] < $min)
   $min = $a[$i][$j];

  $sum = $sum + $a[$i][$j];

 }
}

echo "Số lớn nhất: ".$max."<br>";
echo "Số nhỏ nhất: ".$min."<br>";
echo "Tổng các số: ".$sum."<br><br>";

echo "<table border='1'>";

for($i=0;$i<count($a);$i++){
 echo "<tr>";

 for($j=0;$j<count($a[$i]);$j++){
  echo "<td>".$a[$i][$j]."</td>";
 }

 echo "</tr>";
}

echo "</table>";

?>
</body>
</html>