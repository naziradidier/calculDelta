<?php
     function convertirEuroEnAriary($euro){
         $ariary = $euro * 4545.45;
         return $ariary;
     }
     $k = convertirEuroEnAriary(2);
     echo $k. " " . "Ariary";
?>