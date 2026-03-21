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

<input type="submit" name="cong" value="Cộng">
<input type="submit" name="tru" value="Trừ">
<input type="submit" name="nhan" value="Nhân">
<input type="submit" name="chia" value="Chia">
<input type="submit" name="mod" value="Mod">

</form>

<?php

if(isset($_POST['a'])){
$a=$_POST['a'];
$b=$_POST['b'];

if(isset($_POST['cong'])) echo "Kết quả: ".($a+$b);

if(isset($_POST['tru'])) echo "Kết quả: ".($a-$b);

if(isset($_POST['nhan'])) echo "Kết quả: ".($a*$b);

if(isset($_POST['chia'])) echo "Kết quả: ".($a/$b);

if(isset($_POST['mod'])) echo "Kết quả: ".($a%$b);
}

?>
</body>
</html>