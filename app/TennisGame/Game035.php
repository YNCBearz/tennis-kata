<?php

namespace App\TennisGame;

class Game035
{
    protected $firstPlayerPoint = 0;
    protected $lookup = [
        0 => 'Love',
        1 => 'Fifteen',
        2 => 'Thirty',
        3 => 'Forty',
    ];
    protected $secondPlayerPoint = 0;

    public function __construct()
    {
    }

    public function score()
    {
        if ($this->firstPlayerPoint > 0 || $this->secondPlayerPoint > 0) {
            return $this->lookup[$this->firstPlayerPoint] . ' ' . $this->lookup[$this->secondPlayerPoint];
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