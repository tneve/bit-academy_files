<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <?php
    include 'connection.php';

    try {
        $sql = 'SELECT naam,sum(likes) as totaal_likes FROM posts INNER JOIN auteurs ON posts.auteur_id = auteurs.a_id GROUP BY naam HAVING totaal_likes > 10';
        $popularChefs = $conn->query($sql)->fetchAll();
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    try {
        $posts = $conn->query('SELECT * FROM posts INNER JOIN auteurs ON posts.auteur_id = auteurs.a_id ORDER BY posts.likes DESC')->fetchAll();
    } catch (PDOException $e) {
        echo $e->getMessage();
    }



    ?>

    <div class="container">

        <div id="header">
            <h1>Foodblog</h1>
            <a href="new_post.php"><button>Nieuwe post</button></a>
        </div>


        <div>
            <h3>Populaire Chefs</h3>
            <ul>
                <?php
                foreach ($popularChefs as $chef) :
                    ?>
                    <li><?= $chef['naam'] ?> </li>
                <?php endforeach; ?>
            </ul>
        </div>

        <?php
        foreach ($posts as $post) :
            ?>
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
        <?php endforeach; ?>

        <?php

        if (isset($_POST['like'])) {
            echo $_POST['like'];
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
