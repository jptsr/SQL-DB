<?php
    require_once '../models/db_connection.php';
    require '../assets/php/info_arrays.php';

    // $arr_marital_status = [
    //     1 => 'single',
    //     2 => 'cohabitation',
    //     3 => 'divorced',
    //     4 => 'widow'
    // ];

    // $arr_credit = [
    //     0 => 'no',
    //     1 => 'yes'
    // ];

    $current_year = date("Y");

    if ( isset($_POST['submit']) ) {
        // sanitazation
        if ( strlen($_POST['lastname']) <= 50 and strlen($_POST['firstname']) <= 50 and (intval(substr($_POST['birthdate'], 0, 4)) < $current_year) and mb_strlen($_POST['zipcode']) <= 5 and mb_strlen($_POST['phone_nb']) == 10) { // regex pour éviter ponctuations ou caractères indésirables
            $lastname = $_POST['lastname'];
            $firstname = $_POST['firstname'];
            $birthdate = $_POST['birthdate'];
            $adress = $_POST['adress'];
            $zipcode = $_POST['zipcode'];
            $phone_nb = $_POST['phone_nb'];
            $marital_status = $_POST['marital_status'];
            $credit = $_POST['credit'];

            foreach ($arr_marital_status as $key => $status) {
                if ($marital_status == $status) $marital_id = $key;
            }

            foreach ($arr_credit as $key => $value) {
                if ($credit == $value) $credit_id = $key;
            }

            // verify that the client do not exist
            $res = $db -> query("SELECT * FROM tp2_client WHERE name = '$lastname' AND firstname = '$firstname'");
            $data = $res -> fetch(PDO::FETCH_ASSOC);

            if ($data['name'] == null and $data['firstname'] == null) {
                // set data into db 
                $sql = "INSERT INTO tp2_client VALUES (0, '$lastname', '$firstname', '$birthdate', '$adress', '$zipcode', '$phone_nb', $marital_id, $credit_id)";
                $stmt = $db -> prepare($sql);
                $stmt -> execute();
                $stmt -> closeCursor();

                // open session
                $res1 = $db -> query("SELECT * FROM tp2_client WHERE name = '$lastname' AND firstname = '$firstname'");
                $data1 = $res1 -> fetch(PDO::FETCH_ASSOC);
                session_start();
                $_SESSION['id'] = $data1['client_id'];

                if ( $credit == "yes") {
                    header('location: ../views/create_credit_view.php');
                } else {
                    header('location: ../views/list_clients_view.php');
                }
            } else {
                echo 'Client already in db';
            }
        } else {
            echo 'The informations are not correct';
            // header('location: ../views/index_view.php');
        }
    }
?>