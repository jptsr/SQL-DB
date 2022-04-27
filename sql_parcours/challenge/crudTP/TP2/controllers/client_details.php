<?php
    require '../assets/php/info_arrays.php';
    require '../assets/php/functions.php';
    require '../models/data.php';

    for ($i = 0; $i < count($arr_client['name']); $i ++) {
        if ( $arr_client['id'][$i] == $_GET['id']) {
            if ($arr_client['credit'][$i] == 0) {
                displayClientsDetails($arr_client['id'][$i], $arr_client['name'][$i], $arr_client['firstname'][$i], $arr_client['date'][$i], $arr_client['adress'][$i], $arr_client['zipcode'][$i], $arr_client['phone_nb'][$i], $arr_client['marital_status'][$i], $arr_client['credit'][$i], $arr_marital_status, null, null);
            } else {
                for ($j = 0; $j < count($arr_credit['amount']); $j ++) {
                    if ($arr_credit['client_id'][$j] == $_GET['id']) {
                        displayClientsDetails($arr_client['id'][$i], $arr_client['name'][$i], $arr_client['firstname'][$i], $arr_client['date'][$i], $arr_client['adress'][$i], $arr_client['zipcode'][$i], $arr_client['phone_nb'][$i], $arr_client['marital_status'][$i], $arr_client['credit'][$i], $arr_marital_status, $arr_credit['organization'][$j], $arr_credit['amount'][$j]);
                    }
                }
            }
        }
    }
?>