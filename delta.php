<?php
    function calculDelta($a, $b, $c){
        $delta = pow(2, $b) - 4*$a*$c;

        return $delta;
    }
    
    // echo $t;

    function resoudreDelta($a, $b, $c){
        $t = calculDelta($a, $b, $c);
        if($t > 0){
            $x1 = (-$b - sqrt($t))/(2*$a);
            $x2 = (-$b + sqrt($t))/(2*$a);
            echo $x1 . " ". $x2;
         }
        // elseif($t < 0){
            
        //     echo "pas de solution";
        // }
        // else {
        //     $x= -$b/2*$a;
        //     echo $x;
        // }
        return $t;
    }
    
    $l = resoudreDelta(2, 1, 1);
    echo $l;
     


?>