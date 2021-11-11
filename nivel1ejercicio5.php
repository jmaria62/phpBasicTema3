<?php

$matriz1 = array(1,2,3,4,5);
$matriz2 = array(6,7,8);
$matriz2[] = 9;
$matriz3 = array_merge($matriz1,$matriz2);
echo "Tamaño= ".sizeof($matriz3)."\n";
print_r($matriz3);
var_dump ($matriz3);

?>