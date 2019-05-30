<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php
    define("Music", "Welcome to the jungle", true);
    echo music;

    echo "<br>";

    define("Cars", [
        "Volvo",
        "BMW",
        "Toyota"
    ]);

    echo Cars[0];

    echo "<br>";

    function myTest()
    {
        echo music;
    }

    myTest();
?>
</body>
</html>
