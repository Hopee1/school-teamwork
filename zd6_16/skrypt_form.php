<?php
$z = isset( $_POST['nazw'], $_POST['im'], $_POST['zaw'], $_POST['adr'], $_POST['pl'], $_POST['mt'], $_POST['jo'] );
    if($z==FALSE){
        echo "nie wszystko zostało wypełnione";
    }
    else{
        echo "Odpowiedź z PHP: <br>".$_POST['nazw'];
        echo $_POST['im']."<br>";
        echo $_POST['zaw']."<br>";
        echo $_POST['adr']."<br>";
        echo $_POST['pl']."<br>";
        echo $_POST['mt']."<br>";
        echo $_POST['jo']."<br>";
    }
?>