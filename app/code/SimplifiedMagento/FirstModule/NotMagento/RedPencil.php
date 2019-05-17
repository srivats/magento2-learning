<?php

namespace SimplifiedMagento\FirstModule\NotMagento;
use SimplifiedMagento\FirstModule\NotMagento\PencilInterface;

class RedPencil implements PencilInterface{
    public function getPencilType()
    {
        return "Red Pencil";
    }

}