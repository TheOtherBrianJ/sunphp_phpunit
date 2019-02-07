<?php

namespace SunPHP\Cheer;

use PHPUnit\Framework\TestCase;

class CheerleaderTest extends TestCase
{
    public function testGimmeAnG()
    {
        $cheerleader = new Cheerleader();
        $this->assertThat($cheerleader->gimmeAn('G'),
            $this->equalTo('G'));
    }

    /**
     * @test
     */
    public function gimmeAnO()
    {
        $cheerleader = new Cheerleader();
        $this->assertThat($cheerleader->gimmeAn('O'),
            $this->equalTo('O'));
    }

    /**
     * @test
     */
    public function testWhatsThatSpell()
    {
        $cheerleader = new Cheerleader();
        $cheerleader->gimmeAn('G');
        $cheerleader->gimmeAn('O');
        $this->assertThat($cheerleader->whatsThatSpell(),
            $this->equalTo('GO!'));
    }
}
