<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/fontawesome/css/all.min.css">
    <title>PHP Constants</title>
</head>
<body>

<?php

    // create a constants define(name, value, case-insensitive (default is false))
    // define("CHAMMA", "Chamma is a big bird");
    // * The value can't be changed during the script.
    // echo CHAMMA; // case sensitive

    define("CHAMMA", "Chamma is a big bird", true);
    echo chamma; // case insensitive

?>

    <h2>Constant Array</h2>

<?php

    define("girls", ["chamathka", "nishani", "heshani", "sirimala", "yasho", "biso", "narmada", "siriyawathi"]);

    print_r(girls);

?>

    <h2>Constants are Global</h2>

    <?php

        define("MIURI", "I am a girl");
        echo MIURI . " - Outside Function";
        // create a function
        function myFunc() {
            echo MIURI . " - Inside Function";
        }

        echo "<br>";

        // call the function
        myFunc();

    ?>

    <h3>Variables</h3>

    <?php

        $x = 10;
        echo $x . " - Outside Function";

        // create the function
        function test() {
            echo $x;
        }

        // call the function
        test();
    ?>



<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>