<?php

 // $methode = $_SERVER['REQUEST_METHOD'];
 // $request = explode('/', trim($_SERVER['PATH_INFO'],'/'));
 // $input = json_decode(file_get_contents('php://input'),true);

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

//conexion a la table 
 try
 {

 $bdd = new pdo('mysql:host=localhost;dbname=seguin;charset=utf8','seguin','8Av834cyDVKXG66l');

}

catch (exception $e)
{

	die('erreur : ' . $e->getmessage());

}

//récupérer les projet

 $reponse = $bdd->query('SELECT * FROM projet');

 $donnees = $reponse->fetchAll();

  echo json_encode($donnees);


 ?>











