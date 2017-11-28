<?php
class Getal {
public function getValidate($getal1, $getal2) {
    if($getal1 == $getal2){
        $val = TRUE;
    }else{
        $val = FALSE;
    }
    return $val;
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
          $r= rand(0, 10); 
           $x= new Getal();
           $valid= $x->getValidate($r, $_GET["getal"]);
           if($valid === TRUE){
           print "Same nummer " . $r ;
           } else {
           print "Keep trying ";
           print "Yours ". $_GET["getal"];
           print "Computer" . $r;
           }
           print "<br>";
           var_dump($valid);
           ?>
           

            </h2>
            <h6>
            
        </h6>
        <h5>
      
        </h5>
    </body>
</html>
