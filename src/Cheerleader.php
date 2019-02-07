<?php

namespace SunPHP\Cheer;

use InvalidArgumentException;

class Cheerleader
{
    private $word = '';

    public function gimmeAn($letter)
    {
        if (!is_string($letter) || 1 != mb_strlen($letter)) {
            throw new InvalidArgumentException(__METHOD__
                . ' may only accept a single char arg', 619);
        }
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
