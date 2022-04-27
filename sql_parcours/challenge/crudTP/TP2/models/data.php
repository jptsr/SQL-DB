<?php
    require_once 'db_connection.php';

    $arr_client = [
        'id' => [],
        'name' => [],
        'firstname' => [],
        'date' => [],
        'adress' => [],
        'zipcode' => [],
        'phone_nb' => [],
        'marital_status' => [],
        'credit' => []
    ];

    $arr_credit = [
        'client_id' => [],
        'organization' => [],
        'amount' => []
    ];

    $res = $db -> query("SELECT * FROM tp2_client");
    while ($data = $res -> fetch(PDO::FETCH_ASSOC)) {
        $arr_client['id'][] = $data['client_id'];
        $arr_client['name'][] = $data['name'];
        $arr_client['firstname'][] = $data['firstname'];
        $arr_client['date'][] = $data['date'];
        $arr_client['adress'][] = $data['adress'];
        $arr_client['zipcode'][] = $data['zip_code'];
        $arr_client['phone_nb'][] = $data['phone_nber'];
        $arr_client['marital_status'][] = $data['marital_id'];
        $arr_client['credit'][] = $data['credit'];
    }

    $res1 = $db -> query("SELECT * FROM tp2_credit");
    while ($data1 = $res1 -> fetch(PDO::FETCH_ASSOC)) {
        $arr_credit['client_id'][] = $data1['client_id'];
        $arr_credit['organization'][] = $data1['organization'];
        $arr_credit['amount'][] = $data1['amount'];
    }
?>