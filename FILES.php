<form method="POST" enctype="multipart/form-data">
    <input type="file" name="upload">
    <input type="submit">
</form>

<?php
if ($_FILES) {
    move_uploaded_file($_FILES['upload']['tmp_name'], "uploads/" . $_FILES['upload']['name']);
    echo "File uploaded!";
}
?>
