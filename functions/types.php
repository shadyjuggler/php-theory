<?php

declare(strict_types=1);

function add(int | float $a, int $b): int
{
    return (int)$a + (int)$b;
}

echo add(1.0, 2);
