<?php
session_start();

if (!isset($_SESSION['views'])) {
    $_SESSION['views'] = 0;
}

$_SESSION['views'] = $_SESSION['views'] + 1;
?>

<!DOCTYPE html>
<html>

<body>
    <?php
    echo "Aantal bezoeken : " . $_SESSION['views'];
    ?>

</body>

</html>