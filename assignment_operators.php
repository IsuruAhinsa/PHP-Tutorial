<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/fontawesome/css/all.min.css">
    <title>PHP Assignment Operators</title>
</head>
<body>

    <h3>=</h3>
    <?php
        $x = 24;
        echo $x; // 24
    ?>

    <h3>+=</h3>
    <?php
        $x += 10; // $x = $x + 10;
        echo $x;
        echo "<br>";
        $y = 30;
        $x += $y; // $x = $x + $y
        echo $x; // 64
    ?>

    <h3>-=</h3>
    <?php
        $x -= 10; // $x = $x - 10
        echo $x; // 54
        echo "<br>";
        $y = 30;
        $x -= $y; // $x = $x - $y
        echo $x; // 24
    ?>

    <h3>*=</h3>
    <?php
        $x *= 10; // $x = $x * 10
        echo $x; // 240
        echo "<br>";
        $y = 30;
        $x *= $y; // $x = $x * $y
        echo $x; // 7200
    ?>

    <h3>/=</h3>
    <?php
        $x /= 10; // $x = $x / 10
        echo $x; // 720
        echo "<br>";
        $y = 30;
        $x /= $y; // $x = $x / $y
        echo $x; // 24
    ?>

    <h3>%=</h3>
    <?php
        $x %= 10; // $x = $x % 10
        echo $x; // 4
        echo "<br>";
        $y = 30;
        $x %= $y; // $x = $x % $y
        echo $x; // 4
    ?>

<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>