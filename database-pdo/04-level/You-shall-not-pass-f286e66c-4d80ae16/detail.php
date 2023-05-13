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


    $id = $_GET['id'];
    $sql = "SELECT * FROM media WHERE id=?";
    $stmt = $pdo->prepare($sql);
    $row = $stmt->execute([$id]);
    $row = $stmt->fetch();

    $id = $row['id'] ?? "";
    $title = $row['title'] ?? "";
    $rating = $row['rating'] ?? "";
    $summary = $row['summary'] ?? "";
    $awards = $row['has_won_awards'] ?? "";
    $length = $row['length_in_minutes'] ?? "";
    $date = $row['released_at'] ?? "";
    $seasons = $row['seasons'] ?? "";
    $country = $row['country'] ?? "";
    $language = $row['spoken_in_language'] ?? "";
    $trailer = $row['youtube_trailer_id'] ?? "";
    $mediaType = $row['mediatype'] ?? "";
    $embed = "https://www.youtube.com/embed/" . $trailer;

    ?>



    <h2><?= $title ?></h2>
    <h4>Beschrijving:</h4>
    <p><?= $summary ?></p>
    <h4>Details:</h4>
    <table>
        <tr>
            <td>Rating</td>
            <td><?= $rating ?></td>
        </tr>
        <tr>
            <td>Aantal Awards</td>
            <td><?= $awards ?></td>
        </tr>
        <tr>
            <td>Duur in min</td>
            <td><?= $length ?></td>
        </tr>
        <tr>
            <td>Datum release</td>
            <td><?= $date ?></td>
        </tr>
        <tr>
            <td>Aantal Seizoenen</td>
            <td><?= $seasons ?></td>
        </tr>
        <tr>
            <td>Land van productie</td>
            <td><?= $country ?></td>
        </tr>
        <tr>
            <td>Taal</td>
            <td><?= $language ?></td>
        </tr>
        <tr>
            <td>Aantal Awards</td>
            <td><?= $awards ?></td>
        </tr>
        <tr>
            <td>Trailer id</td>
            <td><?= $trailer ?></td>
        </tr>
        <tr>
            <td>Media Type</td>
            <td><?= $mediaType ?></td>
        </tr>
    </table>

    <?php
    if ($mediaType == "film") { ?>
        <iframe width='420' height='315' src=<?= $embed ?> frameborder="0"></iframe>
    <?php } ?>

    <a href="edit.php?id=<?= $row['id'] ?>">EDIT DATA</a>
</body>

</html>