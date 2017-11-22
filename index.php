<?php
class oefening{
    public function getLust($min,$max) {
        
        for($min; $min<=$max; $min++){
            print $min."<br>";
        }
        
    }
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1> 
            <?php
          $min=20;
          $max=50;
          while ($min<=$max){
              print $min."<br>";
              $min=$min+2;
          }
            ?>
        </h1>
        <h2>
            <?php
            for ($var=20; $var<=50; $var=$var+1){
                print $var."<br>";
            }
            ?>
        </h2>
        <h6>
            <?php
            $oef = new oefening();
            print ($oef->getLust(20, 50));
            ?>
        </h6>
    </body>
</html>
