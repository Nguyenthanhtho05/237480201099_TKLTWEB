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

<input type="submit" value="Dao chuoi">
</form>

<?php

if(isset($_POST["s"])){

$s = $_POST["s"];
$dao = strrev($s);

echo "Chuoi dao: ".$dao;

}

?>
</body>
</html>