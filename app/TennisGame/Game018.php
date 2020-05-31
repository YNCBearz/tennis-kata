<?php

namespace App\TennisGame;

class Game018
{
    public function __construct($firstPlayerName, $secondPlayerName)
    {
        $this->firstPlayerName = $firstPlayerName;
        $this->secondPlayerName = $secondPlayerName;
    }

    protected $firstPlayerName;

    protected $secondPlayerName;

    protected $firstPlayerPoint = 0;

    protected $secondPlayerPoint = 0;

    protected $lookup = [
        0 => 'Love',
        1 => 'Fifteen',
        2 => 'Thirty',
        3 => 'Forty'
    ];

    public function score()
    {

        if ($this->isSamePoint()) {
            return $this->samePointScore();
        }

        if ($this->isGameSet()) {
            return $this->advScore();
        }

        return $this->normalScore();
    }

    private function advScore()
    {
        return (abs($this->firstPlayerPoint - $this->secondPlayerPoint) == 1)
            ? $this->advPlayer() . ' Adv'
            : $this->advPlayer() . ' Win';
    }

    private function advPlayer()
    {
        return ($this->firstPlayerPoint > $this->secondPlayerPoint)
            ? $this->firstPlayerName
            : $this->secondPlayerName;
    }
    private function isGameSet()
    {
        return $this->firstPlayerPoint >= 4 || $this->secondPlayerPoint >= 4;
    }

    private function samePointScore()
    {
        return ($this->firstPlayerPoint >= 3)
            ? 'Deuce'
            :  $this->lookup[$this->firstPlayerPoint] . '-All';
    }

    private function isSamePoint()
    {
        return $this->firstPlayerPoint == $this->secondPlayerPoint;
    }

    private function normalScore()
    {
        return $this->lookup[$this->firstPlayerPoint] . '-' . $this->lookup[$this->secondPlayerPoint];
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
