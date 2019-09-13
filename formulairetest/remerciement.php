<?php include"header.php" ?>
<?php

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=formulaire;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

$reponse = $bdd->query('SELECT nom, genre FROM information where date= (select max(date) from information)' );


while ($donnees = $reponse->fetch()){
        if($donnees['genre'] == 'Homme'){
                echo "<h3><br><br><br><br><br><br><br><br> Merci Mr ".$donnees['nom']." d'avoir utiliser nos service </h3>
                <a href='imprimer.php'>Imprimer votre billet</a>"; 
        }
        elseif($donnees['genre'] == 'Femme'){
                echo "<h3><br><br><br><br><br><br><br><br> Merci Mme ".$donnees['nom']." d'avoir utiliser nos service </h3>
                <a href='imprimer.php'>Imprimer votre billet</a>";
        }
}


$reponse->closeCursor();

?>
    