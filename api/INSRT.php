<!DOCTYPE html>
<html>
<head>
	<title>INSERTION PROJET</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

<h1>INSERTION PROJET</h1>

<form  method= "post" action="">
  NOM DU PROJET:<br>
  <input type="text" name="NOM" value=""><br><br>
  DESCRIPTION:<br>
  <textarea type="text" name="DESCRIPTION" value=""></textarea><br><br>
   LIEN:<br>
  <input type="text" name="LIEN" value=""><br><br>
   IMAGE:<br>
  <input type="file" name="IMAGE" value=""><br><br>
  <br>
  <br>
  <input type="hidden" name="MAX_FILE_SIZE" value="12345" />
  <br>
  <br>
  <input type="submit" value="INSERER">
</form>
</body>

<?php

error_reporting(-1);
ini_set("display_errors", -1);

// $_FILES['IMAGE']['name']     //Le nom original du fichier, comme sur le disque du visiteur (exemple : mon_icone.png).

// $_FILES['IMAGE']['jpg''png''jpeg']     //Le type du fichier. Par exemple, cela peut être « image/png ».

// $_FILES['IMAGE']['1024']     //La taille du fichier en octets.

// $_FILES['IMAGE']['tmp_name'] //L'adresse vers le fichier uploadé dans le répertoire temporaire.

// $_FILES['IMAGE']['error'] 

 try
 {

 $bdd = new pdo('mysql:host=localhost;dbname=seguin;charset=utf8','seguin','8Av834cyDVKXG66l');
 $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}

catch(Exception $e)

{

        die('Erreur : '.$e->getMessage());

}



$nom =$_POST['NOM'];
$description=$_POST['DESCRIPTION'];
$lien=$_POST['LIEN'];
$image=$_POST['IMAGE'];

$req = $bdd->prepare('INSERT  INTO projet (id,nom, description, image, lien)
            VALUES ( "",:nom, :description, :image, :lien) ') ;



$req->execute( array(


				'nom' =>$nom,
				'description'=>$description,
				'lien'=>$lien,
				'image'=>$image,
			));

echo 'le transfert a bien été ajouté !';
  
?>

<style >
  
.bobdy{

  background-color: #4B0082;

}

</style>


</html>