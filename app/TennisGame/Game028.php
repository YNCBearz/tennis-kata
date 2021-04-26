<?php

namespace App\TennisGame;

class Game028
{
    protected $firstPlayerPoint = 0;

    /**
     * Game028 constructor.
     */
    public function __construct()
    {
    }

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

    public function firstPlayerWinPoint()
    {
        $this->firstPlayerPoint++;
    }
}