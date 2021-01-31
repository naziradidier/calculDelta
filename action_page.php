<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  function calculDelta($a, $b, $c){
    $a = $_POST['fname'];
    $b = $_POST['sname'];
    $c = $_POST['lname'];
    $delta = pow($b, 2) - 4*$a*$c;

    return $delta;
}

function resoudreDelta($a, $b, $c){
    $a = $_POST['fname'];
    $b = $_POST['sname'];
    $c = $_POST['lname'];
    $t = calculDelta($a, $b, $c);
    echo " delta est égale à " . $t. " " . "donc";
    echo ("</br>");
    if($t > 0){
        $x1 = (-$b - sqrt($t))/(2*$a);
        $x2 = (-$b + sqrt($t))/(2*$a);
        echo " x1 est égale : ";
        echo($x1);
        echo ("</br>");
        echo " x2 est égale : ";
        echo($x2);
        return [$x1,$x2];
    }
    elseif($t ==  0){
        $x = -$b/2*$a;
        echo " x est égale : ";
        echo($x);
        return $x;
    }
    else {
        echo " pas de solution";
    }
}

$l = resoudreDelta(1, 2, 1);



  // ***************************************************
  //  function creerTableau(): array{
  //   $name = $_POST['fname'];
  //       $empty = [];
  //       for($i=0 ; $i <= $name; $i++){
  //              $empty[] = $i;
  //           }
  //       for ($j=$empty[0]; $j< count($empty); $j++){
  //               echo $j . '</br>';
  //           }
  //       return $empty;
  //   }
  //   $k = creerTableau();
    // ***************************************************
  // if (empty($name)) {
  //   echo "Name is empty";
  // } else {
  //   echo "Bonjour" ." " .$name;
  // }
}
?>