<?php

namespace App\TennisGame;

class Game032
{

    protected $firstPlayerPoint = 0;
    protected $lookup = [
        0 => 'love',
        1 => 'fifteen',
        2 => 'thirty',
        3 => 'forty',
    ];
    protected $secondPlayerPoint = 0;

    public function score()
    {
        if ($this->firstPlayerPoint == $this->secondPlayerPoint) {
            if ($this->firstPlayerPoint >= 3) {
                return 'deuce';
            }
        }
        if ($this->firstPlayerPoint > 0 || $this->secondPlayerPoint > 0) {
            return $this->lookup[$this->firstPlayerPoint] . ' ' . $this->lookup[$this->secondPlayerPoint];
        }

        return 'love all';
    }

    public function firstPlayerWinPoint()
    {
        $this->firstPlayerPoint++;
    }

    public function secondPlayerWinPoint()
    {
        $this->secondPlayerPoint++;
    }
}