<?php

namespace App\TennisGame;

class Game027
{
    private $firstPlayerPoint = 0;
    private $lookup = [
        1 => 'Fifteen',
        2 => 'Thirty',
        3 => 'Forty',
    ];

    /**
     * Game027 constructor.
     */
    public function __construct()
    {
    }

    public function score()
    {
        if ($this->firstPlayerPoint > 0) {
            return $this->lookup[$this->firstPlayerPoint].'-Love';
        }

        return 'Love-All';
    }

    public function firstPlayerWinPoint($times = 1)
    {
        for ($i = 0; $i < $times; $i++) {
            $this->firstPlayerPoint++;
        }
    }
}