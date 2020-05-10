<?php

namespace App\TennisGame;

class Game015
{
    private $firstPlayerPoint = 0;

    private $secondPlayerPoint = 0;

    private $lookup = [
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

        if ($this->firstPlayerPoint == 4 && $this->firstPlayerPoint - $this->secondPlayerPoint == 1) {
            return 'FirstPlayer Adv';
        }
        if ($this->firstPlayerPoint > 0 || $this->secondPlayerPoint > 0) {
            return $this->normalScore();
        }
    }
    private function samePointScore()
    {
        return ($this->firstPlayerPoint >= 4)
            ? 'Deuce'
            : $this->lookup[$this->firstPlayerPoint] . '-All';
    }

    private function isSamePoint()
    {
        return ($this->firstPlayerPoint == $this->secondPlayerPoint);
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
