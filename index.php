
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
        $z= array();
        $i=0;        
        $oud = 0;
        $nieuw = 1;
        print($oud . " ");
        
        while ($nieuw < 30) {
            
            $z[$i]=$nieuw;
            print $z[$i];
            $vorigOud = $oud;
            $oud = $nieuw;
            $nieuw = $vorigOud + $oud;
            $i=$i++;
           
        }
        
        ?>

           

            </h2>
            <h6>
            
        </h6>
        <h5>
      
        </h5>
    </body>
</html>
