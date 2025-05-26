<?php
$a = 10;
$b = 5;

echo "a is : $a<br/>";
echo "b is : $b<br/>";

$sum = $a + $b;
$difference = $a - $b;
$product = $a * $b;
$quotient = $a / $b;
$modulus = $a % $b;

echo "Sum: $sum<br/>";
echo "Difference: $difference<br/>";
echo "Product: $product<br/>";
echo "Quotient: $quotient<br/>";
echo "Modulus: $modulus<br/>";

$isEqual = ($a == $b);
$isGreater = ($a > $b);
$isSmaller = ($a < $b);
$isNotEqual = ($a != $b);

echo var_dump($isEqual);
echo "<br/>";
echo var_dump($isGreater);
echo "<br/>";
echo var_dump($isSmaller);
echo "<br/>";
echo var_dump($isNotEqual);

?>
