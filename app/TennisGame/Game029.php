<?php

namespace App\TennisGame;

class Game029
{

    protected int $firstPlayerPoint = 0;

    protected int $secondPlayerPoint = 0;

    protected array $lookup = [
        1 => 'Fifteen',
        2 => 'Thirty',
        3 => 'Forty',
    ];

    public function score(): string
    {
        if ($this->firstPlayerPoint > 0) {
            return $this->lookup[$this->firstPlayerPoint].'-Love';
        }

        if ($this->secondPlayerPoint > 0) {
            return 'Love-'.$this->lookup[$this->secondPlayerPoint];
        }

        return 'Love-All';
    }

    public function firstPlayerWinPoint(int $times = 1)
    {
        for ($i = 0; $i < $times; $i++) {
            $this->firstPlayerPoint++;
        }
    }

    public function secondPlayerWinPoint(int $times = 1)
    {
        for ($i = 0; $i < $times; $i++) {
            $this->secondPlayerPoint++;
        }
    }
}