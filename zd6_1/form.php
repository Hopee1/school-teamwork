<?php
if (isset($_POST['komentarz'])) { //sprawdzanie za pomocą metody POST przesłanie formularza z parametrem $komentarz
  $tekst = substr($_POST['komentarz'], 0, 255); //skraca długość opinii do 255 znaków
  $tekst = strip_tags($tekst) . "\n"; //usuwa znaczniki PHP i HTML
  
  if (!$op = fopen('opinie.txt', 'a')) { //dołącza wartość zmiennej $tekst do pliu opinie.txt
    echo "Błąd!. Nie można otworzyć pliku opinie.txt"; 
  } else {
    if (fwrite($op, $tekst) === false) {
        echo "Dodanie komentarza nie powiodło się";
      }
    }
  }

  ?>

  <html>  <!-- formularz start -->

  <head>
  <title>Opinie użytkowników na temat micry</title>
  <meta charset="UTF-8">
  </head>

  <body>
  <div>
  <form action="form.php" method="post">
  <p><b>Co myślisz o micrze</b><br>
  (Maksymalnie 255 znaków)</p>
  <textarea name="komentarz" rows="6" cols="50" 
  wrap="virtual"></textarea><br>
  <input type="submit" value="Wyślij">

  </div>
  </form>
  <form action="clear.php" method="POST">

  <div>
  <input type="submit" value="usun komentarze" >
  
  </div>
  </form>

  <b>Dodane opinie:</b>
  <div> <!-- formularz koniec -->
  <?php //odczytywanie opinii umieszczonych w pliku opinie.txt i wyświetlanie ich na stronie
  $opinie = '';
  if (file_exists('./opinie.txt')) { //sprawdza czy plik istnieje
    $opinie = file_get_contents('./opinie.txt'); //jeśli tak to odczytania treść jest zapisywana w zmiennej $opinie
    $opinie = nl2br($opinie); //ta funkcja zastępuje znaki końca linii na znacznik <br>
  }
  if ($opinie != '') {// jeśli w pliku opinie.txt nie ma nic to wypisze "brak opini"
    echo $opinie;
  } else {
    echo "Brak opinii o micrze";
  }
  ?>
  </div>

  </body>
  </html>