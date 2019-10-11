<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/fontawesome/css/all.min.css">
    <title>Activity 01</title>
</head>
<body>

    <?php
        $number = 11;
        $remainder = fmod($number, 2);
        // $remainder = $number % 2;
        if ($number == 0) {
            echo "You entered 0";
        } elseif ($remainder == 1) {
            echo "You entered number is odd";
        } else {
            echo "You entered number is even";
        }
    ?>

<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>