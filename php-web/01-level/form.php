<!DOCTYPE html>
<html>

<head>
    <title>Formulier maken</title>
</head>

<body>

    <h1>Bit-Academy</h1>

    <p>Meld je aan voor de nieuwsbrief.<br>
        Vul je e-mailadres in.</p>
    <form action='form.php' method="post">
        <label for="email">e-mail: </label>
        <input type="text" id="email" name="email">
        <input type="submit" value="Verzenden">
    </form>

    <?php
    if (empty($_POST) == true) {
        exit;
    } else {
        $email = $_POST["email"];

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            header('Location:success.php');
        } else {
            echo ("E-mailadres is ongeldig");
        }
    }
    ?>
</body>

</html>