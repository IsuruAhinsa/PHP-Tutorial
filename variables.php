<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/fontawesome/css/all.min.css">
    <title>Variables</title>
</head>
<body>

    <?php

        /*
         *  Variable Declaration
         *  $var_name;
         *
         *  Variable Initialization
         *  $var_name = value;
         *
         *  Variable Declaration and Initialization
         *  $var_name2 = value;
         *
         * */

        $x = 5;
        $y = 11.6;
        $txt = "Nishani";

        echo $x;
        echo "<br>";
        echo $y;
        echo "<br>";
        echo $txt;
        echo "<br>";

        /*
         *  1. $
         * 2. $a $_
         * 3. $1 x
         * 4. (A-Z), (a-z), (0-9), (_)
         * 5. Case $txt, $TXT
         * */
        $first_name = "Ahinsa";
        $first_name = "Isuru"; // Change variable value
        echo $first_name;

        echo "<br>";

        $x = 1;
        $x = 2;
        $x = 3;
        $x = 14;

        echo $x;

    ?>


<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>