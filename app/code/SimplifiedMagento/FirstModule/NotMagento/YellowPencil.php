<?php

namespace SimplifiedMagento\FirstModule\NotMagento;
use SimplifiedMagento\FirstModule\NotMagento\PencilInterface;

class YellowPencil implements PencilInterface{
    public function getPencilType()
    {
        return "Yellow Pencil";
    }

}