<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <?php
    include 'connection.php';

    try {
        $posts = $conn->query('SELECT * FROM posts')->fetchAll();
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
                <p><?= $post['inhoud'] ?>
                </p>
            </div>
        <?php } ?>


    </div>
</body>

</html>