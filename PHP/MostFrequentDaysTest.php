<?php
/**
 * @version PHP
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit NomeDaClasseTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("MostFrequentDays.php");

class MostFrequentDaysTest extends TestCase {

    public function testMostFrequentDays() {
        $obj = new MostFrequentDays();
        //Test 1
        $want = ["Friday"];
        $got = $obj->mostFrequentDays( 2427 );
        $this->assertEquals($want, $got);
        //Test 2
        $want = ["Saturday"];
        $got = $obj->mostFrequentDays( 2185 );
        $this->assertEquals($want, $got);
        //Test 3
        $want = ["Tuesday", "Wednesday"];
        $got = $obj->mostFrequentDays( 1084 );
        $this->assertEquals($want, $got);
        //Test 4
        $want = ["Sunday"];
        $got = $obj->mostFrequentDays( 1167 );
        $this->assertEquals($want, $got);
        //Test 5
        $want = ["Friday", "Saturday"];
        $got = $obj->mostFrequentDays( 1216 );
        $this->assertEquals($want, $got);
        //Test 6
        $want = ["Friday", "Saturday"];
        $got = $obj->mostFrequentDays( 1492 );
        $this->assertEquals($want, $got);
        //Test 7
        $want = ["Monday"];
        $got = $obj->mostFrequentDays( 1770 );
        $this->assertEquals($want, $got);
        //Test 8
        $want = ["Saturday"];
        $got = $obj->mostFrequentDays( 1785 );
        $this->assertEquals($want, $got);
        //Test 9
        $want = ["Wednesday", "Thursday"];
        $got = $obj->mostFrequentDays( 212 );
        $this->assertEquals($want, $got);
    }

}
