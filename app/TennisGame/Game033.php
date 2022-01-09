<?php

namespace App\TennisGame;

class Game033
{

    protected $firstPlayerPoint = 0;
    protected $lookup = [
        1 => 'Fifteen',
        2 => 'Thirty',
    ];

    public function score()
    {
        if ($this->firstPlayerPoint > 0) {
            return $this->lookup[$this->firstPlayerPoint] . ' Love';
        }

        return 'Love All';
    }

    public function firstPlayerWinPoint()
    {
        $this->firstPlayerPoint++;
    }
}