<!DOCTYPE html>
<html>
<body>
<?php
    $cars = ["Volvo", "BMW", "Toyota"];
    echo "I like $cars[0], $cars[1] and $cars[2]";
    echo "<br>";
    echo count($cars);

    echo "<br><br>";

    $age = [
        "Peter" => "35",
        "Ben" => "37",
        "Joe" => "43"
    ];

    foreach ($age as $key => $value)
    {
        echo "KEY = $key, VALUE = $value";
        echo "<br>";
    }
?>
</body>
</html>
