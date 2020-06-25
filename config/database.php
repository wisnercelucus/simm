<?php 
	try{
		
		$db = new PDO('mysql:host=localhost;dbname=simm','root', '', array(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION));
		$db->exec('SET NAMES utf8');
	}catch(Exception $e){
		die('Erreur: '. $e->getMessage());
		
	}



