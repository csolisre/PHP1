<?php
class Getal{
    public function getRandom() {
      $r = array();
      for ($i = 0; $i<= 100; $i++){
          $ran= rand(-50, 50);
          $r[$i]= $ran;
      }
      return $r;
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
          $x=new Getal();
          print_r($x->getRandom())
?>

           

            </h2>
            <h6>
            
        </h6>
        <h5>
      
        </h5>
    </body>
</html>
