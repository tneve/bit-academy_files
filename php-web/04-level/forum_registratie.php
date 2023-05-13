<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>

<body>
    <h1>Forum Registratie</h1>

    <div>
        <form name="register" action="registratie_handler.php" method="POST">
            <div>
                <input type="text" name="username" id="username">
                <label for="username">Username</label>
            </div>
            <div>
                <input type="email" name="email" id="e-mail">
                <label for="email">Email</label>
            </div>
            <div>

                <input type="text" name="age" id="age">
                <label for="age">Age</label>
            </div>
            <div>

                <input type="submit" value="submit">
            </div>
        </form>
    </div>
    <?php
    if ((isset($_POST['username'])) && (isset($_POST['email'])) && (isset($_POST['age']))) {
        header('Location:registratie_handler.php');
    } else {
        exit("Vul de gegevens correct in!");
    }
    ?>

</body>

</html>