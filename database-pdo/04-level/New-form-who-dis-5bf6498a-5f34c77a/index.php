<!DOCTYPE html>
<html>

<head>
    <title>Netland</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    include_once('netland-connection.php');

    $media = $pdo->query("SELECT * FROM media")->fetchAll();

    if (isset($_GET['title'])) {
        if ($_GET['title'] == 'AZ') {
            $media = $pdo->query('SELECT * FROM media ORDER BY title ASC');
        }
        if ($_GET['title'] == 'ZA') {
            $media = $pdo->query('SELECT * FROM media ORDER BY title DESC');
        }
    }

    if (isset($_GET['rating'])) {
        if ($_GET['rating'] == 'ASC') {
            $media = $pdo->query('SELECT * FROM media ORDER BY rating ASC');
        }
        if ($_GET['rating'] == 'DESC') {
            $media = $pdo->query('SELECT * FROM media ORDER BY rating DESC');
        }
    }

    ?>

    <h1>Netland</h1>
    <p class="welkom">Welkom op het media-overzicht van Netland.</p>

    <button id="login_button"><a href="login.php">login</a></button>
    <h2>Overzicht media:</h2>

    <table>
        <thead>
            <td>
                <a href="index.php?title=AZ"><span>&#8593</span></a>
                title
                <a href="index.php?title=ZA"><span>&#8595</span></a>
            </td>
            <td>
                <a href="index.php?rating=ASC"><span>&#8593</span></a>
                rating
                <a href="index.php?rating=DESC"><span>&#8595</span></a>
            </td>
            <td>film/serie</td>
            <td>details</td>
        </thead>
        <?php
        foreach ($media as $med) {
            ?>
            <tr>
                <td><?= $med['title'] ?></td>
                <td><?= $med['rating'] ?></td>
                <td><?= $med['mediatype'] ?></td>
                <td><a href="detail.php?id=<?= $med['id'] ?>">details</a></td>
            </tr>

        <?php } ?>

    </table>

    <h2>Voeg toe</h2>
    <a href="insert.php">Voeg een film of serie toe</a>

</body>

</html>
