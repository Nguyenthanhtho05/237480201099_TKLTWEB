<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
<tr>
<th>Số n</th>
<th>n²</th>
</tr>

<?php
for($i=0;$i<=50;$i++){
echo "<tr>";
echo "<td>$i</td>";
echo "<td>".($i*$i)."</td>";
echo "</tr>";
}
?>

</table>
</body>
</html>