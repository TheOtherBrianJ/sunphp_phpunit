<?php

namespace SunPHP\Cheer;

class Cheerleader
{
    private $word = '';

    public function gimmeAn($letter)
    {
        $this->word .= $letter;
        return $letter;
    }

    public function whatsThatSpell()
    {
        return $this->word . '!';
    }

    public function doTheSplits()
    {
        throw new LackOfFlexibilityException("I can't do that!");
    }
}
