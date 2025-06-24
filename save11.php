<!DOCTYPE html>
<html>

<head>
	

	<meta charset="utf-8">
</head>

<?php
// Start the session
session_start();
?>

<h2>Composição do almoço:</h2>
</br>
</br></br></br>
<?php

$legumes = null;

if(isset($_POST['cklegumes']))

$legumes = $_POST['cklegumes'];

if($legumes !== null){

	for($i=0; $i < count($legumes); $i++){
	

  include 'batata.php';

//your code
include 'abobora.php';

//your code
include 'mandioca.php';


//your code


 if (($legumes[$i] === "Batata" && "Abobora" && "Mandioca")){


       include 'abobora&batata&mandiocaform.php';
        // Processa os dados do formulário aqui
}

//your code

session_unset();

// destroy the session


}}



?>

