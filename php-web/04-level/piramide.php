<!DOCTYPE html>
<html>

<head>
    <title>schaakbord</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <table>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo '<tr>';
            for ($j = 1; $j <= $i; $j++) {
                echo '<td ';
                echo 'class="black">';
                echo '</td>';
            }
            echo '</tr>';
        }
        ?>
    </table>
</body>

</html>