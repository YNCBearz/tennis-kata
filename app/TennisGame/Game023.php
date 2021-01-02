<?php

namespace App\TennisGame;

class Game023
{
    protected $firstPlayerPoint = 0;

    protected $secondPlayerPoint = 0;

    protected $lookup = [
        0 => 'Love',
        1 => 'Fifteen',
        2 => 'Thirty',
        3 => 'Forty'
    ];

    protected $firstPlayer;

    protected $secondPlayer;

    public function __construct($firstPlayer, $secondPlayer)
    {
        $this->firstPlayer = $firstPlayer;
        $this->secondPlayer = $secondPlayer;
    }

    public function score()
    {
        if ($this->isSamePoint()) {
            return $this->samePointScore();
        }

        if ($this->isAnyPlayerGet4Point()) {
            return ($this->isPointDiffOver2())
                ? $this->winScore()
                : $this->advScore();
        }

        return $this->normalScore();
    }

    public function firstPlayerWinPoint($times = 1)
    {
        for ($i = 0; $i < $times; $i++) {
            $this->firstPlayerPoint++;
        }
    }

    public function secondPlayerWinPoint($times = 1)
    {
        for ($i = 0; $i < $times; $i++) {
            $this->secondPlayerPoint++;
        }
    }

    private function isSamePoint()
    {
        return $this->firstPlayerPoint == $this->secondPlayerPoint;
    }

    private function samePointScore()
    {
        return ($this->firstPlayerPoint >= 3)
            ? 'Deuce'
            : $this->lookup[$this->firstPlayerPoint] . '-All';
    }

    private function normalScore()
    {
        return $this->lookup[$this->firstPlayerPoint] . '-' . $this->lookup[$this->secondPlayerPoint];
    }

    private function advPlayer()
    {
        return ($this->firstPlayerPoint > $this->secondPlayerPoint)
            ? $this->firstPlayer
            : $this->secondPlayer;
    }

    private function isAnyPlayerGet4Point()
    {
        return $this->firstPlayerPoint >= 4 || $this->secondPlayerPoint >= 4;
    }

    private function isPointDiffOver2()
    {
        return abs($this->firstPlayerPoint - $this->secondPlayerPoint) >= 2;
    }

    private function winScore()
    {
        return $this->advPlayer() . ' Win';
    }

    private function advScore()
    {
        return $this->advPlayer() . ' Adv';
    }
}
