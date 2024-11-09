<?php

function greet(string $name, string $message, bool $long): string {
    $output = "$message $name";
    return $long ? $output . " and have nice day!" : $output;
}

echo greet(name: "Bob", message: "Good moring", long: true);


