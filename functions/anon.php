<?php

$greet = function ($name) {
    return "Hello, $name";
};

echo $greet("alex");



echo "<br/>";


$numbers = [1, 2, 3, 4, 5];
$squared = array_map(function ($n) {
    return $n * $n;
}, $numbers);

print_r($squared);



echo "<br/>";


$message = "Bye";

try {
    $farewell = function($name) {
        return "$message, $name"; // <= function doesn't inherit parent scope
    };
    $farewell("alex");
}
catch (Exception $e) {
    echo $e;
}

$farewell = function($name) use ($message) { // <= need to specify external entities for inner function scope
    $message = $message . "!"; // "Bye!" <= withing the function variable is mutable
    return "$message, $name"; 
};

echo $farewell("alex") . "<br/>";
echo $message . "<br/>"; // "Bye" <= in global scope is the same

$farewell = function($name) use (&$message) { // <= but if the varibale is passed by reference
    $message = $message . "!"; // <= this would apply changes for the source varible
    return "$message, $name"; 
};

echo $farewell("alex") . "<br/>";
echo $message . "<br/>"; // "Bye" <= in global scope is the same



