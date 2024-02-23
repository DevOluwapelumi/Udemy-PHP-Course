<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Variables</title>
</head>
<body>
    <h1>PHP Varibales</h1>
    <?php
    $name = "Faisal Zamir";
    echo $name;
    echo "<br>";
    $a = 9;
    $b = 10;
    echo $a + $b;
    echo "<br>";
    echo $a - $b;
    echo "<br>";
    echo $a / $b;
    echo "<br>";
    echo $a * $b;
    $age = 10;
    echo "<br>";
    echo $age;

    // function, classes, loops

    function myfunc()
    {
        global $name;
        $course = "PHP";
        echo $course;
        $c = 43;
        echo $name;

    }
    myfunc();
    echo $c;

    ?>

</body>
</html>