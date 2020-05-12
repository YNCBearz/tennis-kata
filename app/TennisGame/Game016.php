<?php

namespace App\TennisGame;

class Game016
{
    private $firstPlayer;

    private $secondPlayer;

    private $firstPlayerPoint = 0;

    private $secondPlayerPoint = 0;

    private $lookup = [
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

        if ($this->isAdvPoint()) {
            return $this->advScore();
        }

        if ($this->isSamePoint()) {
            return $this->samePointScore();
        }

        if ($this->firstPlayerPoint > 0 || $this->secondPlayerPoint > 0) {
            return $this->lookup[$this->firstPlayerPoint] . '-' . $this->lookup[$this->secondPlayerPoint];
        }
    }

    private function advScore()
    {
        return ($this->pointDiff() > 1)
            ? $this->advPlayer() . ' Win'
            : $this->advPlayer() . ' Adv';
    }

    private function pointDiff()
    {
        return abs($this->firstPlayerPoint - $this->secondPlayerPoint);
    }

    private function advPlayer()
    {
        return ($this->firstPlayerPoint > $this->secondPlayerPoint)
            ? $this->firstPlayer
            : $this->secondPlayer;
    }

    private function isAdvPoint()
    {
        return ($this->isOver4Point())
            && (!$this->isSamePoint());
    }

    private function isOver4Point()
    {
        return $this->firstPlayerPoint >= 4 || $this->secondPlayerPoint >= 4;
    }

    private function samePointScore()
    {
        return ($this->firstPlayerPoint >= 3)
            ? 'Deuce'
            : $this->lookup[$this->firstPlayerPoint] . '-All';
    }

    private function isSamePoint()
    {
        return ($this->firstPlayerPoint == $this->secondPlayerPoint);
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
