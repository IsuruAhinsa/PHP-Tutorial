<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/fontawesome/css/all.min.css">
    <title>echo and print</title>
</head>
<body>
    <h1 class="text-success">Heading 1</h1>
    <?php

        echo 1;
        echo "<br>";
        echo (2);
        echo "<br>";
        echo "<h1 class='text-primary'>Heading 1</h1>";
        echo "<br>";
        echo "Hello World!<br>";
        echo "I'm a Student.<br>";
        echo "This ", "string ", "was ", "made ", "with multiple ", "parameters.";

    ?>

    <hr>

    <?php

        print 1;
        print "<br>";
        print (123);
        print "<h1 class='text-primary'>Heading 1</h1>";
        print "Hello World!<br>";
        print "I'm a Student.<br>";
        // print "Hello ", "World"; # Parse error: syntax error, unexpected ','

    ?>



<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>