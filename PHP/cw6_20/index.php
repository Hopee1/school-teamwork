<!DOCTYPE html>
<html>
<head>
    <title>Strona</title>
    <meta charset="utf-8">
</head>
<body>

<form action="zadane1.php" method="get">
    <p>Wpisz date urodzin (MM-DD-RRRR)</p>
    <input type="text" name="data">
    <input type="submit" value="wyĹ›lij" name="submit">
</form>
<?php

    if( isset($_GET['submit']) ){
        $str = $_GET['data'];

        if (($t = strtotime($str)) === false) {
            echo "Problem z datÄ…";
        } else {
            setcookie('data',$t,time()+3600);
            $_COOKIE['data'] = $t;
        }
    }

    if( isset($_COOKIE['data'])){
        $d = $_COOKIE['data'];
        $r = $d - time();
        $d = floor($r / 86400);
        echo 'Za ' . $d . ' dni masz urodziny';
    }
?>
</body>
</html>