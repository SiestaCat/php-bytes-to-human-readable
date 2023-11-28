<?php

namespace Siestacat\BytesToHumanReadable\Tests;
use PHPUnit\Framework\TestCase;
use Siestacat\BytesToHumanReadable\BytesToHumanReadable;

class BytesToHumanReadableTest extends TestCase
{

    //Left expected, right func arguments
    const TEST_TABLE = 
    [
        //B
        ['129 B', [129, false, 0]],
        
        //KB
        ['1.10 kB', [1104]],
        ['65.6 KiB', [67229, true, 1]]
    ];

    public function test():void
    {

        foreach(self::TEST_TABLE as $test_case)
        {
            list($expected, $args) = $test_case;
            $this->assertEquals($expected, call_user_func_array(BytesToHumanReadable::class . '::convert', $args));
        }
    }
}