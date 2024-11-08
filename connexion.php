<?php

//Chaine de connexion mysql
function connectMySQL() {
	$sql_dns ="mysql:Server=localhost;dbname=Sitecr7";
	$sql_username ="root";
	$sql_password="";

	try{
		$cnx = new PDO($sql_dns, $sql_username, $sql_password );
	}
	catch (Exception $e){
		echo ($e->getMessage());
	}
	return $cnx;
}

?>
