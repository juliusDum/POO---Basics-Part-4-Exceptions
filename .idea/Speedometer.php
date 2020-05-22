<?php

class Speedometer
{
    const convert = 0.62137;

    public static function convertKmToMiles(int $parameter)
    {
        return round($parameter * self::convert, 2);
    }

    public static function convertMilesToKm(int $parameter)
    {
        return round($parameter / self::convert);
    }
}
echo Speedometer::convertKmToMiles(10);