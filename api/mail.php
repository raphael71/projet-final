<?php


header('Access-Control-Allow-Origin: *');
// header('Content-Type: application/json');



// Ceci est vrai, alors le texte est affiché

if(isset($_POST['dataMail']) && !empty($_POST['dataMail'])){


	$nom=$_POST['dataMail']['nom'];
	$email=$_POST['dataMail']['email'];
	$message=$_POST['dataMail']['message'];
	$sujet=$_POST['dataMail']['sujet'];


			$header="MIME-Version: 1.0\r\n";
            $header.='From:'.$email."\n";
            $header.='Content-Type:text/html; charset="utf-8"'."\n";
            $header.='Content-Transfer-Encoding: 8bit'; 


	mail('raphael.s@codeur.online', $sujet, $message ,$header );
}   

	

?>