<?php

namespace Tests;

use App\App;
use App\Name\Name;
use PHPUnit\Framework\TestCase;

class NwqTest extends TestCase
{
    /**
     * @test
     */
    public function testClassConstructor()
    {
        $name1 = new Name(new App('app1'));
        $name2 = new Name(new App('app2'));

        $this->assertEquals($name1, $name2);
    }

}