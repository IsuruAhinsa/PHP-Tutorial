<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/fontawesome/css/all.min.css">
    <title>Math Functions</title>
</head>
<body>

    <p>Returns the absolute (positive) value of a number</p>
    <?php

        echo abs(10);
        echo "<br>";
        echo abs(-10);
        echo "<br>";
        echo abs(65.3);
        echo "<br>";
        echo abs(-65.3);

    ?>
    <p>Converts a number from one number base to another</p>
    <?php
        $hex = "E196";
        echo base_convert($hex, 16, 8);
        echo "<br>";
        $oct = "0031";
        echo base_convert($oct, 8, 10);
    ?>
    <p>Converts a binary number to a decimal number</p>
    <?php
        echo bindec("0011");
        echo "<br>";
        echo bindec("11000110011");
    ?>
    <p>Rounds a number up to the nearest integer</p>
    <?php
        echo ceil(5.1);
        echo "<br>";
        echo ceil(0.60); // 1
        echo "<br>";
        echo ceil(-5.9); // -5
        echo "<br>";
        echo ceil(-5.1); // -5
    ?>
    <p>Converts a decimal number to a binary number</p>
    <?php
        echo decbin("3");
        echo "<br>";
        echo decbin("1587"); // 11000110011
    ?>
    <p>Converts a decimal number to a hexadecimal number</p>
    <?php
        echo dechex("75");
    ?>
    <p>Converts a decimal number to an octal number</p>
    <?php
        echo decoct("75");
    ?>
    <p>Calculates the exponent of e</p>
    <?php
        echo exp(0); // 1
        echo "<br>";
        echo exp(1);
    ?>
    <p>Rounds a number down to the nearest integer</p>
    <?php
        echo floor(5.1); // 5
        echo "<br>";
        echo floor(0.60); // 0
        echo "<br>";
        echo floor(-5.9); // -6
        echo "<br>";
        echo floor(-5.1); // -6
    ?>
    <p>Returns the remainder of x/y</p>
    <?php
        echo fmod(7, 2); // 1
    ?>
    <p>Generates a random integer</p>
    <?php
        echo rand();
        echo "<br>";
        echo rand(10, 150);
    ?>
    <p>Returns the largest possible value returned by rand()</p>
    <?php
        echo getrandmax();
    ?>
    <p>Converts a hexadecimal number to a decimal number</p>
    <?php
        echo hexdec("4b");
    ?>
    <p>Performs integer division</p>
    <?php
        echo intdiv(8, 4); // 2
        echo "<br>";
        echo intdiv(5, 2); // 2
    ?>
    <p>Checks whether a value is finite or not</p>
    <?php //is_finite(); ?>
    <p>Checks whether a value is infinite or not</p>
    <?php //is_infinite(); ?>
    <p>Checks whether a value is 'not-a-number'</p>
    <?php //is_nan(); ?>
    <p>Returns a pseudo random number in a range between 0 and 1</p>
    <?php
        echo lcg_value();
    ?>
    <p>Returns the natural logarithm of a number</p>
    <?php
        echo log(1); // 0
    ?>
    <p>Returns the highest value in an array, or the highest value of several specified values</p>
    <?php
        echo max(2, 4, 5, 6, 78, 34); // 78
        echo "<br>";
        echo max(array(44,75,58,665,87)); // 665
    ?>
    <p>Returns the lowest value in an array, or the lowest value of several specified values</p>
    <?php
        echo min(2, 4, 5, 6, 78, 34); // 2
        echo "<br>";
        echo min(array(44,75,58,665,87)); // 44
    ?>
    <p>Converts an octal number to a decimal number</p>
    <?php
        echo octdec("12");
    ?>
    <p>Returns the value of PI</p>
    <?php
        echo pi();
    ?>
    <p>Returns x raised to the power of y</p>
    <?php
        echo pow(5, 2); // 25
        echo "<br>";
        echo pow(-2, -3.2); // NaN
    ?>
    <p>Rounds a floating-point number</p>
    <?php
        echo round(0.49); // 1
        echo "<br>";
        echo round(-4.60); // -5
    ?>
    <p>Returns the square root of a number</p>
    <?php
        echo sqrt(9); // 3
    ?>

<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>