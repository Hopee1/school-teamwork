<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // login.php
    echo "test1";
    $db_hostname = 'localhost';
    $db_database = 'sakila';
    $db_username = 'root';
    $db_password = '';
    $db_server = mysql_connect($db_hostname, $db_username, $db_password);
    if (!$db_server) die("Unable to connect to MySQL: " . mysql_error());

    $query = mysqli_query("$host","$user","$pass","$db");
    $numrows = mysqli_num_rows($query);
    echo "amount of tables:".$numrows."and their names </br>";
    ?> 
</body>
</html>