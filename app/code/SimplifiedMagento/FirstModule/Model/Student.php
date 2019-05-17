<?php


namespace SimplifiedMagento\FirstModule\Model;


class Student
{
    protected $_name;
    protected $_age;
    protected  $_scores;

    /**
     * Student constructor.
     * @param string $name
     * @param string $age
     * @param array $scores
     */
    public function __construct(
        $name="Srivats",
        $age="31",
        array $scores=array("maths"=>"92","science"=>"79","history"=>"98")
    )
    {
        $this->_name=$name;
        $this->_age=$age;
        $this->_scores=$scores;
    }
}