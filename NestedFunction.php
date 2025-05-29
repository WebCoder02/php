<?php
function outer() {
    function inner() {
        echo "Hello from Inner Function<br>";
    }
    inner();
}
outer();
?>
