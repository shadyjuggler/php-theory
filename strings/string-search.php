<?php

$haystack = "the quick brown fox";

$pos = strpos($haystack, "quick");
echo var_dump($pos) . "<br/>";

echo str_replace("quick", "lazy", $haystack) . "<br/>";

echo preg_match_all("/\w{5}/", $haystack, $matches);