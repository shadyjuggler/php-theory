<?php

$simpleArray = [1, 2, 3, 4, 5];
$assocArray = [
    'name' => 'Jhon',
    'age' => 30,
    'city' => 'New York'
];

echo $simpleArray[0] . "\n";
echo $assocArray['name'] . "\n";

$simpleArray[] = 6;
$assocArray['country'] = 'USA';

$matrix = [
    [1, 2, 3],
    [4, 5, 6]
];

echo $matrix[1][1] . "\n";

$fruits = ['banana', 'apple', 'orange'];
var_dump(count($fruits)) . "\n";
sort($fruits);
var_dump($fruits) . "\n";
rsort($fruits);
var_dump($fruits) . "\n";

var_dump($assocArray) . "\n";
asort($assocArray);
var_dump($assocArray) . "\n";


$numbers = range(1, 5);

var_dump($numbers);
$squared = array_map(fn($elem) => $elem ** 2, $numbers);
var_dump($squared);

$evenNumbers = array_filter($numbers, fn($n) => $n % 2 == 0);
var_dump($evenNumbers);

$sum = array_reduce($numbers, fn ($carry, $number) => $carry += $number, 0);
var_dump($sum);

$moreNums = [0, ...$numbers, 6];
var_dump($moreNums);

[$orange, ,$apple] = $fruits;

var_dump($orange, $apple);
