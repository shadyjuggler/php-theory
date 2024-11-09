<?php

$set1 = [1,2,3,4,5];
$set2 = [3,4,5,6,7];

$assocArray = [
    'name' => 'Jhon',
    'age' => 30,
    'city' => 'New York'
];

$fruits = ['banana', 'apple', 'orange'];

var_dump(
    array_intersect($set1, $set2),
    array_intersect($set2, $set1),
    array_diff($set1, $set2),
    array_diff($set2, $set1)
);

$keys = array_keys($assocArray);
$values = array_values($assocArray);
var_dump($keys);
var_dump($values);

$example = array_map(fn ($key) => ucfirst($key), array_keys($assocArray));
var_dump($example);

var_dump(
    array_key_exists('name', $assocArray),
    in_array('Jhon', $assocArray)
);

$fruitString = implode(", ", $assocArray);
$backToArray = explode(", ", $fruitString);
var_dump($fruitString, $backToArray);

var_dump(
    array_merge($set1, $set2),
    array_merge($assocArray, ['country' => 'DE']),
    $set1 + $set2, // <= adds only those elements which keys are unique, since indexed array keys are from 0 o ..., the output will be same as set1
    $assocArray + ['country' => 'DE'], // <= since the 'country' key not exist, will be added

    array_unique(array_merge($set1, $set2)),
    array_slice($set1, 1, 3)
);


var_dump(
    array_search('banana', $fruits)
);