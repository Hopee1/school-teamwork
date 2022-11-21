<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'sakila';

    $connect = mysqli_connect($host, $user, $pass, $db);
    $result = mysqli_query($connect, "SELECT * FROM actor limit 5;");

        while ($ar = mysqli_fetch_array($result))
        echo $ar[0]."".$ar[1]."".$ar[2].'<br/>';
        mysqli_close($connect);
    
    
    ?>
</body>
</html>