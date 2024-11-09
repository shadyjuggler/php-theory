<?php

$name = "Alice";
$age = 30;

printf("%s is %d years old.", $name, $age);

echo "<br/>";

echo "<script>alert(document.cookie)</script>";

$csv = "apple,banana,cherry";
$fruits = explode(",", $csv);
print_r($fruits);
echo "<br/>";
print_r(implode(", ", $fruits));