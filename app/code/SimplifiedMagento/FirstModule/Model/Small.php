<?php


namespace SimplifiedMagento\FirstModule\Model;
use SimplifiedMagento\FirstModule\Api\SizeInterface;

class Small implements SizeInterface
{
    public function getSize()
    {
      return "Small";
    }
}