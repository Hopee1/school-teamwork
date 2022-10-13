<!doctype html>

<?php
            if (isset($_POST['komentarz'])) { //sprawdzanie za pomocą metody POST przesłanie formulaża z parametrem $komentarz
                $tekst = substr($_POST['komentarz'], 0, 255); //skraca długość opinii do 255 znaków
                $tekst = strip_tags($tekst) . "\n"; //usuwa znaczniki PHP i HTML
  
                if (!$op = fopen('Nowe_teksty.txt', 'a',)) { //dołącza wartość zmiennej $tekst do pliu opinie.txt
                    echo "Błąd!. Nie można otworzyć pliku Nowe_teksty.txt"; 
                } 
                else {
                    if (fwrite($op, $tekst) === false) {
                    echo "Dodanie komentarza nie powiodło się";
                    }
                }
            }
?>

<html>
    <head>
        <link rel="stylesheet" href="c.css">
    </head>

    <body>
    
       

     

        
    
    <div class="header">

        <div class="art"><?php 
            $dane = fread(fopen("artykul.txt", "r"), filesize("artykul.txt"));
            
            $z = iconv_strlen($dane);
            $t = ($z / 30)+5;
            $fp = fopen("artykul.txt", "r");
            for($i = 1; $i<$t; $i++){
            
            $tekst = fread($fp, 30);
            echo "$tekst<br/>";
            }

       
    

        ?>
        

  
    
        </div>

        <div class="forma">
        <form action="martykul.php" method="post">
            <p><b>Sekcja Komentarzy</b><br>
            (Maksymalnie 255 znaków)</p>
            <textarea name="komentarz" rows="6" cols="50" 
            wrap="virtual"></textarea><br>
            <input type="submit" value="Wyślij">

        </div>
        </form>

        <b>Komentarze</b>

        <div class="forma"> <!-- formulaż koniec -->
            <?php //odczytywanie opinii umieszczonych w pliku opinie.txt i wyświetlanie ich na stronie
                $opinie = '';
                if (file_exists('./Nowe_teksty.txt')) { //sprawdza czy plik istnieje
                    $opinie = file_get_contents('./Nowe_teksty.txt'); //jeśli tak to odczytania treść jest zapisywana w zmiennej $opinie
                    $opinie = nl2br($opinie); //ta funkcja zastępuje znaki końca linii na znacznik <br>
                }
                if ($opinie != '') {// jeśli w pliku opinie.txt nie ma nic to pypisze "brak opini"
                    echo $opinie;
                } 
                else {
                    echo "Brak Komentarzy";
                }
            ?>
        </div>


        <div class="header">
        <div class="side-nav">
            <a href="#" class="logo" >
                <img src="logo.png" class="logo" >
            </a>
            <ul class="nav-links">
                <li><a href="martykul.php"><p>Moje artykuły</p></a></li>
                <li><a href="index.php"><p>Strona główna</p></a></li>
            </ul>
        </div>
        </div>
    </div>
        <?php 
        //https://www.youtube.com/watch?v=Fx_NpAPM-iU

        ?>
    </body>
</html>

