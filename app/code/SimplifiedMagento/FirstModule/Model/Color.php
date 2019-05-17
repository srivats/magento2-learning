<?php


namespace SimplifiedMagento\FirstModule\Model;
use SimplifiedMagento\FirstModule\Api\Brightness;
use SimplifiedMagento\FirstModule\Api\ColorInterface;

class Color implements ColorInterface
{
    protected $brightness;
    public function __construct(Brightness $brightness)
    {
        $this->brightness=$brightness;
    }
    public function getColor()
    {
        return "green";
    }
}