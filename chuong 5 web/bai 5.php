<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">

Số thứ 1: <input type="text" name="a"><br><br>
Số thứ 2: <input type="text" name="b"><br><br>

<input type="submit" name="uscln" value="USCLN">
<input type="submit" name="bscnn" value="BSCNN">

</form>

<?php

if(isset($_POST['a'])){
$a=$_POST['a'];
$b=$_POST['b'];

$x=$a;
$y=$b;

while($y!=0){
$r=$x%$y;
$x=$y;
$y=$r;
}

$uscln=$x;

if(isset($_POST['uscln']))
echo "USCLN = ".$uscln;

if(isset($_POST['bscnn']))
echo "BSCNN = ".($a*$b)/$uscln;

}

?>
</body>
</html>