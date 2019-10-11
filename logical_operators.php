<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/fontawesome/css/all.min.css">
    <title>PHP Logical Operators</title>
</head>
<body>

    <h4>And</h4>
    <?php
        $x = 100;
        $y = 50;

        if ($x >= 100 and $y <= 50) {
            echo "Chamma";
        }
    ?>

    <h4>Or</h4>
    <?php
        if ($x == 25 or $y == 50) {
            echo "Disanayaka";
        }
    ?>

    <h4>Xor</h4>
    <?php
        if ($x == 100 xor $y == 65) { // true if either $x or $y is true, but not both
            echo "Ahinsa";
        }
    ?>

    <h4>&&</h4>
    <?php
        if ($x == 100 && $y == 50) {
            echo "Ahinsa";
        }
    ?>

    <h4>||</h4>
    <?php
        if ($x == 25 || $y == 50) {
            echo "Ahinsa";
        }
    ?>

    <h4>! (Not)</h4>
    <?php
        if ($x !== 50) {
            echo "Ahinsa";
        }
    ?>

<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>