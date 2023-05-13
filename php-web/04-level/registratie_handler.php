<!DOCTYPE html>
<html>

<head>
    <title>Registratie Handler</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>

<body>
    <h1>Forum Registratie</h1>
    <div>
        <?php
        echo ('Jouw username is ' . $_POST["username"] . PHP_EOL);
        ?>
    </div>
    <div>
        <?php
        echo ('Jouw email is ' . $_POST["email"] . PHP_EOL);
        ?>
    </div>
    <div>
        <?php
        echo ('Jouw age is ' . $_POST["age"] . PHP_EOL);
        ?>
    </div>



    </div>

</body>

</html>