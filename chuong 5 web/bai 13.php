<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body><form method="post">
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

echo "Max: ".max($arr)."<br>";
echo "Min: ".min($arr)."<br>";

echo "Số chính phương: ";
foreach($arr as $x){
if(sqrt($x)==intval(sqrt($x)))
echo $x." ";
}
echo "<br>";

echo "Số chẵn: ";
foreach($arr as $x){
if($x%2==0) echo $x." ";
}
echo "<br>";

echo "Số lẻ: ";
foreach($arr as $x){
if($x%2!=0) echo $x." ";
}
echo "<br>";

sort($arr);

echo "Tăng dần: ";
foreach($arr as $x) echo $x." ";

}

?>
</html>