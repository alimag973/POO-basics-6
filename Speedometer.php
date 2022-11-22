<?php


class Speedometer
{
    public static function convertKmToMile(float $km):float{
        return round(($km * 0.621371), 2);
    }

    public static function convertMileToKm(float $mile):float{
        return round(($mile * 1.60934), 2);
    }
}