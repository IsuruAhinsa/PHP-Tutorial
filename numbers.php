<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/fontawesome/css/all.min.css">
    <title>PHP Numbers</title>
</head>
<body>

    <h3>PHP Integer</h3>
    <?php
        $x = 3648346;
        echo is_int($x); // bool 1 = true, 0 = false
        echo "<br>";
        var_dump(is_int($x));
        echo "<br>";
        echo is_integer($x);
        echo "<br>";
        var_dump(is_integer($x));
        echo "<br>";
        echo is_long($x);
        echo "<br>";
        var_dump(is_long($x));
    ?>

    <h3>PHP Infinity</h3>
    <?php
        $var = 1.9e411;
        var_dump($var);
        echo "<br>";
        echo is_infinite($var);
        echo "<br>";
        var_dump(is_infinite($var));
    ?>

    <h3>PHP Finite</h3>
    <?php
        $var = 3;
        var_dump($var);
        echo "<br>";
        echo is_finite($var);
        echo "<br>";
        var_dump(is_finite($var));
    ?>

    <h3>PHP NaN(Not a Number)</h3>
    <?php
        $num = acos(8);
        var_dump($num);
        echo "<br>";
        echo is_nan($num); // 1
        echo "<br>";
        var_dump(is_nan($num)); // true
    ?>

    <h3>PHP Numerical Strings</h3>
    <?php
        $num1 = 7890;
        echo is_numeric($num1);
        echo "<br>";
        var_dump(is_numeric($num1));

        echo "<br>";

        $num2 = "Chamma";
        echo is_numeric($num2); // 0
        echo "<br>";
        var_dump(is_numeric($num2)); // false

        echo "<br>";

        $num3 = "267327327";
        echo is_numeric($num3); // 1
        echo "<br>";
        var_dump(is_numeric($num3)); // true

        echo "<br>";

        $num4 = "267327327.667";
        echo is_numeric($num4); // 1
        echo "<br>";
        var_dump(is_numeric($num4)); // true

        echo "<br>";

        $num5 = "55.11" + 100;
        echo "<br>";
        echo $num5; // 155.11
        echo is_numeric($num5); // 1
        echo "<br>";
        var_dump(is_numeric($num5)); // true
    ?>

    <h1>PHP Casting</h1>

    <?php
        // cast float to int
        $var = 65896.98;
        $int_cast = (int)$var;
        echo $int_cast; // 65896

        echo "<br>";

        // cast string to int
        $var = "65896.98";
        $int_cast = (int)$var;
        echo $int_cast; // 65896

    ?>

<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>