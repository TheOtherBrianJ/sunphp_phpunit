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
}
