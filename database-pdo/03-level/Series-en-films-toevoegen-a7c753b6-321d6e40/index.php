<!DOCTYPE html>
<html>

<head>
    <title>Netland films en series</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <?php
    include_once('netland-connection.php');

    $series = $pdo->query('SELECT * FROM series');
    $movies = $pdo->query('SELECT * FROM movies');
    $movieSort = "movieTitle=nosort";
    $serieSort = "serieTitle=nosort";



    if (isset($_GET['serieTitle'])) {
        if ($_GET['serieTitle'] == 'AZ') {
            $series = $pdo->query('SELECT * FROM series ORDER BY title ASC');
            $serieSort = "serieTitle=AZ";
        } else if ($_GET['serieTitle'] == 'ZA') {
            $series = $pdo->query('SELECT * FROM series ORDER BY title DESC');
            $serieSort = "serieTitle=ZA";
        }
    }
    if (isset($_GET['serieRating'])) {
        if ($_GET['serieRating'] == 'DESC') {
            $series = $pdo->query('SELECT * FROM series ORDER BY rating DESC');
            $serieSort = "serieRating=DESC";
        } else if ($_GET['serieRating'] == 'ASC') {
            $series = $pdo->query('SELECT * FROM series ORDER BY rating ASC');
            $serieSort = "serieRating=ASC";
        }
    }

    if (isset($_GET['movieTitle'])) {
        if ($_GET['movieTitle'] == 'AZ') {
            $movies = $pdo->query('SELECT * FROM movies ORDER BY title ASC');
            $movieSort = "movieTitle=AZ";
        } else if ($_GET['movieTitle'] == 'ZA') {
            $movies = $pdo->query('SELECT * FROM movies ORDER BY title DESC');
            $movieSort = "movieTitle=ZA";
        }
    }
    if (isset($_GET['movieLength'])) {
        if ($_GET['movieLength'] == 'DESC') {
            $movies = $pdo->query('SELECT * FROM movies ORDER BY length_in_minutes DESC');
            $movieSort = "movieLength=DESC";
        } else if ($_GET['movieLength'] == 'ASC') {
            $movies = $pdo->query('SELECT * FROM movies ORDER BY length_in_minutes ASC');
            $movieSort = "movieLength=ASC";
        }
    }

    ?>

    <h1>Welkom op het Netland beheerderspanel</h1>

    <h2>Series</h2>
    <table>
        <thead>
            <td>
                <a href="index.php?<?= $movieSort; ?>&serieTitle=AZ"><span>&#8593</span></a>
                title
                <a href="index.php?<?= $movieSort; ?>&serieTitle=ZA"><span>&#8595</span></a>
            </td>
            <td>
                <a href="index.php?<?= $movieSort; ?>&serieRating=ASC"><span>&#8593</span></a>
                rating
                <a href="index.php?<?= $movieSort; ?>&serieRating=DESC"><span>&#8595</span></a>
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
    <button><a href="add_serie.php">Voeg een serie toe</a></button>


    <h2>Movies</h2>

    <table>
        <thead>
            <td>
                <a href="index.php?<?= $serieSort; ?>&movieTitle=AZ"><span>&#8593</span></a>
                title
                <a href="index.php?<?= $serieSort; ?>&movieTitle=ZA"><span>&#8595</span></a>
            </td>
            <td>
                <a href="index.php?<?= $serieSort; ?>&movieLength=ASC"><span>&#8593</span></a>
                length
                <a href="index.php?<?= $serieSort; ?>&movieLength=DESC"><span>&#8595</span></a>
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
    <button><a href="add_film.php">Voeg een film toe</a></button>







</body>

</html>