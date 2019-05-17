<?php


namespace SimplifiedMagento\FirstModule\Model;
use SimplifiedMagento\FirstModule\Api\SizeInterface;

class Big implements SizeInterface
{
    public function getSize()
    {
        return "Big";
    }
}