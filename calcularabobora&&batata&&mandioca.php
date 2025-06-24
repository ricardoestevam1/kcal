<?php 

$Kcalbatata = ($_POST['Kcalbatata']);

echo "Calorias da Batata =   " . $Kcalbatata * 1;

$Kcalbatatatotal = $Kcalbatata * 1;

$Kcalabobora = ($_POST['Kcalabobora']);

echo "Calorias da Abóbora =   " . $Kcalabobora * 2;

$Kcalaboboratotal = $Kcalabobora * 2;

$Kcalmandioca = ($_POST['Kcalmandioca']);

$Kcalmandiocatotal = $Kcalmandioca * 3;

echo "Calorias da Mandioca =   " . $Kcalmandioca * 3;


$Kcaltotal = $Kcalbatatatotal + $Kcalaboboratotal + $Kcalmandiocatotal;

echo "Total de Kcalorias =     " . $Kcaltotal;

?>