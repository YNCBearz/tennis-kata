<?php

namespace App\TennisGame;

class Game022
{
    protected $firstPlayerPoint = 0;

    protected $secondPlayerPoint = 0;

    protected $firstPlayer;

    protected $secondPlayer;

    protected $lookup = [
        0 => 'Love',
        1 => 'Fifteen',
        2 => 'Thirty',
        3 => 'Forty'
    ];

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
            return ($this->isGameSet())
                ? $this->advPlayer() . ' Win'
                : $this->advPlayer() . ' Adv';
        }

        return $this->normalScore();
    }

    private function isGameSet()
    {
        return $this->isAnyPlayerGet4Point() && $this->firstPlayerPoint - $this->secondPlayerPoint >= 2;
    }

    private function isAnyPlayerGet4Point()
    {
        return $this->firstPlayerPoint >= 4 || $this->secondPlayerPoint >= 4;
    }

    private function advPlayer()
    {
        return ($this->firstPlayerPoint > $this->secondPlayerPoint)
            ? $this->firstPlayer
            : $this->secondPlayer;
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

    private function isSamePoint()
    {
        return $this->firstPlayerPoint == $this->secondPlayerPoint;
    }

    public function secondPlayerWinPoint($point = 1)
    {
        for ($i = 0; $i < $point; $i++) {
            $this->secondPlayerPoint++;
        }
    }

    public function firstPlayerWinPoint($point = 1)
    {
        for ($i = 0; $i < $point; $i++) {
            $this->firstPlayerPoint++;
        }
    }
}
