<?php

namespace App\TennisGame;

class Player
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var int
     */
    protected $point = 0;

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPoint()
    {
        return $this->point;
    }

    public function winPoint()
    {
        $this->point++;
    }
}
