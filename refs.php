<?php

$person = "John";
$client = &$person;

echo var_dump($person, $client) . "<br/>";

$client = "Robert";

echo var_dump($person, $client) . "<br/>";

$person = "Harry";

echo var_dump($person, $client) . "<br/>";