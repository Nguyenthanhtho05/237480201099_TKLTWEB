<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $x = 3;
    $y = 5;

    echo "x = $x <br>";
    echo "y = $y <br>";

    echo "x = $x , y = $y <br>";
    echo "cong : " . ($x + $y) . "<br>";
    echo "tru : " . ($x - $y) . "<br>";
    echo "nhan : " . ($x * $y) . "<br>";
    echo "chia : " . ($x / $y) . "<br>";
    echo "chia lay du : " . ($x % $y) . "<br>";
    ?>

    <hr>

    <h3> bai 3b </h3>
    <?php
    $x = rand (1,10);
    $y = rand (1,10);

    echo "x = $x , y = $y <br>";
    echo "cong : " . ($x + $y) . "<br>";
    echo "tru : " . ($x - $y) . "<br>";
    echo "nhan : " . ($x * $y) . "<br>";
    echo "chia : " . ($x / $y) . "<br>";
    echo "chia lay du : " . ($x % $y) . "<br>";
    ?>

    <hr>

    <h3> bai 3c </h3>
    <?php
    do {
    $x = rand (1,10);
    $y = rand (1,10);
    } while ($x <= $y);

    echo "x = $x , y = $y <br>";
    echo "cong : " . ($x + $y) . "<br>";
    echo "tru : " . ($x - $y) . "<br>";
    echo "nhan : " . ($x * $y) . "<br>";
    echo "chia : " . ($x / $y) . "<br>";
    echo "chia lay du : " . ($x % $y) . "<br>";
    ?>








</body>
</html>