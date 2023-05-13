<!DOCTYPE html>
<html>

<head>
    <title>Edit Series</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <?php
    include_once('netland-connection.php');

    if (isset($_GET["id"])) {
        $serieID = $_GET["id"];
    }

    $sql = "SELECT * FROM series WHERE id= ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$serieID]);
    $serie = $stmt->fetch();

    $title = $serie['title'];
    $rating = $serie['rating'];
    $summary = $serie['summary'];
    $awards = $serie['has_won_awards'];
    $seasons = $serie['seasons'];
    $country = $serie['country'];
    $language = $serie['spoken_in_language'];
    $id = $serie['id'];

    ?>

    <h2>Formulier voor wijzigingen</h2>

    <form method="post" action='edit_serie.php'>
        <input type='hidden' id='serieID' name='serieID' value="<?= $id; ?>"><br>

        <label for="title">Titel</label>
        <input type='text' id='title' name='title' value="<?= $title; ?>" required><br>

        <label for="rating">Rating</label>
        <input type='number' id='rating' name='rating' step='0.1' value="<?= $rating; ?>" required><br>

        <label for="summary">Summary</label>
        <textarea id='summary' name='summary' rows=10 cols=40 required><?= $summary; ?></textarea><br>

        <label for="awards">Hoeveel Awards</label>
        <input type='number' id='awards' name='awards' value="<?= $awards; ?>" required><br>

        <label for="seasons">Hoeveel seizoenen?</label>
        <input type='number' id='seasons' name='seasons' value="<?= $seasons; ?>" required><br>

        <label for="country">Land van productie</label>
        <input type="text" id='country' name='country' value="<?= $country; ?>" required><br>

        <label for="language">Taal</label>
        <input type="text" id="language" name='language' value="<?= $language; ?>" required><br>

        <input type="submit" name="submit" value="verstuur">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $serieID = $_POST['serieID'];
        $titleEdit = $_POST['title'];
        $ratingEdit = $_POST['rating'];
        $summaryEdit = $_POST['summary'];
        $awardsEdit = $_POST['awards'];
        $seasonsEdit = $_POST['seasons'];
        $countryEdit = $_POST['country'];
        $languageEdit = $_POST['language'];
    }

    $sql = "UPDATE series SET
    title = :title
    , rating = :rating
    , summary = :summary
    , has_won_awards = :has_won_awards
    , seasons = :seasons
    , country = :country
    , spoken_in_language = :spoken_in_language
    WHERE id=:id";
    $stmt2 = $pdo->prepare($sql);

    $stmt2->bindParam(':title', $titleEdit, PDO::PARAM_STR);
    $stmt2->bindParam(':rating', $ratingEdit, PDO::PARAM_STR);
    $stmt2->bindParam(':summary', $summaryEdit, PDO::PARAM_STR);
    $stmt2->bindParam(':has_won_awards', $awardsEdit, PDO::PARAM_INT);
    $stmt2->bindParam(':seasons', $seasonsEdit, PDO::PARAM_INT);
    $stmt2->bindParam(':country', $countryEdit, PDO::PARAM_STR);
    $stmt2->bindParam(':spoken_in_language', $languageEdit, PDO::PARAM_STR);
    $stmt2->bindParam(':id', $serieID, PDO::PARAM_INT);

    $stmt2->execute();
    header("Location:index.php");

    ?>
</body>

</html>