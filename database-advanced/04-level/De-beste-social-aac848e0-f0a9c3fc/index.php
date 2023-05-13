<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <?php
    include 'connection.php';

    try {
        $posts = $conn->query('SELECT * FROM posts INNER JOIN auteurs ON posts.auteur_id = auteurs.a_id ORDER BY likes DESC')->fetchAll();
    } catch (PDOException $e) {
        echo $e->getMessage();
    }



    ?>

    <div class="container">

        <div id="header">
            <h1>Foodblog</h1>
            <a href="new_post.php"><button>Nieuwe post</button></a>
        </div>

        <?php
        foreach ($posts as $post) { ?>
            <div class="post">
                <div class="header">
                    <h2><?= $post['titel'] ?></h2>
                    <img src=<?= $post['img_url'] ?>>
                </div>
                <span class="details">Geschreven op: <?= $post['datum'] ?></span>
                <span class="details">Auteur: <?= $post['naam'] ?></span>
                <p><?= $post['inhoud'] ?>
                </p>
                <span class="right">
                    <form action="index.php" method="post">
                        <button type="submit" value="<?php echo $post['id']; ?>" name="like">
                            <?php echo $post['likes']; ?> likes
                        </button>
                    </form>
                </span>


            </div>
        <?php } ?>

        <?php

        if (isset($_POST['like'])) {
            $sql = 'UPDATE posts SET likes = (likes + 1) WHERE id = :id';
            $stmt = $conn->prepare($sql);
            try {
                $stmt->execute([':id' => $_POST['like']]);
            } catch (PDOException $e) {
                echo "updaten likes mislukt" . $e->getMessage();
            }
        }
        ?>


    </div>
</body>

</html>