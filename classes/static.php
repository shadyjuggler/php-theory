<?php


class MathUtils
{
    public static float $pi = 3.14;

    public static function square(float $num): float
    {
        return $num * $num;
    }
}

var_dump(
    MathUtils::$pi,
    MathUtils::square(4)
);

// Expensive resources - singleton pattern

class Connection
{
    private static $instance = null;

    private function __construct() {}

    public static function singleton()
    {
        if (static::$instance === null) {
            return new static();
        }
        return static::$instance;
    }
}

$connection = Connection::singleton();