<?php

namespace App\TennisGame;

class Game019
{
    protected $firstPlayerPoint = 0;

    public function score()
    {
        if ($this->firstPlayerPoint == 1) {
            return 'FifteenLove';
        }
        return 'LoveAll';
    }

    public function firstPlayerWinPoint()
    {
        $this->firstPlayerPoint++;
    }
}
