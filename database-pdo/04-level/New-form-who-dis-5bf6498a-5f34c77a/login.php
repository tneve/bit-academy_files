<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login_style.css">
</head>

<body>

    <?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    include_once('netland-connection.php');

    if (isset($_POST['submit'])) {
        $username = $_POST['username'] ?? "";
        $password = $_POST['password'] ?? "";

        $sql = "SELECT * FROM gebruikers WHERE username = ? AND password = ? ";
        $prepared = $pdo->prepare($sql);
        $prepared->execute([$username, $password]);
        $rowCount = $prepared->rowCount();
        while ($user_data = $prepared->fetch()) {
            $id = $user_data['id'];
        }


        if ($rowCount !== 1) {
            ?>
            <span class="login_warning">Invalide gebruikersnaam/wachtwoord combinatie</span>
        <?php } else {
            $_SESSION['loggedInUser'] = $id;
            header("Location:index.php");
    	}
    }
    ?>

    <h1>Netland Admin Panel</h1>

    <form action="login.php" method="POST">
        <label for="username">username</label>
        <input type="text" name="username" id="username">

        <label for="password">password</label>
        <input type="text" name="password" id="password">

        <input type="submit" name="submit" value="login">
    </form>
</body>

</html>
