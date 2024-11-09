<?php

function countDown (int $start): Generator {
    for ($i = $start; $i > 0; $i--) {
        echo "Generating number... " . "<br/>";
        yield random_int(1, 100);
    }
}

foreach (countDown(5) as $number) {
    echo "Echoing number... " . "<br/>";
    echo "The number: " . $number . "<br/>";
}