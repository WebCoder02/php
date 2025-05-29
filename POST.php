<form method="POST">
    <input type="text" name="email">
    <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo $_POST['email'];
}
?>
