<?php

namespace App\TennisGame;

class Game022
{
    protected $firstPlayerPoint = 0;

    public function score()
    {
        if ($this->firstPlayerPoint == 3) {
            return 'Forty-Love';
        }

        if ($this->firstPlayerPoint == 2) {
            return 'Thirty-Love';
        }

        if ($this->firstPlayerPoint == 1) {
            return 'Fifteen-Love';
        }

        return 'Love-All';
    }

    public function firstPlayerWinPoint($point = 1)
    {
        for ($i = 0; $i < $point; $i++) {
            $this->firstPlayerPoint++;
        }
    }
}
