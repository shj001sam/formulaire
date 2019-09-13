<?php include"header.php" ?>
<?php
session_start();
require('connexion.php');


$nom =$_POST["nom"];
$prenom =$_POST["prenom"];
$genre ="";
if (isset($_POST['genre'])){
    	$genre = implode(",", $_POST['genre']);
        
}
else {
        echo 'Non';
} 
$email =$_POST["email"];
$telephone =$_POST["telephone"];
$depart =$_POST["depart"];
$destination =$_POST["destination"];
$aller ="";
if (isset($_POST['aller'])){
    	$aller = implode(",", $_POST['aller']);
        
}
else {
        echo 'Non';
} 
$date_depart =$_POST["date_depart"];
$date_retour =$_POST["date_retour"];
$nombre =$_POST["nombre"];

echo "<h2><br><br><br><br><br><br><br><br> !!! Une erreur c'est produite lors de la validation du formulaire<br> Veuillez verifié les informations</h2>";

if($aller=="Aller simple"){
	$insert=$db->prepare("INSERT INTO information(nom, prenom, genre, email, telephone, depart, destination, aller, date_depart, nombre) VALUES(?,?,?,?,?,?,?,?,?,?)");
$insert->execute(array($nom,$prenom,$genre,$email,$telephone,$depart,$destination,$aller,$date_depart,$nombre));

}elseif($aller=="Aller retour"){

	$insert=$db->prepare("INSERT INTO information(nom, prenom, genre, email , telephone, depart, destination, aller, date_depart, date_retour, nombre) VALUES(?,?,?,?,?,?,?,?,?,?,?)");
$insert->execute(array($nom,$prenom,$genre,$email,$telephone,$depart,$destination,$aller,$date_depart,$date_retour,$nombre));

}


header('location:remerciement.php');



?>
