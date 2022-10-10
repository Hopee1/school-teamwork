<?php
$fileList = glob('6.14/*');
$fileList2 = glob('6.14/folder1/*')
echo 'pliki<br>';
foreach($fileList as $filename){

    if(is_file($filename)){

        echo $filename, '<br>'; 

    }   

}
echo 'katalogi<br>';
foreach($fileList as $filename){

   if(is_dir($filename)){

       echo $filename, '<br>'; 

   }   

}
foreach($fileList2)
?>