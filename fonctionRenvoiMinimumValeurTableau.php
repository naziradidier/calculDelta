<?php

    $table = array(2,3,4,8,5,1,6,9,7,10);
//    **************************************************************************
// limiter tableau ; create a table empty firstly
    function    limiterTableau($arr){
        $m=0;
        $empty =[];
        for($f=0 ; $f < $arr[$m]; $f++){
           $empty[] = $arr[$f];
        }
        return $empty;
    }
    
    // limiterTableau($table);
    // ********************************************************************
    function    affichierTableau($arr){
        for($p=0 ; $p < count($arr); $p++){
            echo $arr[$p];
        }
    }

    // ************************************************************************
    function tableauTrier($tableau){
        if(!is_array($tableau))
        return;
        for($i = 0; $i<count($tableau); $i++){
            for($j = $i+1; $j < count($tableau); $j++){
                if($tableau[$j]< $tableau[$i]){
                    $tmp = $tableau[$i];
                    $tableau[$i]= $tableau[$j];
                    $tableau[$j]=$tmp;
                }
            }
        }
        return $tableau;
    }
    echo 'le tableau';
    echo '</br>';
    affichierTableau($table);
    echo '</br>';
    echo 'la valeur minimum du tableau est: ';
    echo '</br>';
    $trier = tableauTrier($table);
    limiterTableau($trier);
    $j = limiterTableau($trier);
    affichierTableau($j);
?>