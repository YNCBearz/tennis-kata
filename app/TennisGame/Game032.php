<?php

namespace App\TennisGame;

class Game032
{

    protected $firstPlayerPoint = 0;

    public function score()
    {
        if ($this->firstPlayerPoint == 2) {
            return 'thirty love';
        }
        if ($this->firstPlayerPoint == 1) {
            return 'fifteen love';
        }

        return 'love all';
    }

    public function firstPlayerWinPoint()
    {
        $this->firstPlayerPoint++;
    }
}