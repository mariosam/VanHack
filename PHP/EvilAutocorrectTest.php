<?php
/**
 * @version PHP
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit NomeDaClasseTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("EvilAutocorrect.php");

class EvilAutocorrectTest extends TestCase {

    public function testEvilAutocorrect() {
        $obj = new EvilAutocorrect();
        //Test 1
        $want = "We have sent the deliverables to your client.";
        $got = $obj->autocorrect( "We have sent the deliverables to you." );
        $this->assertEquals($want, $got);
        //Test 2
        $want = "Our team is excited to finish this with your client.";
        $got = $obj->autocorrect("Our team is excited to finish this with you.");
        $this->assertEquals($want, $got);
        //Test 3
        $want = "youtube";
        $got = $obj->autocorrect("youtube");
        $this->assertEquals($want, $got);
        //Test 4
        $want = "I love your client!";
        $got = $obj->autocorrect("I love youuuuu!");
        $this->assertEquals($want, $got);
        //Test 5
        $want = "Me and your client forever";
        $got = $obj->autocorrect("Me and youu forever");
        $this->assertEquals($want, $got);
        //Test 6
        $want = "your client can do it!";
        $got = $obj->autocorrect("You can do it!");
		$this->assertEquals($want, $got);
    }

}
