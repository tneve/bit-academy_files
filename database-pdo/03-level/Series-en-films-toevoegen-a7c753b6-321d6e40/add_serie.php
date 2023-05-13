<!DOCTYPE html>
<html>

<head>
    <title>Add Series</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>


    <?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    include_once('netland-connection.php');
    ?>


    <h2>Formulier voor toevoegen serie</h2>

    <form method="post" action='add_serie.php'>

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
                <td><textarea id='summary' name='summary' rows=10 cols=40 required></textarea></td>
            </tr>

            <tr>
                <td><label for="awards">Hoeveel Awards</label></td>
                <td><input type='number' id='awards' name='awards' required></td>
            </tr>

            <tr>
                <td><label for="seasons">Hoeveel seizoenen?</label></td>
                <td><input type='number' id='seasons' name='seasons' required></td>
            </tr>
            <tr>
                <td><label for="country">Land van productie</label></td>
                <td><select name="country" id="country">
                        <option value="UK">UK</option>
                        <option value="NL">NL</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="language">Land van productie</label></td>
                <td><select name="language" id="language">
                        <option value="EN">EN</option>
                        <option value="NL">NL</option>
                    </select>
                </td>
            </tr>

        </table>
        <div class="button">
            <input type="submit" name="submit" value="Voeg deze serie toe">
        </div>
    </form>

    <?php

    $title = $_POST['title'] ?? "";
    $rating = $_POST['rating'] ?? "";
    $summary = $_POST['summary'] ?? "";
    $awards = $_POST['awards'] ?? "";
    $seasons = $_POST['seasons'] ?? "";
    $country = $_POST['country'] ?? "";
    $language = $_POST['language'] ?? "";

    if (isset($_POST['submit'])) {
        $sql = "INSERT INTO series(
        title
        , rating
        , summary
        , has_won_awards
        , seasons
        , country
        , spoken_in_language) 
    VALUES (
    :title
    , :rating
    , :summary
    , :has_won_awards
    , :seasons
    , :country
    , :spoken_in_language
    )";
        $stmt = $pdo->prepare($sql);

        $stmt->execute([
            'title' => $title, 'rating' => $rating, 'summary' => $summary, 'has_won_awards' => $awards, 'seasons' => $seasons, 'country' => $country, 'spoken_in_language' => $language
        ]);
        header("Location:index.php");
    }
    ?>
</body>

</html>