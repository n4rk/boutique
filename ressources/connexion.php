<?php
    session_start();
	include "cnx.inc.php";
	
	try {
		$cnx = new PDO(DSN,USER,PWD);
	} catch (PDOException $e) {
		echo 'Connexion échouée : ' . $e->getMessage();
	}
?>