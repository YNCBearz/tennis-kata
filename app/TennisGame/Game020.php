<?php

namespace App\TennisGame;

class Game020
{
    /**
     * @var int
     */
    protected $firstPlayerPoint = 0;

    public function score()
    {
        if ($this->firstPlayerPoint > 0) {
            return 'FifteenLove';
        }
        return 'LoveAll';
    }

    public function firstPlayerWinPoint()
    {
        $this->firstPlayerPoint++;
    }
}
