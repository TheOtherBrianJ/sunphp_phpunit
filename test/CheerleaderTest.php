<?php

namespace SunPHP\Cheer;

use InvalidArgumentException;
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

    /**
     * @expectedException SunPHP\Cheer\LackOfFlexibilityException
     */
    public function testTheSplits()
    {
        $cheerleader = new Cheerleader();
        $cheerleader->doTheSplits();
    }

    public function testGimmeAnInvalidArg()
    {
        $cheerleader = new Cheerleader();
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage(
            'SunPHP\Cheer\Cheerleader::gimmeAn may only '
            . 'accept a single char arg');
        $this->expectExceptionCode(619);
        $cheerleader->gimmeAn("This is not a single character");
    }
}
