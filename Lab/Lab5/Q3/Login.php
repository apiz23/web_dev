<?php
    $cookie_name = "user";
    $cookie_value = "Hafizuddin_Fariez";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
    session_start();
?>
<html>
<body>
    <?php
        $_SESSION["user"] = $cookie_value;
    ?>
</body>
</html>


