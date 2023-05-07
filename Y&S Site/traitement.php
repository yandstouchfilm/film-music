<?php
	$host='localhost';
	$port=3306;
	$dbname='ystouch_db';
	$user='root';
	$pwd="";

	try{
		$unPDO=new PDO("mysql:host=localhost;dbname=ystouch_db","root","");
		echo "La connexion à bien été établie";
	}
	catch(PDOExecption $e){
		echo "la connexion à échoué:" . $e->getMessage(); 
	}



?>