<!DOCTYPE html>
<html>

<head>
    <title>Movies</title>
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


    $movieID = $_GET['id'];

    $stmt = $pdo->prepare("SELECT * FROM movies WHERE id=?;");
    $stmt->execute([$movieID]);

    while ($movie = $stmt->fetch()) {
        echo "<h1>" . $movie['title'] . "<h1>";
        echo "<table>";
        echo "<tr><td>Duur (min)</td><td>" . $movie['length_in_minutes'] . "</td></tr>";
        echo "<tr><td>Datum</td><td>" . $movie['released_at'] . "</td></tr>";
        echo "<tr><td>Land van uitgave</td><td>" . $movie['country_of_origin'] . "</td></tr>";
        echo "</table>";

        echo "<h2>Beschrijving<h2>";
        echo "<p>" . $movie['summary'] . "</p>";

        echo "<iframe width='420' height='315' src='https://www.youtube.com/embed/";
        echo $movie['youtube_trailer_id'] . "'></iframe>";
    }
    ?>

</body>

</html>