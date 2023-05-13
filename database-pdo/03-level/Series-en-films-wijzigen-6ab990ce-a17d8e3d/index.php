<!DOCTYPE html>
<html>

<head>
    <title>Netland films en series</title>
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

    $series = $pdo->query('SELECT * FROM series');
    $movies = $pdo->query('SELECT * FROM movies');
    $movieSort = "movieTitle=AZ";
    $serieSort = "serieTitle=AZ";



    if (isset($_GET['serieTitle'])) {
        $series = $pdo->query('SELECT * FROM series ORDER BY title ASC');
        $serieSort = "serieTitle=AZ";
    }
    if (isset($_GET['serieRating'])) {
        $series = $pdo->query('SELECT * FROM series ORDER BY rating DESC');
        $serieSort = "serieRating=DESC";
    }

    if (isset($_GET['movieTitle'])) {
        $movies = $pdo->query('SELECT * FROM movies ORDER BY title ASC');
        $movieSort = "movieTitle=AZ";
    }

    if (isset($_GET['movieLength'])) {
        $movies = $pdo->query('SELECT * FROM movies ORDER BY length_in_minutes DESC');
        $movieSort = "movieLength=DESC";
    }


    ?>

    <h1>Welkom op het Netland beheerderspanel</h1>

    <h2>Series</h2>
    <table>
        <thead>
            <td>
                <a href="index.php?<?= $movieSort; ?>&serieTitle=AZ">title<span>&#8593</span></a>
            </td>
            <td>
                <a href="index.php?<?= $movieSort; ?>&serieRating=DESC">rating<span>&#8595</span></a>
            </td>
            <td>details</td>
        </thead>
        <?php

        foreach ($series as $serie) {
            echo "<tr><td>" . $serie['title'] . "</td><td>" . $serie['rating'] . "</td>
            <td><a href=detail_serie.php?id=" . $serie['id'] . ">Show details</a></td></tr>";
        }
        ?>
    </table>


    <h2>Movies</h2>

    <table>
        <thead>
            <td>
                <a href="index.php?<?= $serieSort; ?>&movieTitle=AZ">title<span>&#8593</span></a>
            </td>
            <td>
                <a href="index.php?<?= $serieSort; ?>&movieLength=DESC">length<span>&#8595</span></a>
            </td>
            <td>details</td>
        </thead>

        <?php

        foreach ($movies as $movie) {
            echo "<tr><td>" . $movie['title'] . "</td><td>" . $movie['length_in_minutes'] . "</td>
            <td><a href=detail_film.php?id=" . $movie['id'] . ">Show details</a></td></tr>";
        }
        ?>
    </table>






</body>

</html>