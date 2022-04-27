<?php
    require '../assets/php/functions.php';

    session_start();

    if ( isset($_SESSION['id']) ) {
        $id = $_SESSION['id'];

        $res = $db -> query("SELECT * FROM tp1_user WHERE id = $id");
        $data = $res -> fetch(PDO::FETCH_ASSOC);

        if ($data == null) {
            $name = 'Missing information';
            $age = 'Missing information';
            $adress = 'Missing information';
            $phone_nb = 'Missing information';
            $dpmt = 'Missing information';
        } else {
            $birthdate = $data['date'];
            $dpmt_id = $data['department'];
            $current_year = date("Y");

            $name = $data['name'] . ' ' . $data['firstname'];
            $age = (intval(substr($birthdate, 0, 4)) - $current_year) . ' years old';
            $adress = $data['adress'] . ', ' . $data['zip_code'];
            $phone_nb = substr($data['phone_nber'], 0, 4) . '/' . substr($data['phone_nber'], 4, 2) . '.' . substr($data['phone_nber'], 6, 2) . '.' . substr($data['phone_nber'], 8, 2) ;

            $res_dpmt = $db -> query("SELECT * FROM tp1_department WHERE id = $dpmt_id");
            $data_dpmt = $res_dpmt -> fetch(PDO::FETCH_ASSOC);

            $dpmt = $data_dpmt['name'] . ' : ' . $data_dpmt['description'];
        }
    } else {
        echo 'Session id not found';
    }
?>