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
        $lookup = [
            1 => 'Fifteen',
            2 => 'Thirty',
            3 => 'Forty',
        ];
        if ($this->firstPlayerPoint == 1) {
            return $lookup[$this->firstPlayerPoint].'-Love';
        }

        if ($this->firstPlayerPoint == 2) {
            return $lookup[$this->firstPlayerPoint].'-Love';
        }

        if ($this->firstPlayerPoint == 3) {
            return $lookup[$this->firstPlayerPoint].'-Love';
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