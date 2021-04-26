<?php

namespace App\TennisGame;

class Game028
{
    protected $firstPlayerPoint = 0;
    protected $lookup = [
        1 => 'Fifteen',
        2 => 'Thirty',
        3 => 'Forty',
    ];
    protected $secondPlayerPoint = 0;

    /**
     * Game028 constructor.
     */
    public function __construct()
    {
    }

    public function score(): string
    {
        if ($this->secondPlayerPoint == 1) {
            return 'Fifteen-All';
        }
        if ($this->firstPlayerPoint == 1) {
            return $this->lookup[$this->firstPlayerPoint].'-Love';
        }

        if ($this->firstPlayerPoint == 2) {
            return $this->lookup[$this->firstPlayerPoint].'-Love';
        }

        if ($this->firstPlayerPoint == 3) {
            return $this->lookup[$this->firstPlayerPoint].'-Love';
        }

        return 'Love-All';
    }

    public function firstPlayerWinPoint(int $times)
    {
        for ($i = 0; $i < $times; $i++) {
            $this->firstPlayerPoint++;
        }
    }

    public function secondPlayerWinPoint()
    {
        $this->secondPlayerPoint++;
    }
}