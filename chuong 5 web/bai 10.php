<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">

Nhập mảng (cách nhau bằng dấu cách): 
<input type="text" name="a">

<input type="submit" value="Xử lý">

</form>

<?php

if(isset($_POST['a'])){

$arr = explode(" ", $_POST['a']); 

echo "Mảng: ";
foreach($arr as $x) echo $x." ";

echo "<br>";

$dem = 0;
$tongle = 0;

foreach($arr as $x){

if($x % 2 == 0)
$dem++;

else
$tongle += $x;

}

echo "Số chẵn: ".$dem."<br>";
echo "Tổng số lẻ: ".$tongle."<br>";

echo "Max: ".max($arr)."<br>";
echo "Min: ".min($arr)."<br>";

echo "Mảng đảo: ";
$arr = array_reverse($arr);

foreach($arr as $x)
echo $x." ";

}

?>
</body>
</html>