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

<input type="submit" value="Tach tu">
</form>

<?php

if(isset($_POST["s"])){

$s = $_POST["s"];

$a = explode(" ",$s);

for($i=0;$i<count($a);$i++){
 echo "a[".($i+1)."] = ".$a[$i]."<br>";
}

}

?>
</body>
</html>