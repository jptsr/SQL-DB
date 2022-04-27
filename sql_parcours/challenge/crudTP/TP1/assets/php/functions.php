<?php
    function displayForm () {
        echo <<<HTML
            <label for="lastname">
                Lastname :
                <input type="text" name="lastname" maxlength="50" value="" required>
            </label>

            <label for="firstname">
                Firstname :
                <input type="text" name="firstname" maxlength="50" value="" required>
            </label>

            <label for="birthdate">
                Birthdate :
                <input type="date" name="birthdate" value="" required>
            </label>

            <label for="adres">
                Adres (street and number) :
                <input type="text" name="adress" value="" required>
            </label>

            <label for="zipcode">
                Zipcode :
                <input type="number" name="zipcode" maxlength="5" value="" required>
            </label>

            <label for="phone_nb">
                Phone number (format: 0475212545) :
                <input type="number" name="phone_nb" maxlength="10" value="" required>
            </label>

            <label for="department_id">
                Department (id) :
                <input type="number" name="department_id" maxlength="1" value="" required>
            </label>

            <input type="submit" name="submit" value="Submit">
        HTML;
    }
?>