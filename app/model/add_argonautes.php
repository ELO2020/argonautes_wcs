<?php
function add_argonautes($form){
	global $pdo;

	try {
	
	$query= "INSERT INTO Membres (name) VALUES(:name)";

	$req= $pdo->prepare($query);

	$req->bindParam(":name", $form["name"], PDO::PARAM_STR);
	$req->execute();

	return true;
	}

	catch(Exception $e) {
		die ("SQL Erreur : " . utf8_encode($e->getMessage()));
	}

}