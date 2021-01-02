<?php

namespace App\TennisGame;

class Game023
{
    protected $firstPlayerPoint = 0;

    protected $secondPlayerPoint = 0;

    protected $lookup = [
        1 => 'Fifteen',
        2 => 'Thirty',
        3 => 'Forty'
    ];

    public function score()
    {
        if ($this->secondPlayerPoint == 2) {
            return 'Love-Thirty';
        }

        if ($this->secondPlayerPoint == 1) {
            return 'Love-Fifteen';
        }

        if ($this->firstPlayerPoint > 0) {
            return $this->lookup[$this->firstPlayerPoint] . '-Love';
        }

        return 'Love-All';
    }

    public function firstPlayerWinPoint($times = 1)
    {
        for ($i = 0; $i < $times; $i++) {
            $this->firstPlayerPoint++;
        }
    }

    public function secondPlayerWinPoint($times = 1)
    {
        for ($i = 0; $i < $times; $i++) {
            $this->secondPlayerPoint++;
        }
    }
}
