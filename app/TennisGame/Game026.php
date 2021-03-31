<?php

namespace App\TennisGame;

class Game026
{
    private $firstPlayerPoint;
    private $scoreLookup = [
        1 => 'Fifteen',
        2 => 'Thirty',
    ];
    private $secondPlayerPoint;

    /**
     * Game026 constructor.
     */
    public function __construct()
    {
    }

    public function score(): string
    {
        if ($this->firstPlayerPoint > 0) {
            return $this->scoreLookup[$this->firstPlayerPoint].'-Love';
        }

        if ($this->secondPlayerPoint) {
            return 'Love-'.$this->scoreLookup[$this->secondPlayerPoint];
        }

        return 'Love-All';
    }

    public function firstPlayerWinPoint($times = 1)
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
