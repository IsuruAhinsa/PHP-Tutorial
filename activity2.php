<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/fontawesome/css/all.min.css">
    <title>Activity 02</title>
</head>
<body>

    <?php

        $num = 1;

        switch ($num) {
            case 1:
                echo "You entered number is 1";
                break;
            case 2:
                echo "You entered number is 2";
                break;
            case 3:
                echo "You entered number is 3";
                break;
            default:
                echo "You entered something else";

        }

    ?>

<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>