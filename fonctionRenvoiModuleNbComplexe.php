<?php
    function fonctionRenvoiModuleNbComplexe($a, $b){
        $moduleDeZ = sqrt(pow($a, 2) + pow($b, 2));
        
        return $moduleDeZ;
    }
    $t = fonctionRenvoiModuleNbComplexe(4,2);
    echo "le module de Z est ". $t;
?>