<?php

$str = "Hello, World!";

echo $str[0] . "<br/>";
echo $str[-1] . "<br/>";

echo substr($str, 1, 3) . "<br/>";
echo substr($str, 5) . "<br/>";
echo substr($str, -4) . "<br/>";

echo strtoupper($str) . "<br/>";
echo strtolower($str) . "<br/>";
echo ucfirst(strtolower($str)) . "<br/>";

$greeting = "Hello, " . "World!";
$greeting .= " How are you";
echo $greeting . "<br/>";