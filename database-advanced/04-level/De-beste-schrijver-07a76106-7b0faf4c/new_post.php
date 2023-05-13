<!DOCTYPE html>
<html>

<head>
    <title>Add a Dish</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="container">
        <div id="header">
            <h1>Nieuwe post</h1>
            <a href="index.php"><button>Alle posts</button></a>
        </div>

        <?php
        include 'connection.php';



        if (isset($_POST["submit"])) {
            $titel = $_POST['titel'];
            $auteur_id = intval($_POST['auteur']);
            $img_url = $_POST['img_url'];
            $inhoud = $_POST['inhoud'];
            $sql = "INSERT INTO posts (titel, img_url, inhoud, auteur_id) 
                VALUES (:titel, :img_url, :inhoud, :auteur_id)";
            $stmt = $conn->prepare($sql);
            try {
                $stmt->execute([':titel' => $titel, ':auteur_id' => $auteur_id, ':img_url' => $img_url, ':inhoud' => $inhoud]);
                header("Location:index.php");
            } catch (PDOException $e) {
                echo "Toevoegen van recept niet gelukt" . $e->getMessage();
            }
        } else {
            ?>
            <form action="new_post.php" method="post">
                <label for="titel">Titel:</label>
                <input type="text" name="titel" id="title">

                <label for="auteur">Auteur:</label>
                <select name="auteur" id="auteur">
                    <option value="1">Mounir Toub</option>
                    <option value="2">Miljuschka</option>
                    <option value="3">Wim Ballieu</option>

                </select>

                <label for="img_url">URL afbeelding:</label>
                <input type="text" name="img_url">

                <label for="inhoud">Inhoud:</label>
                <textarea name="inhoud" id="inhoud" rows="10" cols="100"></textarea>
                <input type="submit" name="submit" value="Publiceer">
            </form>
            <?php
        }
        ?>
    </div>
</body>

</html>
