<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/fontawesome/css/all.min.css">
    <title>PHP Increment / Decrement Operators</title>
</head>
<body>

    <h4>Pre-Increment (++$var) </h4>
    <?php
        $a = 20;
        echo ++$a; // 21 (Increment $a by one, then returns $a)
        echo "<br>";
        echo $a; // 21
    ?>
    <h4>Post-Increment ($var++) </h4>
    <?php
        $b = 20;
        echo $b++; // 20 (Returns $b, then increment $b by one)
        echo "<br>";
        echo $b; // 21
    ?>
    <h4>Pre-Decrement (--$var) </h4>
    <?php
        $c = 20;
        echo --$c; // 19  (Decrement $c by one, then returns $c)
        echo "<br>";
        echo $c; // 19
    ?>
    <h4>Post-Decrement ($var--) </h4>
    <?php
        $d = 20;
        echo $d--; // 20  (Returns $d, then decrement $d by one)
        echo "<br>";
        echo $d; // 19
    ?>

<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>