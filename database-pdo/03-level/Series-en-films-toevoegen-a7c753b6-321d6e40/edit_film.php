<!DOCTYPE html>
<html>

<head>
    <title>Edit Movies</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <?php
    include_once('netland-connection.php');


    if (isset($_GET["id"])) {
        $movieID = $_GET["id"];
    }

    $sql = "SELECT * FROM movies WHERE id= ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$movieID]);
    $movie = $stmt->fetch();

    $id = $movie['id'];
    $title = $movie['title'];
    $length = $movie['length_in_minutes'];
    $date = $movie['released_at'];
    $country = $movie['country_of_origin'];
    $summary = $movie['summary'];
    $trailer = $movie['youtube_trailer_id'];

    ?>

    <h2>Formulier voor wijzigingen</h2>

    <form method="post" action='edit_film.php'>
        <input type='hidden' id='id' name='id' value="<?= $id ?>"><br>

        <label for="title">Titel</label>
        <input type='text' id='title' name='title' value="<?= $title ?>" required><br>

        <label for="length">Duur in min</label>
        <input type='number' id='length' name='length' value="<?= $length ?>" required><br>

        <label for="date">Datum release</label>
        <input type='date' id='date' name='date' value="<?= $date ?>" required><br>

        <label for="country">Land</label>
        <input type="text" id='country' name='country' value="<?= $country ?>" required><br>

        <label for="summary">Summary</label>
        <textarea id='summary' name='summary' rows=10 cols=40 required><?= $summary ?></textarea><br>

        <label for="trailer">Trailer</label>
        <input type="text" id="trailer" name='trailer' value="<?= $trailer ?>" required><br>

        <input type="submit" name="submit" value="verstuur">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $titleEdit = $_POST['title'];
        $lengthEdit = $_POST['length'];
        $dateEdit = $_POST['date'];
        $countryEdit = $_POST['country'];
        $summaryEdit = $_POST['summary'];
        $trailerEdit = $_POST['trailer'];
    }

    $sql = "UPDATE movies SET
    title = :title
    , length_in_minutes = :length_in_minutes
    , released_at = :released_at
    , country_of_origin = :country_of_origin
    , summary = :summary
    , youtube_trailer_id = :youtube_trailer_id
        WHERE id=:id";
    $stmt2 = $pdo->prepare($sql);

    $stmt2->bindParam(':title', $titleEdit, PDO::PARAM_STR);
    $stmt2->bindParam(':length_in_minutes', $lengthEdit, PDO::PARAM_INT);
    $stmt2->bindParam(':released_at', $dateEdit, PDO::PARAM_STR);
    $stmt2->bindParam(':country_of_origin', $countryEdit, PDO::PARAM_STR);
    $stmt2->bindParam(':summary', $summaryEdit, PDO::PARAM_STR);
    $stmt2->bindParam(':youtube_trailer_id', $trailerEdit, PDO::PARAM_STR);
    $stmt2->bindParam(':id', $id, PDO::PARAM_INT);


    $stmt2->execute();
    header("Location:index.php");


    ?>
</body>

</html>