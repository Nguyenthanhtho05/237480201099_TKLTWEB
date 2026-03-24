<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Dang nhap thanh vien</h3>

<form method="post">

Email <br>
<input type="text" name="email"><br><br>

Password <br>
<input type="password" name="pass"><br><br>

Ma so <br>
<input type="text" name="code"><br><br>

<input type="submit" name="login" value="Dang nhap">
<input type="reset" value="Dang ky">

</form>

<?php

if(isset($_POST["login"])){

$email = $_POST["email"];
$pass  = $_POST["pass"];
$code  = $_POST["code"];

if($email=="admin@blu.edu.vn" && $pass=="123" && $code=="001")
{
 echo "Dang nhap thanh cong";
}
else
{
 echo "Thong tin khong dung";
}

}

?>
</body>
</html>