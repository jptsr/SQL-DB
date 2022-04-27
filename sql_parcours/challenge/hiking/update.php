<?php
    require_once 'connection_db.php';

    $name;
    $difficulty;
    $dist;
    $duration;
    $height_diff;
    $available;
    $reason;

    $levels = ["très facile", "facile", "moyen", "difficile", "très difficile"];
    
    if ( isset($_GET['id']) ) {
        $id = $_GET['id'];

        $res = $db -> query("SELECT * FROM hiking WHERE id = $id");
        $data = $res -> fetch(PDO::FETCH_ASSOC);

        $name = $data['name'];
        $difficulty = $data['difficulty'];
        $dist = $data['distance'];
        $duration = $data['duration'];
        $height_diff = $data['height_difference'];
        $available = $data['available'];
        $reason = ( $data['reason'] == ''  ) ? "" : $data['reason'];
    }

    if ( isset($_POST['name']) and isset($_POST['difficulty']) and isset($_POST['distance']) and isset($_POST['duration']) and isset($_POST['height_difference']) and isset($_POST['available']) ) {
        $id = $_GET['id'];
        $name = $_POST['name'];
        $level = $_POST['difficulty'];
        $dist = $_POST['distance'];
        $duration = $_POST['duration'];
        $height_diff = $_POST['height_difference'];

        $available = $_POST['available'];
        $reason = ( $_POST['reason'] == '' ) ? NULL : $_POST['reason'];

        if (is_numeric($dist) and is_numeric($height_diff) ) {
            $sql = "UPDATE hiking SET name = '$name', difficulty = '$level', distance = $dist, duration = '$duration', height_difference = '$height_diff', available = '$available', reason = '$reason' WHERE id = $id";
            $stmt = $db -> prepare($sql);
            $stmt -> execute();
            $stmt -> closeCursor();
            echo 'La randonnée a été modifiée avec succès.';
            header("./create.php");
        } else {
            echo "La distance et/ou le dénivelé ne sont pas des chiffres/nombres.";
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
        <a href="http://localhost/variable/sql_parcours/challenge/hiking/read.php">Liste des données</a>
        <h1>Ajouter</h1>
        <form action="" method="post">
            <div>
                <label for="name">Name</label>
                <input type="text" name="name" value="<?= $name ?>">
            </div>

            <div>
                <label for="difficulty">Difficulté</label>
                <select name="difficulty">
                    <?php
                        foreach ($levels as $level) {
                            if ($level == $difficulty) {
                                echo <<<HTML
                                    <option value="$level" selected>$level</option>
                                HTML;
                            }else {
                                echo <<<HTML
                                    <option value="$level">$level</option>
                                HTML;
                            }
                        }
                    ?>
                </select>
            </div>
            
            <div>
                <label for="distance">Distance</label>
                <input type="number" name="distance" value="<?= $dist ?>">
            </div>
            <div>
                <label for="duration">Durée</label>
                <input type="duration" name="duration" value="<?= $duration ?>">
            </div>
            <div>
                <label for="height_difference">Dénivelé</label>
                <input type="number" name="height_difference" value="<?= $height_diff ?>">
            </div>
            <div>
                <label for="height_difference">Pratiquable</label>

                <?php
                    if ($available == 'yes') {
                        echo <<<HTML
                            <input type="radio" name="available" value="yes" checked>
                            <label for="available">Yes</label>
                            <input type="radio" name="available" value="no">
                            <label for="available">No</label>
                        HTML;
                    } else {
                        echo <<<HTML
                            <input type="radio" name="available" value="yes">
                            <label for="available">Yes</label>
                            <input type="radio" name="available" value="no" checked>
                            <label for="available">No</label>
                        HTML;
                    }
                ?>

                <label for="reason">Raison</label>
                <input type="text" name="reason" value="<?= $reason ?>">
            </div>
            <button type="submit" name="button">Envoyer</button>
        </form>

        <form action="logout.php">
            <input type="submit" name="submit" value="Logout">
        </form>
    </body>
</html>