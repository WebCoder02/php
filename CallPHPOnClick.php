<form method="POST">
    <input type="submit" name="click" value="Click Me">
</form>

<?php
function greet() {
    echo "Hello from PHP!";
}

if (isset($_POST['click'])) {
    greet();
}
?>
