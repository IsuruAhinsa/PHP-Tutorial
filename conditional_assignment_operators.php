<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/fontawesome/css/all.min.css">
    <title>PHP Conditional Assignment Operators</title>
</head>
<body>

    <h4>Ternary ?:</h4>
    <?php
        $x = 23;
        echo $x = $x==23 ? "Polonnaruwa" : "Moratuwa";

        /*if (empty($x)) {
            echo "Polonnaruwa";
        } else {
            echo "Moratuwa";
        }*/
    ?>

    <h4>Null Coalescing ??</h4>
    <?php
        $y = "Ahinsa";
        // if $y is exists, and is not null -> returns $y's value (exp1)
        // if $y is not exists, and is null -> returns exp2
        echo $y = $y ?? "Chamma";
    ?>


<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>