<!DOCTYPE html>
<html>

<head>
    <title>schaakbord</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <table>
        <?php
        for ($i = 1; $i <= 8; $i++) {
            echo '<tr>';
            for ($j = 1; $j <= 8; $j++) {
                echo '<td';
                if (($i + $j) % 2 == 0) {
                    echo ' class="white">';
                } else {
                    echo ' class="black">';
                }
                echo   "</td>";
            }

            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>