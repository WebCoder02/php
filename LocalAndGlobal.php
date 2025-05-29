<?php
$globalVar = 10;
function test() {
    global $globalVar;
    $localVar = 5;
    echo $globalVar + $localVar;
}
test();
?>
