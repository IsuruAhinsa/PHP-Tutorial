<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/fontawesome/css/all.min.css">
    <title>String Functions</title>
</head>
<body>

<?php

    $var1 = "I am a boy.";
    $var2 = "we completed first step in our programming language.";

?>

<?php echo strtoupper($var1); ?>
<br>
<?php echo strtolower($var1) ?>
<br>
<?php echo ucfirst($var2); ?>
<br>
<?php echo ucwords($var2); ?>
<br>
<?php echo strlen($var2); ?>
<br>
<?php echo str_word_count($var1); ?>
<br>
<?php echo strrev($var1);?>
<br>
<?php echo strpos($var1, "boy");?>
<br>
<?php echo str_replace("World", "Chamathaka", "Hello World!")?>
<br>
<?php echo str_replace("boy", "girl", $var1)?>
<br>
<!-- Returns a string with backslashes in front of the specified character -->
<?php echo addcslashes("Hello World", "o")?>
<br>
<?php echo addcslashes($var1, "b")?>
<br>
<?php echo addcslashes($var1, "a..z")?>
<br>
<?php echo addcslashes($var1, "A..Z")?>
<br>
<?php echo addcslashes($var2, "a..g")?>
<br>
<!-- Returns a string with backslashes in front of the predefined character
    PREDEFINED CHARACTERS
    1. Single Quote '
    2. Double Quote "
    3. Backslash \
    4. NULL
 -->
<?php echo addslashes("I'm a boy.")?>
<br>
<?php echo addslashes('Returns a string with "backslashes" in front of the predefined character')?>
<br>
<!-- Converts a string of ASCII characters to Hexadecimal values -->
<?php echo bin2hex("Hello World")?>
<br>
<!-- Removes whitespace or other characters from the right end of a string -->
<?php echo chop("Hello World", "rld")?>
<br>
<!-- Returns a character from a specified ASCII value -->
<?php echo chr(66) ?>
<br>
<!-- Encodes a string-->
<?php echo convert_uuencode('Hello Ahinsa')?>
<br>
<!-- Decodes a encoded string-->
<?php
echo convert_uudecode(",2&5L;&\@06AI;G-A ` ")?>
<!-- Splits a string into series of smaller parts -->
<br>
<?php echo chunk_split("Hello World", 3, ".") ?>
<!-- Breaks a string into an array -->
<br>
<?php
    $arr = explode(" ", "Hello World");
    var_dump($arr);
    echo "<br>";
    print_r($arr);
    echo "<br>";
    echo $arr[1]; // World
?>
<!-- Returns a string from the elements of an array -->
<br>
<?php
    $my_arr = array('I', 'am', 'a', 'boy');
    echo implode(" ", $my_arr);
    echo "<br>";
    var_dump(implode(" ", $my_arr));
?>
<!-- Converts the first characters of a string to lowercase -->
<br>
<?php
    echo lcfirst("Hello Chamathka");
?>
<!-- Calculates the MD5 hash of a string -->
<br>
<?php echo md5("Hello World"); ?>
<!-- Formats a number with grouped thousands -->
<br>
<?php
    echo 123567;
    echo "<br>";
    echo number_format(123567);
    echo "<br>";
    echo "Rs " . number_format(123567, 2);
    echo "<br>";
    echo number_format(123567, 3, "-", "|");
?>
<!-- Parses a query string into variables -->
<br>
<?php
    $name = null;
    $age = null;
    $gender = null;
    parse_str("name=Chamathka&age=65&gender=Female");
    echo $name;
    echo "<br>";
    echo $age;
    echo "<br>";
    echo $gender;
    echo "<br>";
    parse_str("name=Nishani&age=5&gender=Female", $user);
    print_r($user);
?>
<!-- Calculates the SHA-1 hash of a string -->
<br>
<?php
    echo sha1("Hello World");
?>
<!-- Repeats a string a specified number of times -->
<br>
<?php
    echo str_repeat("Chamma", 10);
?>
<!-- Randomly shuffles all characters in a string -->
<br>
<?php
    echo str_shuffle("Chamathka Disanayaka");
?>
<!-- Splits a string into an array -->
<br>
<?php
    $my_name = str_split("Chamathka");
    print_r($my_name);
    echo "<br>";
    $my_name = str_split("Chamathka", 3);
    print_r($my_name);
?>
<!-- Finds the first occurrence of a string inside another string (case-insensitive) -->
<br>
<?php

    echo stristr("Hello world", "WORLD");

?>
<!-- Finds the first occurrence of a string inside another string (case-sensitive) -->
<br>
<?php
    echo strstr("Hello world", "world");
?>
<!-- Removes whitespace or other characters from both sides of a string -->
<br>
<?php
    echo trim($var2, "uage.");
?>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>