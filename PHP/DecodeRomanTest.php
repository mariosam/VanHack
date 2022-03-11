<?php
/**
 * @version PHP
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit NomeDaClasseTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("DecodeRoman.php");

class DecodeRomanTest extends TestCase {

    public function testDecodeRoman() {
        $obj = new DecodeRoman();
        //Test 1
        $want = 1;
        $got = $obj->Decode( "I" );
        $this->assertEquals($want, $got);
        //Test 2
        $want = 21;
        $got = $obj->Decode( "XXI" );
        $this->assertEquals($want, $got);
        //Test 3
        $want = 4;
        $got = $obj->Decode( "IV" );
        $this->assertEquals($want, $got);
        //Test 4
        $want = 1666;
        $got = $obj->Decode( "MDCLXVI" );
        $this->assertEquals($want, $got);
        //Test 5
        $want = 2008;
        $got = $obj->Decode( "MMVIII" );
        $this->assertEquals($want, $got);
    }

}
