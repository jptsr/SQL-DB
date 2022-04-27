<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="client details">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Document</title>

        <link rel="stylesheet" href="../assets/css/style.css">
    </head>

    <body>
        <h1>Client details :</h1>

        <table>
            <tr>
                <th>ID</th>
                <th>LASTNAME</th>
                <th>FIRSTNAME</th>
                <th>AGE</th>
                <th>ADRESS</th>
                <th>PHONE NUMBER</th>
                <th>MARITAL STATUS</th>
                <th>CREDIT</th>
            </tr>
            
            <?php require '../controllers/client_details.php' ?>
        </table>

        <form action="../controllers/logout.php">
            <input type="submit" name="logout" value="Logout">
        </form>
    </body>
</html>