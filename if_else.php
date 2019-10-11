<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/fontawesome/css/all.min.css">
    <title>PHP Conditional Structure</title>
</head>
<body>

    <h4>If Statement</h4>
    <?php

        /*
         *  if (condition) {
         *     code to be executed(run) if condition is true;
         *  }
         *
         */

        $a = 10;

        if ($a > 5) {
            echo "a is greater than 5";
        }

    ?>

    <h4>If Else Statement</h4>
    <?php

    /*
     *  if (condition) {
     *     code to be executed(run) if condition is true;
     *  } else {
     *     code to be executed(run) if condition is false;
     *  }
     *
     */

    $a = 3;

    if ($a > 5) {
        echo "a is greater than 5";
    } else {
        echo "a is not greater than 5";
    }

    ?>

    <h4>If Elseif Else Statement</h4>
    <?php

    /*
     *  if (condition) {
     *     code to be executed(run) if condition is true;
     *  } elseif (condition) {
     *     code to be executed(run) first condition is false and this condition is true;
     *  } elseif (condition) {
     *     code to be executed(run) first & second conditions are false and this condition is true;
     *  } else {
     *     code to be executed(run) if all conditions are false;
     *  }
     *
     */

    $a = "Chamma";

    if ($a == 1) {
        echo "Value of a is one";
    } elseif ($a == 2) {
        echo "Value of a is two";
    } elseif ($a == 3) {
        echo "Value of a is three";
    } elseif ($a == 4) {
        echo "Value of a is four";
    } else {
        echo "Value of a is another number";
    }

    ?>

<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>