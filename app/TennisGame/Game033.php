<?php

namespace App\TennisGame;

class Game033
{

    protected $firstPlayerPoint = 0;

    public function score()
    {
        if ($this->firstPlayerPoint == 2) {
            return 'Thirty Love';
        }

        if ($this->firstPlayerPoint == 1) {
            return 'Fifteen Love';
        }

        return 'Love All';
    }

    public function firstPlayerWinPoint()
    {
        $this->firstPlayerPoint++;
    }
}