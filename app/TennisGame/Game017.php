<?php

namespace App\TennisGame;

class Game017
{
    private $firstPlayerPoint = 0;

    private $secondPlayerPoint = 0;

    private $lookup = [
        0 => 'Love',
        1 => 'Fifteen',
        2 => 'Thirty',
        3 => 'Forty'
    ];
    public function score()
    {
        if ($this->firstPlayerPoint == $this->secondPlayerPoint && $this->firstPlayerPoint >= 3) {
            return 'Deuce';
        }

        if ($this->firstPlayerPoint == $this->secondPlayerPoint) {
            return $this->lookup[$this->firstPlayerPoint] . '-All';
        }

        if ($this->firstPlayerPoint > 0 || $this->secondPlayerPoint > 0) {
            return $this->lookup[$this->firstPlayerPoint] . '-' . $this->lookup[$this->secondPlayerPoint];
        }

        return 'Love-All';
    }

    public function secondPlayerWinPoint($point = 1)
    {
        for ($i = 0; $i < $point; $i++) {
            $this->secondPlayerPoint++;
        }
    }

    public function firstPlayerWinPoint($point = 1)
    {
        for ($i = 0; $i < $point; $i++) {
            $this->firstPlayerPoint++;
        }
    }
}
