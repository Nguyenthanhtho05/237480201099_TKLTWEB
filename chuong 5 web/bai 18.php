<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
Nhap chuoi: <br>
<input type="text" name="s"><br><br>

<input type="submit" value="Tim tu dai nhat">
</form>

<?php

if(isset($_POST["s"])){

$s = $_POST["s"];

$a = explode(" ",$s);

$max = $a[0];

for($i=1;$i<count($a);$i++){

 if(strlen($a[$i]) > strlen($max)){
  $max = $a[$i];
 }

}

echo "Tu dai nhat: ".$max;

}

?>
</body>
</html>