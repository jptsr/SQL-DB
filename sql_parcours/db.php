<?php
try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=becode;charset=utf8', 'root', '');
    // $bdd1 = new PDO('mysql:host=localhost;dbname=lol;charset=utf8', 'root', ''); // when create table

    // $db1 = "CREATE DATABASE lol";
    // $db1 = "CREATE TABLE ah (
    //     email VARCHAR(255),
    //     mdp VARCHAR(15),
    //     age INT 
    // )";
    // $bdd1 -> exec($db1);

    echo 'Base de données créée !';

    $resultat = $bdd->query('SELECT * FROM météo');

    $donnees = $resultat->fetch(PDO::FETCH_ASSOC);

    var_dump($donnees);

    while ($donnees = $resultat->fetch()){
        echo $donnees['ville'];
    }

    $resultat->closeCursor();
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

?>