<?php

namespace App\TennisGame;

class Game029
{

    protected int $firstPlayerPoint = 0;

    public function score()
    {
        if ($this->firstPlayerPoint == 1) {
            return 'Fifteen-Love';
        }

        return 'Love-All';
    }

    public function firstPlayerWinPoint()
    {
        $this->firstPlayerPoint++;
    }
}