<?php
$fechaE = $_POST["fechaEnt"];
$fechaS = $_POST["fechaSal"];

// $dateDifference = abs(strtotime($fechaS) - strtotime($fechaE));

// $years  = floor($dateDifference / (365 * 60 * 60 * 24));
// $months = floor(($dateDifference - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
// $days   = floor(($dateDifference - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 *24) / (60 * 60 * 24));

// echo $years." year,  ".$months." months and ".$days." days";
// echo "Dias trabajados "." ";

$fechainicial = new DateTime($fechaE);
$fechafin = new DateTime($fechaS);

$diferencia_dias = $fechainicial -> diff($fechafin);
echo "fecha de entrada: $fechaE <br> fecha de salida: $fechaS <br>";
echo $diferencia_dias->y." anios, ".$diferencia_dias->m." meses, ".$diferencia_dias->d. " dias <br>";
echo "Tiempo total en dias ".$diferencia_dias ->days."<br>";
echo "Dias trabajados el ultimo anio: ".$diferencia_dias = $diferencia_dias ->days - ($diferencia_dias->y*365);

?>