<?php
//https://www.youtube.com/watch?v=4q0gYjAVonI
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $mailfrom = $_POST['mail'];
        $address = $_POST['address'];
        $subject = "formtest";
        $postcode = $_POST['postcode'];
        $math = $_POST['math'];
        $pol = $_POST['pol'];
        $jo = $_POST['jo'];

        $mailto = "hubertserce100@gmail.com";
        $headers = "form: ".$mailfrom;
        $txt = "You have redeived an e-mail from ".$name.".\n\n".$address.".\n\n". $postcode.".\n\n".$math.".\n\n".$pol.".\n\n".$jo;
    
        mail($mailto, $subject, $txt, $headers);
        header("Location: index.php?mailsends");
    }
?>