<?php
/**
 * @version PHP
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit NomeDaClasseTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("Routes.php");

class RoutesTest extends TestCase {

    public function testRoutes() {
        $obj = new Routes();
        //Test 1
        $want = "MNL, TAG, CEB, TAC, BOR";
        $got = $obj->find_routes( [["MNL", "TAG"], ["CEB", "TAC"], ["TAG", "CEB"], ["TAC", "BOR"]] );
        $this->assertEquals($want, $got);
        //Test 2
        $want = "Halifax, Montreal, Toronto, Chicago, Winnipeg, Seattle";
        $got = $obj->find_routes( [["Chicago", "Winnipeg"], ["Halifax", "Montreal"], ["Montreal", "Toronto"], ["Toronto", "Chicago"], ["Winnipeg", "Seattle"]] );
        $this->assertEquals($want, $got);
    }
}
