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
        return "$message, $name"; // <= functions doesn't inherit parent scope
    };
    $farewell("alex");
}
catch (Exception $e) {
    echo $e;
}

// so for anon functions (closures) there is a way to handle it 
$farewell = function($name) use ($message) { // <= need to specify external entity's values for inner function scope
    $message = $message . "!"; // "Bye!" <= withing the function variable is mutable
    return "$message, $name"; 
};

echo $farewell("alex") . "<br/>";
echo $message . "<br/>"; // "Bye" <= in global scope stayed as was initial

$farewell = function($name) use (&$message) { // <= but if the varibale is passed by reference
    $message = $message . "!"; // <= this would apply changes for the source variable
    return "$message, $name"; 
};

echo $farewell("alex") . "<br/>";
echo $message . "<br/>"; // "Bye!" <= now it's changed




