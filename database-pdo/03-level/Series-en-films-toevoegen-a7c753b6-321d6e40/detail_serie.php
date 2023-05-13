<!DOCTYPE html>
<html>

<head>
    <title>Series</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <?php
    include_once('netland-connection.php');
    $serieID = $_GET['id'];

    $stmt = $pdo->prepare("SELECT * FROM series WHERE id=?");
    $stmt->execute([$serieID]);


    while ($serie = $stmt->fetch()) {
        ?>
        <h1><?= $serie['title'] ?><h1>

                <table>
                    <tr>
                        <td>Rating</td>
                        <td><?= $serie['rating'] ?></td>
                    </tr>
                    <tr>
                        <td>Awards</td>
                        <td><?= $serie['has_won_awards'] ?></td>
                    </tr>
                    <tr>
                        <td>Seizoenen</td>
                        <td><?= $serie['seasons'] ?></td>
                    </tr>
                    <tr>
                        <td>Land van uitgave</td>
                        <td><?= $serie['country'] ?></td>
                    </tr>
                    <tr>
                        <td>Taal</td>
                        <td><?= $serie['spoken_in_language'] ?></td>
                    </tr>
                </table>

                <h2>Beschrijving<h2>
                        <p><?= $serie['summary'] ?></p>


                        <a href="edit_serie.php?id=<?= $serie['id']; ?>">EDIT DATA
                        </a>
        <?php
    }
    ?>


</body>

</html>


