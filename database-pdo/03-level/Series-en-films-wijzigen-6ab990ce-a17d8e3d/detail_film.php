<!DOCTYPE html>
<html>

<head>
    <title>Movies</title>
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



    $movieID = $_GET['id'];

    $stmt = $pdo->prepare("SELECT * FROM movies WHERE id=?");
    $stmt->execute([$movieID]);

    while ($movie = $stmt->fetch()) {
    ?>
        <h1><?= $movie['title'] ?><h1>
                <table>
                    <tr>
                        <td>Duur (min)</td>
                        <td><?= $movie['length_in_minutes'] ?></td>
                    </tr>
                    <tr>
                        <td>Datum</td>
                        <td><?= $movie['released_at'] ?></td>
                    </tr>
                    <tr>
                        <td>Land van uitgave</td>
                        <td><?= $movie['country_of_origin'] ?></td>
                    </tr>
                </table>

                <h2>Beschrijving<h2>
                        <p><?= $movie['summary'] ?></p>

                        <iframe width='420' height='315' src="https://www.youtube.com/embed/<?= $movie['youtube_trailer_id'] ?>"></iframe>

                        <a href="edit_film.php?id=<?= $movie['id']; ?>">EDIT DATA
                        </a>


                    <?php
                }
                    ?>

</body>

</html>