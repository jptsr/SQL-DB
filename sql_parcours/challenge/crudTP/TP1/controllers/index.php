<?php
    require_once '../models/db_connection.php';

    session_start();

    if ( isset($_SESSION['id']) ) {
        $id = $_SESSION['id'];
    } else {
        echo 'Session id not found';
        header('location: ../controllers/logout.php');
    }

    if ( isset($_POST['submit']) ) {
        // sanitazation
        if ( strlen($_POST['lastname']) <= 50 and strlen($_POST['firstname']) <= 50 and mb_strlen($_POST['zipcode']) <= 5 and mb_strlen($_POST['phone_nb']) == 10 and mb_strlen($_POST['department_id']) == 1) { // regex pour éviter ponctuations ou caractères indésirables
            $lastname = $_POST['lastname'];
            $firstname = $_POST['firstname'];
            $birthdate = $_POST['birthdate'];
            $adress = $_POST['adress'];
            $zipcode = $_POST['zipcode'];
            $phone_nb = $_POST['phone_nb'];
            $dpmt_id = $_POST['department_id'];

            // echo $id . " & " . $lastname . " & " . $firstname . " & " . $birthdate . " & " . $adres . " & " . $zipcode . " & " . $phone_nb . " & " . $dpmt_id;

            $sql = "INSERT INTO tp1_user VALUES ($id, '$lastname', '$firstname', '$birthdate', '$adress', '$zipcode', '$phone_nb', $dpmt_id)";
            $stmt = $db -> prepare($sql);
            $stmt -> execute();
            $stmt -> closeCursor();

            header('location: ../views/index_view.php');
        } else {
            echo 'The informations are not correct';
            header('location: ../views/index_view.php');
        }
    }
?>