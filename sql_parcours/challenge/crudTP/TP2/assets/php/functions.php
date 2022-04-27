<?php
    function displayListClients ($id, $lastname, $firstname) {
        echo <<<HTML
            <tr>
                <td><a href="../views/client_details_view.php?id=$id">$id</a></td>
                <td>$lastname</td>
                <td>$firstname</td>
            </tr>
        HTML;
    }

    function displayClientsDetails ($id, $lastname, $firstname, $date, $adress, $zipcode, $phone, $marital_status, $credit, $ref_arr, $organization, $amount) {
        // data settings
        $age = ( date("Y") - ( intval(substr( $date, 0, 4 ) ) ) ) . ' years old';
        $complete_adress = $adress . ', ' . $zipcode;
        $phone_number = substr($phone, 0, 4) . '/' . substr($phone, 4, 2) . '.' . substr($phone, 6, 2) . '.' . substr($phone, 8, 2);
        $marital_status;
        foreach ($ref_arr as $key => $status) {
            if ( $marital_status == $key ) $marital_status = $status;
        }
        $credit = ($credit == 0) ? 'No' : 'Yes';
        $credit .= ($credit == 'Yes') ? ' (' . $organization . '-' . $amount . '€)' : "";

        echo <<<HTML
            <tr>
                <td>$id</td>
                <td>$lastname</td>
                <td>$firstname</td>
                <td>$age</td>
                <td>$complete_adress</td>
                <td>$phone_number</td>
                <td>$marital_status</td>
                <td>$credit</td>
            </tr>
        HTML;
    }
?>