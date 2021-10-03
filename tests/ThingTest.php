<?php
declare(strict_types=1);


use PHPUnit\Framework\TestCase;

class ThingTest extends TestCase
{

    public function testXXX()
    {
        $thing = new Thing();

        $a = $thing->doSomething(false);

        $this->assertEquals('B', $a);
    }
}
