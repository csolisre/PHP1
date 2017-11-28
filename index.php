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
        <style>
            h5 {
                color: red;
            }
        </style>
    </head>
    <body>
        <h1> 
            <?php
            $start=0;
            $som=1;
            print $start;
            while($start <20 ){
               print $som. " ";
               $anterior=$start;
               $start=$som;
               $som=$anterior+$som;
                
            }
            
            ?>
          
        </h1>
        <h2>
            <?php
print("Goeiemorgen, ");
 print($_GET["naam"]);
 print(".");
?>

           
        </h2>
        <h6>
            
        </h6>
        <h5>
      
        </h5>
    </body>
</html>
