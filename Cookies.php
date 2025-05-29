<?php
setcookie("user", "Anuj", time() + 3600); // 1 hour
if (isset($_COOKIE['user'])) {
    echo "Welcome " . $_COOKIE['user'];
}
?>
