<?php
    require_once 'connection_db.php';
    // require_once 'login.php';

    session_start ();

    echo $_SESSION['login'] . " & " . $_SESSION['pwd'];

    if ( isset($_POST['name']) and isset($_POST['difficulty']) and isset($_POST['distance']) and isset($_POST['duration']) and isset($_POST['height_difference']) and isset($_POST['available']) ) {
        $name = $_POST['name'];
        $level = $_POST['difficulty'];
        $dist = $_POST['distance'];
        $duration = $_POST['duration'];
        $height_diff = $_POST['height_difference'];

        $available = $_POST['available'];
        $reason = ( $_POST['reason'] == '' ) ? NULL : $_POST['reason'];

        if (is_int($dist) == true and is_int($height_diff) == true ) {
            $sql = "INSERT INTO hiking VALUES (0, '$name', '$level', $dist, '$duration', $height_diff, '$available', '$reason')";
            $stmt = $db -> prepare($sql);
            $stmt -> execute();
            $stmt -> closeCursor();
            echo 'La randonnée a été ajoutée avec succès.';
            header('location: create.php');
        } else {
            echo "La distance ou le dénivelé ne sont pas des chiffres/nombres.";
        }
    } else {
        echo 'ERREUR';
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Ajouter une randonnée</title>
        <link rel="stylesheet" href="./assets/styles/basics.css" media="screen" title="no title" charset="utf-8">
    </head>

    <body>
        <a href="./read.php">Liste des données</a>
        <h1>Ajouter</h1>
        <form action="" method="post">
            <div>
                <label for="name">Name</label>
                <input type="text" name="name" value="">
            </div>

            <div>
                <label for="difficulty">Difficulté</label>
                <select name="difficulty">
                    <option value="très facile">Très facile</option>
                    <option value="facile">Facile</option>
                    <option value="moyen">Moyen</option>
                    <option value="difficile">Difficile</option>
                    <option value="très difficile">Très difficile</option>
                </select>
            </div>

            <div>
                <label for="distance">Distance</label>
                <input type="text" name="distance" value="">
            </div>
            <div>
                <label for="duration">Durée</label>
                <input type="time" name="duration" value="">
            </div>
            <div>
                <label for="height_difference">Dénivelé</label>
                <input type="text" name="height_difference" value="">
            </div>
            <div>
                <label for="height_difference">Pratiquable</label>
                <input type="radio" name="available" value="yes">
                <label for="available">Yes</label>
                <input type="radio" name="available" value="no">
                <label for="available">No</label>

                <label for="reason">Raison</label>
                <input type="text" name="reason" value="">
            </div>
            <button type="submit" name="button">Envoyer</button>
        </form>

        <form action="logout.php">
            <input type="submit" name="submit" value="Logout">
        </form>

        <script src="./assets/js/main.js"></script>
    </body>
</html>