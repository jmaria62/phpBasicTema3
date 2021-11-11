<?php

$x = 7;
$y = 5;
$n = 77.7;
$m = 55.05;


function escribeOperacion($s1,$s2,$operacion){
    switch ($operacion){
        case "sumar":
            $r = $s1 + $s2;
            break;
        case "restar":
            $r = $s1 - $s2;
            break;
        case "multiplicar":
           $r = $s1 * $s2;
            break;
         case "modulo":
            $r = $s1 / $s2;
            break;
        }
        echo $s1." ".$operacion." ".$s2." = ".$r."\n";
}

function escribeDoble($s1){
    $r = 2*$s1;
    echo "Doble de ".$s1." = ".$r."\n";
}

function escribeSuma($s1,$s2,$s3=0,$s4=0){
    $r = $s1+$s2+$s3+$s4;
    echo $s1." + ".$s2." + ".$s3." + ".$s4." = ".$r."\n";
}
function escribeProducto($s1,$s2,$s3=1,$s4=1
){
    $r = $s1*$s2*$s3*$s4;
    echo $s1." * ".$s2." * ".$s3." * ".$s4." = ".$r."\n";
}
escribeOperacion($x,$y,"sumar");

escribeOperacion($n,$m,"sumar");

escribeOperacion($x,$y,"restar");

escribeOperacion($n,$m,"restar");

escribeOperacion($x,$y,"multiplicar");

escribeOperacion($n,$m,"multiplicar");

escribeOperacion($x,$y,"modulo");

escribeOperacion($n,$m,"modulo");

escribeDoble($x);
escribeDoble($y);
escribeDoble($n);
escribeDoble($m);

escribeSuma($x,$y,$n,$m);
escribeProducto($x,$y,$n,$m);

// escribeSuma(2,3);
// escribeProducto(4,5);



?>



