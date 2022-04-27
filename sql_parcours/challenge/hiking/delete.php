<?php
    require_once 'connection_db.php';

    session_start ();

    $res = $db -> query('SELECT * FROM hiking');

    if ( isset($_POST['check']) ) {
        while($data = $res -> fetch(PDO::FETCH_ASSOC)) {
            if ($_POST['check'] == $data['id']) {
                $id = $_POST['check'];
                $stmt = $db -> prepare("DELETE FROM hiking WHERE id = $id");
                $stmt -> bindParam("Check", $id);
                $stmt -> execute();
                $stmt -> closeCursor();
                echo 'La randonnée est bien supprimée';
            }
        }
    }
?>