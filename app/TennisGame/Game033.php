<?php

namespace App\TennisGame;

class Game033
{

    protected $firstPlayerPoint = 0;
    protected $lookup = [
        1 => 'Fifteen',
        2 => 'Thirty',
        3 => 'Forty',
    ];
    protected $secondPlayerPoint = 0;

    public function score()
    {
        if ($this->firstPlayerPoint > 0) {
            return $this->lookup[$this->firstPlayerPoint] . ' Love';
        }

        if ($this->secondPlayerPoint == 1) {
            return 'Love Fifteen';
        }

        return 'Love All';
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