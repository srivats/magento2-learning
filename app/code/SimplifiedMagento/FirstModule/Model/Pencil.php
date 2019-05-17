<?php

namespace SimplifiedMagento\FirstModule\Model;
use SimplifiedMagento\FirstModule\Api\PencilInterface;
use SimplifiedMagento\FirstModule\Api\ColorInterface;
use SimplifiedMagento\FirstModule\Api\SizeInterface;
class Pencil implements PencilInterface
{
  protected $_size;
  protected $_color;
  public function __construct(ColorInterface $color, SizeInterface $size)
  {
    $this->_color=$color;
    $this->_size=$size;
  }

  public function getPencilType()
  {
    return $this->_color->getColor().' '.$this->_size->getSize().' Pencil';
  }
}
