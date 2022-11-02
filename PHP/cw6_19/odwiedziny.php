<?php
if (!isset($_COOKIE ['odwiedz'])) {
  $odw = 1;
} else {
  $odw = intval($_COOKIE['odwiedz']) + 1;
}
setcookie("odwiedz", $odw, time()+60*60*24*365);
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Odwiedziny</title>
<meta charset="UTF-8">
</head>
<body>
<?php
if ($odw == 1) {
  $wyraz = "raz";
} else {
  $wyraz = "razy";
}
echo "W ciągu ostatniego roku odwiedziłeś naszą stronę $odw $wyraz.<br>";
?>
</body>
</html>
