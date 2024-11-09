<?php

$largeArray = range(1, 1_000_000);

$startTime = microtime(true);
$startMemory = memory_get_usage();

$out = [];

foreach ($largeArray as $value) {
    $out[] = $value * 2;
}
// Time: 0.019145secons Memory: 18MBs

foreach ($largeArray as &$value) {
    $value = $value * 2;
}
// Time: 0.035205secons, Memory: 31MBs

$endTime = microtime(true);
$endMemory = memory_get_usage();

echo "Time: " . round($endTime - $startTime, 6) . "secons" . "<br/>";
echo "Memory: " . round(($endMemory - $startMemory) / 1024 / 1024) . "MBs" . "<br/>";