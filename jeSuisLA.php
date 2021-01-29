<?php
    // une function qui affiche une phrase avec echo sans retourne;
    /*function afficheJeSuisLa() : void{
        echo("Je suis là");
    }
    afficheJeSuisLa();*/
    // ***********************************************************
    // une function qui affiche une phrase avec return et echo;
    /*function afficheJeSuisLa() : string{
        echo 'je suis là ';
        return 'Je suis là';
    }
    $k = afficheJeSuisLa();
    echo $k;*/
    // *************************************************************
    /*function creerTableau() : void{
        $chiffre = array(4,2,2,3,4,5,6,7,8,9,10);
        for($i= 0; $i<count($chiffre); $i++){
            echo $chiffre[$i];
        }
    }
     creerTableau();*/
    // *************************************************************
    //ajouter un element dans un tableau;
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
    // ***********************************************************
    // une fonction qui utilise un booléen
    
    function useBooleen(){
        $b = 2;
        $a = 3 ;
        if($a == $b){
            echo 'vrai';
        }
        else{
            echo 'faux';
        }
    }
    useBooleen();
    

?>