<?php
class Getal {
    public function getSom($getal1, $getal2) {
        $som= $getal1+$getal2;
        return $som;
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
        <style>
            h5 {
                color: red;
            }
        </style>
    </head>
    <body>
        <h1> 
           
          
        </h1>
        <h2>

           <?php
          $suma= new Getal();
          print ($suma->getSom($_GET["getal1"], $_GET["getal2"]));
           ?>
           

            </h2>
            <h6>
            
        </h6>
        <h5>
      
        </h5>
    </body>
</html>
