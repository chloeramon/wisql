<?php



$server = "localhost"; 
$user = "root";
$password = "root";

$dbname = "GameOfThrones";
$conn = new PDO("mysql:host=$server;dbname=$dbname",$user,$password);

function getMaisons () {
	global $conn;
	$res = $conn -> query("SELECT * FROM maison");
	return $res;

}

function getPersonnages () {
	global $conn;
	$res = $conn -> query("SELECT * FROM personnage");
	return $res;
/*
}

function getPersonnageByName () {
	global $conn;
	$res = $conn -> query("SELECT * FROM personnage");
	return $res;
*/

}

function getPersonnageByName () {
	global $conn;
	$q = $conn ->prepare ('SELECT * FROM personnages' WHERE personnage.nom = :nom);
	$q -> bindParam ("nom",$nom());
	$q-> execute();
	return $q;
}

/*
	$res = $conn -> query("SELECT * FROM maison");
	return $res; 
}

$q -> bindParam ("nom",$nom());
$q = $q -> expan();)

*/

?>