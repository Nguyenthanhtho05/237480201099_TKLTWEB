<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
Nhap chuoi s: <br>
<input type="text" name="s"><br><br>

Nhap ky tu ch: <br>
<input type="text" name="ch"><br><br>

<input type="submit" value="Dem">
</form>

<?php

if(isset($_POST["s"])){

$s = $_POST["s"];
$ch = $_POST["ch"];
$dem = 0;

for($i=0;$i<strlen($s);$i++){
 if($s[$i] == $ch){
  $dem++;
 }
}

echo "So lan xuat hien: ".$dem;

}

?>
</body>
</html>