<?php
// valeur a,b,c;
    $a= 2;
    $b = 2; 
    $c= 1;
// x1
     $x1 = (-$b - sqrt(4))/(2*$a);
// x1
     $x2 = (-$b + sqrt(4))/(2*$a);
     echo $x1 . " </br>". $x2;
    function calculDelta($a, $b, $c){
        $delta = pow($b, 2) - 4*$a*$c;

        return $delta;
    }

    function resoudreDelta($a, $b, $c){
        $t = calculDelta($a, $b, $c);
        echo $t;
        echo ("</br>");
        if($t > 0){
            $x1 = (-$b - sqrt($t))/(2*$a);
            $x2 = (-$b + sqrt($t))/(2*$a);
            echo($x1);
            echo ("</br>");
            echo($x2);
            return [$x1,$x2];
        }
        elseif($t ==  0){
            $x = -$b/2*$a;
            echo " la reponse est: ";
            echo($x);
            return $x;
        }
        else {
            echo " pas de solution";
        }
    }
    
    $l = resoudreDelta(1, 2, 1);
?>
