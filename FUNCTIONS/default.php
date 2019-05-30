<!DOCTYPE html>
<html>
<body>
<?php
    function setHeight(int $minHeight = 50)
    {
        echo "The height is : $minHeight <br>";
    }

    setHeight(350);
    setHeight();
    setHeight(135);
    setHeight(80);
?>
</body>
</html>
