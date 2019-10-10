<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/fontawesome/css/all.min.css">
    <title>PHP Arithmetic Operators</title>
</head>
<body>

    <h3>Addition (+)</h3>
    <?php
        $x = 24;
        $y = 5;

        // echo $x + $y; // 29
        $result = $x + $y; // Sum of $x and $y
        echo $result; // 29
    ?>

    <h3>Subtraction (-)</h3>
    <?php
        echo $x - $y; // 19
        echo "<br>";
        $result = $x - $y; // Difference of $x and $y
        echo $result; // 19
    ?>

    <h3>Multiplication (*)</h3>
    <?php
        echo $x * $y; // 120
        echo "<br>";
        $result = $x * $y; // Product of $x and $y
        echo $result; // 120
    ?>

    <h3>Division (/)</h3>
    <?php
        echo $x / $y; // 4.8
        echo "<br>";
        $result = $x / $y;
        echo $result; // 4.8
    ?>

    <h3>Modules (%)</h3>
    <?php
        echo $x % $y; // 4
        echo "<br>";
        $result = $x % $y;
        echo $result; // 4
    ?>

    <h3>Exponentiation (**)</h3>
    <?php
        $a = 10;
        $b = 3;
        echo $a ** $b; // 1000
        echo "<br>";
        $result = $a ** $b;
        echo $result; // 1000
    ?>

<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>