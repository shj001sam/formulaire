<?php include"traitement1.php" ?>
<?php

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=formulaire;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
$reponse = $bdd->query('SELECT * FROM information where date= (select max(date) from information)' );

while ($donnees = $reponse->fetch()){
if($donnees['aller'] == 'Aller retour'){
        echo "<p>Nom: ".$donnees['nom']."</p><p>Prenom: ".$donnees['prenom']."</p><br><p>Depart: ".$donnees['depart']."</p><p>Destination: ".$donnees['destination']."</p><br>
        <p>Type de voyage:".$donnees['aller']."</p><p>Nombre de place: ".$donnees['nombre']."</p><br><p>Date de depart<p>: ".$donnees['date_depart']."</p><p>Date de retour: "
        .$donnees['date_retour']."</p><br><a href='formulaire 1.php'><button>Terminer</button></a><a href='javascript:window.print()'><button>Imprimer</button></a>";
}

if($donnees['aller'] == 'Aller simple'){
        echo "<p>Nom: ".$donnees['nom']."</p><p>Prenom: ".$donnees['prenom']."</p><br><p>Depart: ".$donnees['depart']."</p><p>Destination: ".$donnees['destination']."</p><br>
        <p>Type de voyage: ".$donnees['aller']."</p><p>Nombre de place: ".$donnees['nombre']."</p><br><p>Date de depart: ".$donnees['date_depart'].
        "</p><br><a href='formulaire 1.php'><button>Terminer</button></a><a href='javascript:window.print()'><button>Imprimer</button></a>";
}

}

$reponse->closeCursor();
?>