<?php

namespace App\TennisGame;

class Game034
{

    protected $firstPlayerPoint = 0;

    public function score()
    {
        if ($this->firstPlayerPoint == 1) {
            return 'Fifteen Love';
        }
        if ($this->firstPlayerPoint == 2) {
            return 'Thirty Love';
        }
        if ($this->firstPlayerPoint == 3) {
            return 'Forty Love';
        }

        return 'Love All';
    }

    public function firstPlayerWinPoint()
    {
        $this->firstPlayerPoint++;
    }
}