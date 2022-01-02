<?php

namespace App\TennisGame;

class Game032
{

    protected $firstPlayerPoint = 0;

    public function score()
    {
        $lookup = [
            1 => 'fifteen',
            2 => 'thirty',
            3 => 'forty',
        ];
        if ($this->firstPlayerPoint > 0) {
            return $lookup[$this->firstPlayerPoint] . ' love';
        }

        return 'love all';
    }

    public function firstPlayerWinPoint()
    {
        $this->firstPlayerPoint++;
    }
}