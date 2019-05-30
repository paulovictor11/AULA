<!DOCTYPE html>
<html>
<body>
<?php
    $txt = "hello world";

    echo strlen($txt);
    echo "<br>";
    echo str_word_count($txt);
    echo "<br>";
    echo strrev($txt);
    echo "<br>";
    echo strpos($txt, "world");
    echo "<br>";
    echo str_replace("world", "dolly", $txt);
?>
</body>
</html>
