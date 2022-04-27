<?php
    require_once '../models/db_connection.php';

    session_start();
    $id = $_SESSION['id'];

    if ( isset($_POST['organization'], $_POST['amount']) ) {
        if ( mb_strlen($_POST['organization']) <= 50 and is_numeric($_POST['amount']) ) {
            $organization = $_POST['organization'];
            $amount = $_POST['amount'];

            $stmt = $db -> prepare("INSERT INTO tp2_credit VALUES ($id, '$organization', $amount)");
            $stmt -> execute();
            $stmt -> closeCursor();

            header('location: ../views/list_clients_view.php');
        } else {
            echo 'Invalid data';
        }
    } else {
        echo 'Form is incomplete';
    }
?>