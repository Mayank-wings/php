<?php
session_start();
?>
<!DOCTYPE html>
<html>

<body>

    <?php
    // to change a session variable, just overwrite it
    $_SESSION["fav"] = "yellow";
    $_SESSION["favcolor"] = "green";
    $_SESSION["favanimal"] = "cat";
    print_r($_SESSION["fav"]);
    ?>

</body>

</html>