<?php

namespace App\TennisGame;

class Game030
{

    protected $firstPlayerPoint = 0;

    public function __construct()
    {
    }

    public function score()
    {
        if ($this->firstPlayerPoint == 1) {
            return 'Fifteen-Love';
        }
        if ($this->firstPlayerPoint == 2) {
            return 'Thirty-Love';
        }

        return 'Love-All';
    }

    public function firstPlayerWinPoint()
    {
        $this->firstPlayerPoint++;
    }
}