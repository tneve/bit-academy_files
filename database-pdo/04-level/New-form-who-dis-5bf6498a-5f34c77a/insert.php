<!DOCTYPE html>
<html>

<head>
    <title>Add Media</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    include_once('netland-connection.php');

    ?>

    <h2>Formulier voor toevoegen media</h2>

    <form method="post" action='insert.php'>
        <table>
            <tr>
                <td><label for="title">Titel</label></td>
                <td><input type='text' id='title' name='title' required></td>
            </tr>

            <tr>
                <td><label for="rating">Rating</label></td>
                <td><input type='number' id='rating' name='rating' step='0.1' required></td>
            </tr>

            <tr>
                <td><label for="summary">Summary</label></td>
                <td><textarea id='summary' name='summary' rows=10 cols=40></textarea></td>
            </tr>

            <tr>
                <td><label for="awards">Hoeveel Awards</label></td>
                <td><input type='number' id='awards' name='awards'></td>
            </tr>

            <tr>
                <td><label for="seasons">Duur in minuten</label></td>
                <td><input type='number' id='length' name='length'></td>
            </tr>
            <tr>
                <td><label for="seasons">Datum release</label></td>
                <td><input type='date' id='date' name='date'></td>
            </tr>

            <tr>
                <td><label for="seasons">Hoeveel seizoenen?</label></td>
                <td><input type='number' id='seasons' name='seasons'></td>
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
                <td><input type='text' id='trailer' name='trailer'></td>
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
        <div class="button">
            <input type="submit" name="submit" value="Voeg deze film of serie toe">
        </div>
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

    if (isset($_POST['submit'])) {
        $sql = "INSERT INTO media 
    (title,
    rating,
    summary,
    has_won_awards,
    length_in_minutes,
    released_at,
    seasons,
    country,
    youtube_trailer_id,
    mediatype) 
    VALUES
    (:t
    , :r
    , :su
    , :a
    , :l
    , :d
    , :se 
    , :c
    , :tr
    , :m
    )";

        $stmt = $pdo->prepare($sql);

        $stmt->execute(['t' => $title, 'r' => $rating, 'su' => $summary, 'a' => $awards, 'l' => $length, 'd' => $date, 'se' => $seasons, 'c' => $country, 'tr' => $trailer, 'm' => $mediaType]);

        header("Location:index.php");
    }
    ?>