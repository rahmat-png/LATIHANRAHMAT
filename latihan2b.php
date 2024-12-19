<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modul 2 - Latihan 1</title>
    <style>
        .kotak {
            width: 30px;
            height: 30px;
            border: 1px solid black;
            text-align: center;
            line-height: 30px;
            float: left;
            margin: 3px;
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>
    <?php
    // Variables for number of rows and columns
    $rows = 5;

    // Loop to generate each row
    for ($i = 1; $i <= $rows; $i++) {
        // Loop to generate the number of boxes equal to the row number
        for ($j = 1; $j <= $i; $j++) {
            echo "<div class='kotak'>$j</div>";
        }
        // Clear the floats after each row
        echo "<div class='clear'></div>";
    }
    ?>
</body>
</html>