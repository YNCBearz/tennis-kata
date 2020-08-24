<?php

namespace App\TennisGame;

class Game021
{
    protected $firstPlayerPoint = 0;

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
