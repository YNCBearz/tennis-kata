<?php

namespace App\TennisGame;

class Game029
{

    protected int $firstPlayerPoint = 0;

    public function score(): string
    {
        if ($this->firstPlayerPoint == 1) {
            return 'Fifteen-Love';
        }
        if ($this->firstPlayerPoint == 2) {
            return 'Thirty-Love';
        }

        return 'Love-All';
    }

    public function firstPlayerWinPoint(int $times = 1)
    {
        for ($i = 0; $i < $times; $i++) {
            $this->firstPlayerPoint++;
        }
    }
}