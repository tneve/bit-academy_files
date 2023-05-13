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


    if (isset($_GET["id"])) {
        $id = $_GET["id"];
    }

    $sql = "SELECT * FROM media WHERE id= ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
    $row = $stmt->fetch();

    $title = $row['title'] ?? "";
    $rating = $row['rating'] ?? "";
    $summary = $row['summary'] ?? "";
    $awards = $row['has_won_awards'] ?? "";
    $length = $row['length_in_minutes'] ?? "";
    $date = $row['released_at'] ?? "";
    $seasons = $row['seasons'] ?? "";
    $country = $row['country'] ?? "";
    $trailer = $row['youtube_trailer_id'] ?? "";
    $mediaType = $row['mediatype'] ?? "";
    $id = $row['id'] ?? "";

    ?>

    <h2>Formulier voor wijzigen media</h2>

    <form method="post" action='edit.php'>

        <input type='hidden' id='id' name='id' value="<?= $id; ?>">

        <table>
            <tr>
                <td><label for="title">Titel</label></td>
                <td><input type='text' id='title' name='title' value="<?= $title ?>" required></td>
            </tr>

            <tr>
                <td><label for="rating">Rating</label></td>
                <td><input type='number' id='rating' name='rating' step='0.1' value="<?= $rating ?>"></td>
            </tr>

            <tr>
                <td><label for="summary">Summary</label></td>
                <td><textarea id='summary' name='summary' rows=10 cols=40><?= $summary ?></textarea></td>
            </tr>

            <tr>
                <td><label for="awards">Hoeveel Awards</label></td>
                <td><input type='number' id='awards' name='awards' value="<?= $awards ?>"></td>
            </tr>

            <tr>
                <td><label for="seasons">Duur in minuten</label></td>
                <td><input type='number' id='length' name='length' value="<?= $length ?>"></td>
            </tr>
            <tr>
                <td><label for="seasons">Datum release</label></td>
                <td><input type='date' id='date' name='date' value="<?= $date ?>"></td>
            </tr>

            <tr>
                <td><label for="seasons">Hoeveel seizoenen?</label></td>
                <td><input type='number' id='seasons' name='seasons' value="<?= $seasons ?>"></td>
            </tr>
            <tr>
                <td><label for="country">Land van productie</label></td>
                <td><select name="country" id="country">
                        <option value="UK">UK</option>
                        <option value="NL">NL</option>
                        <option value="NL">US</option>
                        <option value="EU">EU</option>
                    </select>
                </td>
            <tr>
                <td><label for="trailer">Youtube trailer id</label></td>
                <td><input type='text' id='trailer' name='trailer' value="<?= $trailer ?>"></td>
            </tr>

            </tr>
            <tr>
                <td><label for="mediaType">Film / Serie</label></td>
                <td><select name="mediaType" id="mediaType">
                        <option value="film">film</option>
                        <option value="serie">serie</option>
                    </select>
                </td>
            </tr>

        </table>
        <input type="submit" name="submit" value="verstuur">
    </form>
    <?php
    $title = ((isset($_POST['title']) && !empty($_POST['title'])) ? $_POST['title'] : null);
    $rating = ((isset($_POST['rating']) && !empty($_POST['rating'])) ? $_POST['rating'] : null);
    $summary = ((isset($_POST['summary']) && !empty($_POST['summary'])) ? $_POST['summary'] : null);
    $awards = ((isset($_POST['awards']) && !empty($_POST['awards'])) ? $_POST['awards'] : null);
    $length = ((isset($_POST['length']) && !empty($_POST['length'])) ? $_POST['length'] : null);
    $date = ((isset($_POST['date']) && !empty($_POST['date'])) ? $_POST['date'] : null);
    $seasons = ((isset($_POST['seasons']) && !empty($_POST['seasons'])) ? $_POST['seasons'] : null);
    $country = ((isset($_POST['country']) && !empty($_POST['country'])) ? $_POST['country'] : null);
    $trailer = ((isset($_POST['trailer']) && !empty($_POST['trailer'])) ? $_POST['trailer'] : null);
    $mediaType = ((isset($_POST['mediaType']) && !empty($_POST['mediaType'])) ? $_POST['mediaType'] : null);
    $id = $_POST['id'] ?? "";


    if (isset($_POST['submit'])) {
        $sql2 = "UPDATE media SET
        title = :t
        , rating = :r
        , summary = :su
        , has_won_awards = :a
        , length_in_minutes = :l
        , released_at = :d
        , seasons = :se 
        , country = :c
        , youtube_trailer_id = :tr
        , mediatype = :m
        WHERE id=:id";

        $stmt2 = $pdo->prepare($sql2);
        $stmt2->bindParam(':t', $title, PDO::PARAM_STR);
        $stmt2->bindParam(':r', $rating, PDO::PARAM_STR);
        $stmt2->bindParam(':su', $summary, PDO::PARAM_STR);
        $stmt2->bindParam(':a', $awards, PDO::PARAM_INT);
        $stmt2->bindParam(':l', $length, PDO::PARAM_INT);
        $stmt2->bindParam(':d', $date, PDO::PARAM_STR);
        $stmt2->bindParam(':se', $seasons, PDO::PARAM_INT);
        $stmt2->bindParam(':c', $country, PDO::PARAM_STR);
        $stmt2->bindParam(':tr', $trailer, PDO::PARAM_STR);
        $stmt2->bindParam(':m', $mediaType, PDO::PARAM_STR);
        $stmt2->bindParam(':id', $id, PDO::PARAM_INT);
        $binds = ['t' => $title, 'r' => $rating, 'su' => $summary, 'a' => $awards, 'l' => $length, 'd' => $date, 'se' => $seasons, 'c' => $country, 'tr' => $trailer, 'm' => $mediaType, 'id' => $id];
        $stmt2->execute($binds);

        header("Location:index.php");
    }
    ?>