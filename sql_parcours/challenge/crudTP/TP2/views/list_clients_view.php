<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="list clients">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Document</title>

        <link rel="stylesheet" href="../assets/css/style.css">
    </head>

    <body>
        <table>
            <tr>
                <th>ID</th>
                <th>LASTNAME</th>
                <th>FIRSTNAME</th>
            </tr>

            <?php
                require '../controllers/list_clients.php';
            ?>
        </table>

        <form action="../controllers/logout.php">
            <input type="submit" name="submit" value="Logout">
        </form>
    </body>
</html>