<!DOCTYPE HTML>
<html>
    <head>
    <title>tabliczka mnożenia</title>
    <meta charset="utf-8">
    <style>
        table {
            width: 400px
        }
        table, tr, td, th {
            border: 1px solid;
            border-collapse: collapse;
            text-align: center;
        }
    </style>
    </head>
<body>
    <table>
    <tr>
    <th></th>
<?php
$wiersz = 10;
$kolumna = 10;
for ($i = 1; $i <= $kolumna; $i++){
    echo "<th>" . $i . "</th>";
}
?>
</tr>
<?php
for ($i = 1; $i <= $wiersz; $i++){
    echo "<tr>";
    echo "<th>". $i . "</th>";
    for ($j = 1; $j <= $kolumna; $j++) {
        echo "<td>";
        echo $i * $j;
        echo "</td>";
    }
    echo "</tr>";
}
?>
</table>
</body>
</html>
