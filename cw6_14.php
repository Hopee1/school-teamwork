<!DOCTYPE html>
<html lang="pl">

  <head>

    
     <script ></script>

  </head>
  <body>

  <?php

    mkdir("katcw6_14/test");
    touch("katcw6_14/plik.txt");

    $katalog = "./katcw6_14";
    $tablica = scandir($katalog);
    foreach($tablica as $plik){
        echo "$plik<br/>";

        is_dir("test");
        is_file("plik.txt");
    
    }
//dokończyć
  ?>



  </body>
</html>