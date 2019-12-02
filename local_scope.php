<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/fontawesome/css/all.min.css">
    <title>PHP Local Scope</title>
</head>
<body>

    <?php

        $x = 10; // global
        $x = 20; // global
        $x = 30; // global
        $x = 40; // global
        $x = 50; // global

        echo $x; // 50
        echo "<br>";

        function a () {
            $x = 10; // local
            echo $x;
        }

        function b () {
            $x = 20; // local
            echo $x;
        }

        function c () {
            $x = 30; // local
            $x = 70; // local
            $x = 780; // local
            echo $x;
        }

        function d () {
            $x = 40; // local
            echo $x;
        }

        function e () {
            $x = 50; // local
            echo $x;
        }

        a();
        echo "<br>";
        b();
        echo "<br>";
        c();
        echo "<br>";
        d();
        echo "<br>";
        e();

    ?>

<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>