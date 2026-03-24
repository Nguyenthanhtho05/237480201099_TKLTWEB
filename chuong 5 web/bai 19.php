<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

echo "Chao ban <br>";

if(isset($_COOKIE["time"])){

echo "Lan truy cap truoc: ";
echo date("d/m/Y H:i:s",$_COOKIE["time"]);

}

setcookie("time",time(),time()+600);

?>
</body>
</html>