<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="c.css">
    </head>

    <body>
    
       

     

        
    
    <div class="header">

        <div class="art"><?php 
            $plik = file('artykul.txt');
            $i = 0;
            foreach($plik as $line){
            $i++;
       echo $i.'. '.$line.'<br />';
    }

        ?></div>

        <div class="side-nav">
            <a href="#" class="logo" >
                <img src="logo.png" class="logo" >
            </a>
            <ul class>
                <li><a href="martykul.php"><p>Moje artykuły</p></a></li>
            </ul>
        </div>
    </div>
    
        <?php 
        //https://www.youtube.com/watch?v=Fx_NpAPM-iU

        ?>
    </body>
</html>

