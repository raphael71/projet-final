<!DOCTYPE>
<html>
<head>
	<title>suppression</title>
	<link rel="stylesheet" type="text/css" href="styles1.css">
</head>
<body>

<h1>suppression</h1>

<p>
	<strong>liste de projets</strong> :


<?php

error_reporting(-1);
ini_set("display_errors", -1);

	 try


 {

 $bdd = new pdo('mysql:host=localhost;dbname=seguin;charset=utf8','seguin','8Av834cyDVKXG66l');
 $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}

catch(Exception $e)

{

        die('Erreur : '.$e->getMessage());
}        

        $reponse = $bdd->query('SELECT* FROM projet ');

        while ($donnees = $reponse->fetch()){





?>

	

	<?php echo $donnees['id']; ?>

	<?php echo $donnees['nom']; ?>

	<?php echo $donnees['description']; ?>


<form action="" method="post">

<input type="hidden" name="sup" value="<?php echo $donnees['id']; ?>">
<input type="submit" value="cliquez ici pour supprimer un projet"  >



</form>

	<br>
		<br>
			<br>


	

	<?php

											}

	$reponse->closeCursor();


	

	?>

	<br>
	<br>





<?php

	

	if (isset($_POST['sup']) ){

		$id=$_POST['sup'];
		

	

	$bdd1 = new PDO('mysql:host=localhost;dbname=seguin;charset=utf8','seguin','8Av834cyDVKXG66l');

	$req1 = $bdd1->query('DELETE  FROM projet WHERE id='.$id.'');




		echo "la suppression du projet a bien fonctionner";

	
						}
?> 



</body>
</html>