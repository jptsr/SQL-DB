<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="create credit">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Document</title>

        <link rel="stylesheet" href="../assets/css/style.css">
    </head>

    <body>
        <h1>Add credit :</h1>

        <form action="../controllers/add_credit.php" method="post">
            <label for="organization">
                Organization :
                <input type="text" name="organization" maxlength="50" value="" required>
            </label>

            <label for="amount">
                Amount :
                <input type="number" name="amount" maxlength="10" value="" required>
            </label>

            <input type="submit" name="submit_credit" value="Add credit">
        </form>
    </body>
</html>