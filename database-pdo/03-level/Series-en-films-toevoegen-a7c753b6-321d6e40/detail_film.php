<!DOCTYPE html>
<html>

<head>
    <title>Movies</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <?php
    include_once('netland-connection.php');

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

