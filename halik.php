<!doctype html>
<html>
    <head>
    </head>
    
    <body>
        
        
         <?php
    //cw6.1
       /* $x=15;
        $y=17.34;
        $z="asudyg22";
        echo "$x<br> $y<br> $z<br>"*/
            
    //cw6.2
      /*  $apostrof='apostrof';
        $cudzyslow="cyslow";
        $herodoc=<<<C
            Herodoc
        C;
        $c="nowdoc";
        $nc=<<<'T'
          $c
        T;
        echo "$apostrof <br> $cudzyslow <br> $herodoc <br> $nc";*/
 
    // ćw6.3
       /* for ($i =150; $i>=100; $i--){
            if (($i % 5) !=0 ) continue;
            echo "$i;";
        }*/
    //ćw 6.4
        /*$oceny = array(
        "J. polski" => "2",
        "Matematyka" => "4",
        "Geografia" => "3",
        "Historia" => "5",
        "J. angielski" => "5"
        );
        foreach ($oceny as $kl => $x) {
        echo "$kl = $x <br>";
        };*/
            
    ?> 
     
    <!--cw6.5-->
      <!--  <style> 
            table {width: 200px}
            table, tr, td{
                border: 1px solid;
                border-collapse: collapse;
            }
        </style>
            <table>
        <?php
      //cw 6.6
           /* $oceny = array(
                "Przedmiot" => "Ocena",
                "J.P." => "7",
                "Matma" => "5",
                
            );
            foreach ($oceny as $k => $x){
                echo '<tr><td>' . $k . '</td><td>' . $x . '</td></tr>';
            } */

        ?>

        </table> -->
        <?php
        //cw 6.10
        /*$tyg = mktime( 0, 0, 0, 0, 1);
        echo "dzisiaj jest ", date("l", $tyg);*/

        //cw 6.11
        /*if(date('L')) {$dni='366';} else{$dni='365';}
        $dzienroku = date('z');
        $pozostalo = $dni-$dzienroku;
        echo 'do końca roku pozostało '.$pozostalo.' dni.','<br>';
        $x = ($dzienroku - $dni) * (-1);
        $uplynelo = $dni - $x;
        echo 'od początku roku mineło '.$uplynelo.' dni.';*/

        //cw 6.7
        /*$tab = array(0,1,2,3,4,5,6,7,8,9,10);
        echo "liczby parzyste: ";
        foreach($tab as $i){
            if($i%2==0)
                echo "$i";
        }*/
        //cw 6.8
        /*$atab = array(
                'l1' => 2,
            'l2' => 232,
            'l3' => 123,
            'l4' => 56,
            'l5' => 27,
            'l6' => 985,
            'l7' => 1543,
            'l8' => 7495,
            'l9' => 5,
            'l10' => 96,
            'l11' => 44,
            'l12' => 843,
            'l13' => 12,
            'l14' => 93,
            'l15' => 45
        );
        foreach ($atab as $x => $w){
            if($w % 3 == 0 && $w % 4 == 0 ){
            echo "klucz= " .$x. " , Wzartość = ".$w;}
            echo '<br>';
        }*/

        //cw 6.12
/*$str="jakis  jakis jakis   ciag znakow";
   $tablica=explode(" ", $str);
$zlicz=0;
for ($i=0; $i<count($tablica); $i++)
{
  if($tablica[$i]=="jakis") $zlicz++;
}
echo  'poszukiwanych wyrazów '. $zlicz;
*/


//cw 6.13
/*$tekst = "Ala ma kota";

$tablica = array();
$tablica['Ala'] = "Ola";
$tablica['kota'] = "psa";

echo "Tekst zrodlowy przed zamiana: <b>".$tekst.'</b><br>';

foreach($tablica AS $nr => $wyraz)
   $tekst = str_replace($nr,$wyraz,$tekst);
echo "Tekst zrodlowy po zamianie: <b>".$tekst.'</b><br>';
  */      ?>
        

    </body>
</html>