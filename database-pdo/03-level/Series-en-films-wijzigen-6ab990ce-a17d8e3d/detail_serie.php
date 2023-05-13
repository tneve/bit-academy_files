<!DOCTYPE html>
<html>

<head>
    <title>Series</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <?php
    $host = '127.0.0.1';
    $db   = 'netland';
    $user = 'bit_academy';
    $pass = 'bit_academy';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false
    ];
    try {
        $pdo = new PDO($dsn, $user, $pass, $options);

        echo "Connected successfully ";

        $stmt = $pdo->query('select version()');
        while ($row = $stmt->fetch()) {
            echo $row['version()'] . "\n";
        }
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

    $serieID = $_GET['id'];

    $stmt = $pdo->prepare("SELECT * FROM series WHERE id=?");
    $stmt->execute([$serieID]);


    while ($serie = $stmt->fetch()) {
        ?>
        <h1><?= $serie['title'] ?><h1>

                <table>
                    <tr>
                        <td>Rating</td>
                        <td><?= $serie['rating'] ?></td>
                    </tr>
                    <tr>
                        <td>Awards</td>
                        <td><?= $serie['has_won_awards'] ?></td>
                    </tr>
                    <tr>
                        <td>Seizoenen</td>
                        <td><?= $serie['seasons'] ?></td>
                    </tr>
                    <tr>
                        <td>Land van uitgave</td>
                        <td><?= $serie['country'] ?></td>
                    </tr>
                    <tr>
                        <td>Taal</td>
                        <td><?= $serie['spoken_in_language'] ?></td>
                    </tr>
                </table>

                <h2>Beschrijving<h2>
                        <p><?= $serie['summary'] ?></p>


                        <a href="edit_serie.php?id=<?= $serie['id']; ?>">EDIT DATA
                        </a>
        <?php 
    }
    ?>


</body>

</html>
