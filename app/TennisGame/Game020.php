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
            if ($this->firstPlayerPoint == 2) {
                return 'ThirtyLove';
            }
            return 'FifteenLove';
        }
        return 'LoveAll';
    }

    /**
     * @var int $point
     */
    public function firstPlayerWinPoint($point = 1)
    {
        for ($i = 0; $i < $point; $i++) {
            $this->firstPlayerPoint++;
        }
    }
}
