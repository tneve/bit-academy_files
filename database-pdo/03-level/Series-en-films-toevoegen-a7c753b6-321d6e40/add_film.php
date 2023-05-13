<!DOCTYPE html>
<html>

<head>
    <title>Add Movies</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>


    <?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    include_once('netland-connection.php');
    ?>


    <h2>Formulier voor toevoegen film</h2>

    <form method="post" action='add_film.php'>

        <table>
            <tr>
                <td><label for="title">Titel</label></td>
                <td><input type='text' id='title' name='title' required></td>
            </tr>

            <tr>
                <td><label for="length">Duur in min</label></td>
                <td><input type='number' id='length' name='length' required></td>
            </tr>
            <tr>
                <td><label for="date">Datum release</label></td>
                <td><input type='date' id='date' name='date' required></td>
            </tr>
            <tr>
                <td><label for="country">Land</label></td>
                <td><select name="country" id="country">
                        <option value="UK">UK</option>
                        <option value="NL">NL</option>
                        <option value="NL">EU</option>
                        <option value="NL">US</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td><label for="summary">Summary</label></td>
                <td><textarea id='summary' name='summary' rows=10 cols=40 required></textarea></td>
            </tr>

            <tr>
                <td><label for="trailer">Trailer</label></td>
                <td><input type="text" id="trailer" name='trailer' required></td>
            </tr>

        </table>
        <div class="button">
            <input type="submit" name="submit" value="Voeg deze film toe">
        </div>
    </form>


    <?php
    $title = $_POST['title'] ?? "";
    $length = $_POST['length'] ?? "";
    $date = $_POST['date'] ?? "";
    $country = $_POST['country'] ?? "";
    $summary = $_POST['summary'] ?? "";
    $trailer = $_POST['trailer'] ?? "";

    if (isset($_POST['submit'])) {
        $sql = "INSERT INTO movies(
        title
        , length_in_minutes
        , released_at
        , country_of_origin
        , summary
        , youtube_trailer_id) 
    VALUES (
    :title
    , :length_in_minutes
    , :released_at
    , :country_of_origin
    , :summary
    , :youtube_trailer_id
    )";
        $stmt = $pdo->prepare($sql);

        $stmt->execute([
            'title' => $title, 'length_in_minutes' => $length, 'released_at' => $date, 'country_of_origin' => $country, 'summary' => $summary, 'youtube_trailer_id' => $trailer
        ]);
        header("Location:index.php");
    }

    ?>
</body>

</html>