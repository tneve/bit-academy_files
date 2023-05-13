<!DOCTYPE html>
<html>

<head>
    <title>Calculator</title>
    <link rel="stylesheet" type="text/css" href="style3.css">
</head>

<body>
    <div>
        <h1>Calculator</h1>
    </div>

    <?php
    if (isset($_POST['number1'])) {
        $Number1 = $_POST['number1'];
    }
    if (isset($_POST['number2'])) {
        $Number2 = $_POST['number2'];
    }
    if (isset($_POST['operation'])) {
        $Operation = $_POST['operation'];
    }
    ?>

    <form action="calculator.php" method="POST">
        <div>
            <label for="number1">
                <h2>Number 1:</h2>
            </label>

            <input type="text" name='number1' id='number1' <?php echo "value = $Number1"; ?>>

            <?php
            if ((($Number1 == "") or !is_numeric($Number1)) && (isset($Operation))) {
                exit("<span class='error'>Number 1 is not a number!</span>");
            }
            ?>
        </div>
        <div>
            <label for="number2">
                <h2>Number 2:</h2>
            </label>
            <input type="text" name='number2' id='number2' <?php echo "value = $Number2"; ?>>

            <?php
            if ((($Number2 == "") or !is_numeric($Number2)) && (isset($Operation))) {
                exit("<span class='error'>Number 2 is not a number!</span>");
            }
            ?>
        </div>

        <?php
        switch ($Operation) {
            case "Add":
                $Result = $Number1 + $Number2;
                echo "<div><h2>Operation: </h2><span>$Operation</span></div>";
                echo "<div><h2>Result: </h2><span>$Result</span></div>";
                break;
            case "Subtract":
                $Result = $Number1 - $Number2;
                echo "<div><h2>Operation: </h2><span>$Operation</span></div>";
                echo "<div><h2>Result: </h2><span>$Result</span></div>";
                break;
            case "Multiply":
                $Result = $Number1 * $Number2;
                echo "<div><h2>Operation: </h2><span>$Operation</span></div>";
                echo "<div><h2>Result: </h2><span>$Result</span></div>";
                break;
            case "Divide":
                if ($Number2 != 0) {
                    $Result = $Number1 / $Number2;
                    echo "<div><h2>Operation: </h2><span>$Operation</span></div>";
                    echo "<div><h2>Result: </h2><span>$Result</span></div>";
                } else {
                    exit("<p class='error'>Cannot divide by 0!</p>");
                }
                break;
            case "Modulo":
                if ($Number2 != 0) {
                    $Result = fmod($Number1, $Number2);
                    echo "<div><h2>Operation: </h2><span>$Operation</span></div>";
                    echo "<div><h2>Result: </h2><span>$Result</span></div>";
                } else {
                    exit("<p class='error'>Cannot divide by 0!</p>");
                }
                break;
        }
        ?>

        <div>
            <input type="submit" name="operation" id="add" value="Add">
            <input type="submit" name="operation" id="subtract" value="Subtract">
            <input type="submit" name="operation" id="multiply" value="Multiply">
            <input type="submit" name="operation" id="divide" value="Divide">
            <input type="submit" name="operation" id="modulo" value="Modulo">
        </div>
    </form>



</body>