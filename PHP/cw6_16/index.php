Opracuj formularz przeznaczony do rejestrowania uczniów zapisujących się do szkoły. 
Określ informacje, które powinny znaleźć się w formularzu, oraz sposób ich wprowa-
dzania. Utwórz skrypt przetwarzający dane przesłane z formularza. W skrypcie powinno 
być sprawdzane wypełnienie wszystkich pól.

<!DOCTYPE HTML>
<html>
    <head>
        <title>Formularz rejestracyjny</title>
        <meta charset="UTF-8">
        <style>
            p {
                font-weight: bold;
                font-size: 14pt;
            }
            #wyk {
                font-weight: bold;
                font-size: 11pt;
            }
        </style>
    </head>

    <body>
        <form action="skrypt_form.php" method="post">
            <p>Formularz Przyjęcia do szkoły:</p>
            Nazwisko:<br>
            <input type="text" name="nazw" value=" " size="30"><br>
            Imię<br>
            <input type="text" name="im" value=" " size="30"><br>
            telefon:<br>
            <input type="text" name="zaw" value=" " size="30"><br>
            Adres e-mail:<br>
            <input type="text" name="adr" value=" " size="30">
            <p id="wyk">Wyniki egzaminu ósmoklasisty</p>
            <p id="wyk">Podaj w procentach</p>
            Polski:<br>
            <input type="text" name="pl" value=" " size="30"><br>
            Matematyka:<br>
            <input type="text" name="mt" value=" " size="30"><br>
            Język opcy:<br>
            <input type="text" name="jo" value=" " size="30"><br>
            
            <input type="checkbox" name="opcje" maxlength="1">
            Zgadzam się na przetwarzanie moich danych osobowych<br><br>
            <input type="submit" value="Wyślij" name="wyslij">&nbsp; &nbsp; 
            <input type="reset" value="Wyczyść" name="zeruj">
        </form>
    </body>
</html>
