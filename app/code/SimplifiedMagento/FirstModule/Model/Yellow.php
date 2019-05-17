<?php

namespace SimplifiedMagento\FirstModule\Model;
use SimplifiedMagento\FirstModule\Api\ColorInterface;
use SimplifiedMagento\FirstModule\Api\Brightness;
class Yellow implements ColorInterface
{
    protected $brightness;
    public function __construct(Brightness $brightness)
    {
        $this->brightness=$brightness;
    }

    public function getColor()
    {
        return "Yellow";
    }
}