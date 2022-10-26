Opracuj formularz przeznaczony do rejestrowania uczniów zapisujących się do szkoły. 
Określ informacje, które powinny znaleźć się w formularzu, oraz sposób ich wprowa-
dzania. Utwórz skrypt przetwarzający dane przesłane z formularza. W skrypcie powinno 
być sprawdzane wypełnienie wszystkich pól.

<!DOCTYPE HTML>

<?php 











?>




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
        <form class="apply-form" action="skrypt_form.php" method="post">
            <p>Formularz Przyjęcia do szkoły:</p>
            <input type="text" name="name" placeholder="Full name">
            <input type="text" name="mail" placeholder="Your e-mail">
            <input type="text" name="address" placeholder="Your addres">
            <input type="text" name="postcode" placeholder="Post code">
            <p>Wyniki egzaminu ósmoklasisty</p>
            <input type="text" name="math" placeholder="Math">
            <input type="text" name="pol" placeholder="Pol">
            <input type="text" name="jo" placeholder="JO">
            <button type="submit" name="submit">SEND</button>
        </form>
    </body>
</html>
