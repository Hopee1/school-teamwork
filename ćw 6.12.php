<?php
$str="hello hello world";
   $tablica=explode(" ", $str);
$zlicz=0;
for ($i=0; $i<count($tablica); $i++)
{
  if($tablica[$i]=="hello") $zlicz++;
}
echo  'poszukiwanych wyrazów '. $zlicz;
?>