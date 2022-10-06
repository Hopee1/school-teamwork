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
      
      $kat = 'katcw6_14/test';
      $plk = 'katcw6_14/plik.txt'; //tak tak | nie tak | tak nie| nie nie | 

      if (is_dir("$kat") && is_dir("$plk")){
        echo "$kat,  -katalog<br/>";
        echo "$plk,  -katalog<br/>";
        break;
      }
      elseif (is_file("$kat") && is_file("$plk")){
        echo "$kat, -plik <br/>";
        echo "$plk, -plik<br/>";
        break;
      }
      elseif (is_dir("$kat") && is_file("$plk")){
        echo "$kat, -katalog<br/>";
        echo "$plk, -plik<br/>";
        break;
      }
      elseif (is_file("$kat") && is_dir("$plk")){
        echo "$kat, -plik<br/>";
        echo "$plk, -katalog<br/>";
        break;
      }
       

    
    }

  ?>



  </body>
</html>