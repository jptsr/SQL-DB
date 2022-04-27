<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="create client">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Document</title>

        <link rel="stylesheet" href="../assets/css/style.css">
    </head>

    <body>
        <h1>Create your profile</h1>

        <form action="../controllers/create_client.php" method="post">
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
                Adress (street and number) :
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

            <label for="marital_status" required>
                Marital status :
                <input type="radio" name="marital_status" value="single" required>
                <label for="single">Single</label>
                <input type="radio" name="marital_status" value="cohabitation" required>
                <label for="cohabitation">Cohabitation</label>
                <input type="radio" name="marital_status" value="divorced" required>
                <label for="divorced">Divorced</label>
                <input type="radio" name="marital_status" value="widow" required>
                <label for="widow">Widow(er)</label>
            </label>

            <label for="credit" required>
                Do you have a credit ?
                <input type="radio" name="credit" value="no" required>
                <label for="no">No</label>
                <input type="radio" name="credit" value="yes" required>
                <label for="yes">Yes</label>
            </label>

            <input type="submit" name="submit" value="Submit">
        </form>
    </body>
</html>