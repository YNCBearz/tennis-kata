<?php

namespace App\TennisGame;

class Game015
{
    private $firstPlayerPoint = 0;

    private $secondPlayerPoint = 0;

    private $lookup = [
        1 => 'Fifteen',
        2 => 'Thirty',
        3 => 'Forty'
    ];

    public function score()
    {
        if ($this->firstPlayerPoint > 0) {
            return $this->lookup[$this->firstPlayerPoint] . '-Love';
        }

        if ($this->secondPlayerPoint == 3) {
            return 'Love-Forty';
        }
        if ($this->secondPlayerPoint == 2) {
            return 'Love-Thirty';
        }
        if ($this->secondPlayerPoint == 1) {
            return 'Love-Fifteen';
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
