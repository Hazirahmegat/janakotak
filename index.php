<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <form method="POST">
            <h2>BOX GENERATOR</h2>
            <label for="width">Width :</label>
            <input type="number" name="width" id="width"><br><br>
            <label for="height">Height :</label>
            <input type="number" name="height" id="height"><br><br>
            <input type="submit" name="generate" value="generate">
        </form>
    </fieldset>
    <br>

    <?php
    if (isset($_POST['generate'])) {
        $width = $_POST['width'];
        $height = $_POST['height'];

        ?>
        <table border='1'>
            <?php
            for ($i = 0; $i < $height; $i++) {
                ?>
                <tr>
                    <?php
                    for ($j = 0; $j < $width; $j++) {
                        echo "<td>row " . $i . " column " . $j . "</td>";
                    }
                    ?>
                </tr>
                <?php
            }
            echo "</table>";
    }
    ?>
</body>
</html>