<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Constant</title>
</head>
<body>
    <h1>PHP Constant</h1>
    <?php

    define("name","Faisal Zamir");
    echo name;
    define("Age",32);
    echo Age;

    function myfun(){
    define("STUDENTS",["ali","faisal","Jafri","Zamir"]);


    }
    myfun();
    echo STUDENTS[0];

    
    ?>

</body>
</html>