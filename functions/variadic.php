<?php

declare(strict_types=1);

function sum(int ...$numbers): int
{
    $sum = 0;
    foreach ($numbers as $num) {
        $sum += $num;
    }
    return $sum;
}

echo sum(2, 5, 6, 0, 2, 3);

$numbers = [1, 2, 3, 4, 5];
echo sum(...$numbers);

echo "<br/>";

function introduceTeam(string $teamName, string ...$members): void
{
    echo "Team: $teamName <br/>";
    echo "Members: " . implode(", ", $members);
}

introduceTeam("Chicago Bulls", "Michael Jordan", "Dennis Rodman", "Scottie Pippen");
