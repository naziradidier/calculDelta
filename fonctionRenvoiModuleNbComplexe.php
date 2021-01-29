<?php
    function fonctionRenvoiModuleNbComplexe($a, $b){
        $y=$a . " " . "i" .$b;
        return $y;
    }
    $t = fonctionRenvoiModuleNbComplexe(2,2);
    echo $t;
?>