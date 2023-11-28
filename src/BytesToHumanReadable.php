<?php

namespace Siestacat\BytesToHumanReadable;

/**
 * @package Siestacat\BytesToHumanReadable
 */
class BytesToHumanReadable
{

    const FORMAT = '%s %s';

    const UNITS = 
    [
        ['B', 'KiB', 'MiB', 'GiB', 'TiB', 'PiB'],
        ['B', 'kB', 'MB', 'GB', 'TB', 'PB']
    ];

    public static function convert(int $bytes, bool $si = false, int $precision = 2)
    {
        $units = $si ? self::UNITS[0] : self::UNITS[1];

        $mod = $si ? 1024 : 1000;
    
        $power = ($bytes > 0) ? floor(log($bytes, $mod)) : 0;
    
        return sprintf(self::FORMAT, bcmul($bytes / pow($mod, $power), '1', $precision), $units[$power]);
    }
}