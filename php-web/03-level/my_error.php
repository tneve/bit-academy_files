<!DOCTYPE html>
<html>

<head>
    <title>try and catch</title>
</head>

<body>
    <?php

    function CountDown($x)
    {
        if (($x > 0) && ($x < 10)) {
            echo "Correct getal!";
        } else {
            throw new Exception("Getal moet tussen de 0 en 10 zijn!");
        }
    }

    try {
        CountDown(15);
    } catch (Exception $er) {
        error_log("Er is iets fout gegaan ...");
    }
    ?>

</body>

</html>