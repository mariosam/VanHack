<?php
/**
 * @version PHP
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit NomeDaClasseTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("MorseCode.php");

class MorseCodeTest extends TestCase {

    public function testMorseCode() {
        $obj = new MorseCode();
        //Test 1
        $want = ["E"];
        $got = $obj->possibilities( "." );
        $this->assertEquals($want, $got);
        //Test 2
        $want = ["A"];
        $got = $obj->possibilities( ".-" );
        $this->assertEquals($want, $got);
        //Test 3
        $want = ["E","T"];
        $got = $obj->possibilities( "?" );
        $this->assertEquals($want, $got);
        //Test 4
        $want = ["I","N"];
        $got = $obj->possibilities( "?." );
        $this->assertEquals($want, $got);
        //Test 5
        $want = ["I","A"];
        $got = $obj->possibilities( ".?" );
        $this->assertEquals($want, $got);
    }

}
