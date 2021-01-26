<?php
    function creerTableau(): array{
        $empty = [];
        for($i=0 ; $i <= 10; $i++){
               $empty[] = $i;
            }
        for ($j=$empty[0]; $j< count($empty); $j++){
                echo $j;
            }
        return $empty;
    }
    $k = creerTableau();
?>