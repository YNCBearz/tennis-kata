<?php

namespace App\TennisGame;

class Game027
{
    private $firstPlayerPoint = 0;

    /**
     * Game027 constructor.
     */
    public function __construct()
    {
    }

    public function score()
    {
        if ($this->firstPlayerPoint == 1) {
            return 'Fifteen-Love';
        }

        if ($this->firstPlayerPoint == 2) {
            return 'Thirty-Love';
        }

        if ($this->firstPlayerPoint == 3) {
            return 'Forty-Love';
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