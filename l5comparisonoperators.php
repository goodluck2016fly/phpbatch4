<?php

//=> Comparison Operators

// ==
// ===
// !=	not equal
// <>	not equal
// !==
// >
// <
// >=
// <=
// ? (Ternary Operator)

// Ternary Operator
// echo (stm1 stm2) ? true : false;

// $num1 = 10;
// $num2 = "10";

$num1 = 10;
$num2 = 20;

echo $num1 == $num2 ? "your condition is true" : "your condition is false"; //false
echo ($num1 == $num2) ? "your condition is true" : "your condition is false"; //false
echo ($num1 === $num2) ? "your condition is true" : "your condition is false"; //false

echo ($num1 != $num2) ? "your condition is true" : "your condition is false"; //true
echo ($num1 <> $num2) ? "your condition is true" : "your condition is false"; //true


echo ($num1 !== $num2) ? "your condition is true" : "your condition is false"; //true



echo ($num1 > $num2) ? "your condition is true" : "your condition is false";
echo ($num1 < $num2) ? "your condition is true" : "your condition is false";
echo ($num1 >= $num2) ? "your condition is true" : "your condition is false";
echo ($num1 <= $num2) ? "your condition is true" : "your condition is false";




?>