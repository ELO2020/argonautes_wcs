<?php

	try {
		$dns = "mysql:host=" . DB_HOST. ";dbname=" . DB_NAME;


		$options = array(
					PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES " . DB_CHARSET,
					PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
		);

		$pdo = new PDO ($dns, DB_USER, DB_PASSWORD, $options);
		//lancement du mécanisme PDO qui est stocké ds variable globale
		
	}

	catch (Exception $e) {
		die ("connexion à mySQL impossible : " . utf8_encode($e->getMessage()));
		//si qqchose ne se passe pas correctement le try et catch redirige sur ce qui n'a pas marché
	}
