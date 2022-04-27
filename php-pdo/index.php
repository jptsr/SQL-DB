<?php
    require_once 'functions.php';
    require 'db_connection.php';

    $meteo = [
        'ville' => [],
        'haut' => [],
        'bas' => []
    ];

    $ville;
    $haut;
    $bas;
    
    // lecture de la table météo + affichage sous forme de tableau
    $res = $db -> query('SELECT * FROM météo');
    while( $data = $res -> fetch(PDO::FETCH_ASSOC) ) {
        $meteo['ville'][] = $data['ville'];
        $meteo['haut'][] = $data['haut'];
        $meteo['bas'][] = $data['bas'];
    }
    $res->closeCursor();

    // envoi données formulaire vers mysql db
    if ( (isset($_POST['ville'])) and (isset($_POST['haut'])) and (isset($_POST['bas'])) ) {
        $ville = $_POST['ville'];
        $haut = $_POST['haut'];
        $bas = $_POST['bas'];
        
        $sql = "INSERT INTO météo (ville, haut, bas) VALUES ('$ville', $haut, $bas)";
        $pdo = $db -> prepare($sql);
        $pdo -> execute(array("Ville" => $ville, "Haut" => $haut, "Bas" => $bas));
        $pdo -> closeCursor();
    }

    // suppression données mysql db via checkbox
    if( (isset($_POST['check'])) ) {
        foreach ($_POST['check'] as $check) {
            $sql_delete = "DELETE FROM météo WHERE ville = '$check'";
            $stmt = $db -> prepare($sql_delete);
            $stmt -> bindParam("Check", $check);
            $stmt -> execute();
        }
        $stmt -> closeCursor();
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Manipulation de MySQL">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>PHP - MySQL</title>

        <link rel="stylesheet" href="./style.css">
    </head>

    <body>
        <h1>Formulaire</h1>

        <form action="index.php" method="POST" class="remove">
            <table>
                <tr>
                    <th></th>
                    <th>Ville</th>
                    <th>Haut</th>
                    <th>Bas</th>
                </tr>

                <?php 
                    for ($i = 0; $i < count($meteo['ville']); $i ++) {
                        displayTable($meteo['ville'][$i], $meteo['haut'][$i], $meteo['bas'][$i]);
                    }
                ?>
            </table>

            <input type="submit" value="Submit">
        </form>
        

        <form action="index.php" method="POST" class="formulaire">
            <div class="label-input">
                <label for="ville">Entrez une ville :</label>
                <input type="text" name="ville">
            </div>

            <div class="label-input">
                <label for="haut">Entrez la température maximale de celle-ci :</label>
                <input type="number" name="haut">
            </div>

            <div class="label-input">
                <label for="bas">Entrez la température minimale de celle-ci :</label>
                <input type="number" name="bas">
            </div>

            <input type="submit" name="submit" value="Submit">
        </form>
    </body>
</html>