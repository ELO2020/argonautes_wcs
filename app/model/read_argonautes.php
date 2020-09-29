<?php 
function read_argonautes(){
	global $pdo;

	try {
		$query= "SELECT * FROM membres";
		//die ($query);

		$req= $pdo->prepare($query);
		$req->execute();
		$req->setFetchMode(PDO::FETCH_ASSOC);

		$argos = $req->fetchAll(); 
		//var_dump($argos); exit;
		$req->closeCursor();

		return $argos;
		
	} catch (Exception $e){
		return false;
	}
}