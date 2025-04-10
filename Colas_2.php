<?php

$ListaEspera = array();

array_push($ListaEspera, "Naranja");
array_push($ListaEspera, "Fresa");
array_push($ListaEspera, "Pera");
array_push($ListaEspera, "Sandía");
array_push($ListaEspera, "Durazno");
array_push($ListaEspera, "Cereza");
array_push($ListaEspera, "Kiwi");

$FrutaSeleccionada = array_shift($ListaEspera);

echo "La fruta que toca comer hoy es: " . $FrutaSeleccionada;

?>