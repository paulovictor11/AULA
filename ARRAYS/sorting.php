<!DOCTYPE html>
<html>
<body>
<?php
    $numbers = [4, 6, 2, 22, 11];
    $cars = ["Volvo", "BMW", "Toyota"];
    $age = [
        "Peter" => "35",
        "Ben" => "37",
        "Joe" => "43"
    ];

    sort($numbers);
    rsort($cars);
    asort($age);
    ksort($cars)
?>
</body>
</html>
