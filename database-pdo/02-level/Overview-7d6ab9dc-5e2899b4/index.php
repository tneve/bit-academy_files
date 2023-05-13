<!DOCTYPE html>
<html>

<head>
    <title>Netland</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <?php
    $host = '127.0.0.1:3309';
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
    ?>

    <h1>Welkom op het Netland beheerderspanel</h1>

    <h2>Series</h2>
    <table>
        <thead>
            <td>title</td>
            <td>rating</td>
        </thead>
        <?php

        $series = $pdo->query('SELECT title,rating FROM series');

        foreach ($series as $serie) {
            echo "<tr><td>" . $serie['title'] . "</td><td>" . $serie['rating'] . "</td></tr>";
        }
        ?>
    </table>


    <h2>Movies</h2>
    <table>
        <thead>
            <td>
                title
            </td>
            <td>length</td>
        </thead>";

        <?php
        $movies = $pdo->query('SELECT title,length_in_minutes FROM movies');
        foreach ($movies as $movie) {
            echo "<tr><td>" . $movie['title'] . "</td><td>" . $movie['length_in_minutes'] . "</td></tr>";
        }
        ?>
    </table>





</body>

</html>