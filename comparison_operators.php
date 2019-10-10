<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/fontawesome/css/all.min.css">
    <title>PHP Comparison Operators</title>
</head>
<body>

    <h3>Equal (==)</h3>
    <?php

        $x = 100;
        $y = 100;

        var_dump($x == $y); // bool(true)

        echo "<br>";

        $x = 100;
        $y = 58;

        var_dump($x == $y); // bool(false)

        echo "<br>";

        if ($x == $y) {
            echo "Equal";
        } else {
            echo "Not Equal";
        }

        echo "<br>";

        var_dump(222 == 322);// bool(false)

        echo "<br>";

        var_dump(222 == "222");// bool(true)

    ?>

    <h3>Identical (===)</h3>
    <?php

        $x = 123;
        $y = 123;

        var_dump($x === $y); // bool(true)

        echo "<br>";

        $x = 123;
        $y = "123";

        var_dump($x === $y); // bool(true)

    ?>

    <h3>Not Equal (<>) / (!=)</h3>
    <?php
        $a = 100;
        $b = 123;
        var_dump($a <> $b); // bool(true)
        echo "<br>";
        var_dump($a != $b); // bool(true)
    ?>

    <h3>Not Identical (!==)</h3>
    <?php

        $var1 = 100;
        $var2 = "100";
        var_dump($var1 !== $var2); // bool(true)

    ?>

    <h3>Greater than (>)</h3>
    <?php

        $x = 10;
        $y = 20;

        var_dump($y > $x); // bool(true)

    ?>

    <h3>Less than (<)</h3>
    <?php

        $x = 10;
        $y = 20;

        var_dump($x < $y); // bool(true)

    ?>

    <h3>Greater than or equal (>=)</h3>
    <?php

        $x = 20;
        $y = 10;

        var_dump($x >= $y); // bool(true)

        echo "<br>";

        $x = 20;
        $y = 20;

        var_dump($x >= $y); // bool(true)

    ?>

    <h3>Less than or equal (<=)</h3>
    <?php

        $x = 10;
        $y = 20;

        var_dump($x <= $y); // bool(true)

        echo "<br>";

        $x = 20;
        $y = 20;

        var_dump($x <= $y); // bool(true)

    ?>

    <h3> Spaceship (<=>) </h3>
    <?php

        $x = 1;
        $y = 2;

        echo ($x <=> $y); // return -1

        echo "<br>";

        $a = 10;
        $b = 10;

        echo ($a <=> $b); // return 0

        echo "<br>";

        $num1 = 2;
        $num2 = 1;

        echo ($num1 <=> $num2); // return +1
    ?>

<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>