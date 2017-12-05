<?php
class Getarray {
    public function fill() {
        $tab = array();
        $oud = 0;
        $nieuw = 1;
        $tab[0]=$oud;
        
        for ($i=1; $i<=30; $i++) {
            $tab[$i]=$nieuw;
            $vorigOud = $oud;
            $oud = $nieuw;
            $nieuw = $vorigOud + $oud;
        }
        
        return $tab;
    }
}
?>
<!DOCTYPE html>
<!--
xanthate
xanthate
xanthate
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
$res= new Getarray();
print_r($res->fill());
?>


        </h1>
        <h2>


        </h2>
        <h6>

        </h6>
        <h5>


            
        </h5>
    </body>
</html>
