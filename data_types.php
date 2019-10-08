<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/fontawesome/css/all.min.css">
    <title>Data Types</title>
</head>
<body>

    <h1>PHP Data Types</h1>

    <p>String</p>
    <p>Integer</p>
    <p>Float(Double)</p>
    <p>Boolean</p>
    <p>Array</p>
    <p>Object</p>
    <p>NULL</p>
    <p>Resource</p>

    <?php

        $x = "Hello World!";
        $y = 'Hello World!';

        echo $x;
        echo "<br>";
        echo $y;
        echo "<br>";
        var_dump($x);

    ?>

    <hr>

    <?php

        // Integer -2 147 483 648 to 2 147 483 647

        $num = 8765;
        var_dump($num);

    ?>

    <hr>

    <?php

        $num2 =  10.656;
        var_dump($num2);

    ?>

    <hr>

    <?php

        $x = true;
        $y = false;

        var_dump($x);

    ?>

    <hr>

    <?php

        $phones = array("LG", "Nokia", "Samsung", "Huawie");
        var_dump($phones);

    ?>

    <hr>

    <?php

        class University {
            function University() {
                $this->name = "UOM";
            }
        }

        // create an object
        $obj = new University();

        echo $obj->name; // UOM

    ?>

    <hr>

    <?php

        $x = "Sri Lanka";
        $x = null;
        var_dump($x);

    ?>



<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>