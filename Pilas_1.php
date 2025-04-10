<?php

$Pila = array();

array_push($Pila, "Elemento 0");
array_push($Pila, "Elemento 1");
array_push($Pila, "Elemento 2");
array_push($Pila, "Elemento 3");
array_push($Pila, "Elemento 4");
array_push($Pila, "Elemento 5");
array_push($Pila, "Elemento 6");
array_push($Pila, "Elemento 7");
array_push($Pila, "Elemento 8");
array_push($Pila, "Elemento 9");

$Elemento = array_pop ($Pila);

echo "El ultimo elemento agregado a la pila es el: ".$Elemento;

?>