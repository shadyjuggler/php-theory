<?php

enum DaysOfweek {
    case MONDAY;
    case TUESDAY;
    case WEDNESDAY;
    case THURSDAY;
    case FRIDAY;
    case SATURDAY;
    case SUNDAY;
}

$today = DaysOfweek::SUNDAY;

if ($today === DaysOfWeek::SUNDAY) {
    echo "It is Sunday!\n";
}

if ("SUNDAY" === DaysOfWeek::WEDNESDAY) {
    echo "It is Wed!\n";
} else {
    echo "not the same type:)\n";
}

enum Color: string {
    case RED = "#FF0000";
    case GREEN = "#00FF00";
    case BLUE = "#0000FF";
}

echo Color::RED->value . "\n";

function isWeekend(DaysOfweek $day): bool {
    return $day === DaysOfweek::SATURDAY || $day === DaysOfweek::SUNDAY;
}

echo isWeekend(DaysOfweek::SUNDAY);