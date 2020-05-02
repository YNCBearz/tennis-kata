<?php
namespace App\TennisGame;

class Game007
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

        if ($this->firstPlayerPoint > 0 || $this->secondPlayerPoint > 0) {
            return $this->normalScore();
        }
    }

    private function normalScore()
    {
        return $this->lookup[$this->firstPlayerPoint] . '-' . $this->lookup[$this->secondPlayerPoint];
    }

    private function isSamePoint()
    {
        return ($this->firstPlayerPoint == $this->secondPlayerPoint);
    }

    private function samePointScore()
    {
        return $this->lookup[$this->firstPlayerPoint] . '-All';
    }

    public function firstPlayerWinPoints($point = 1)
    {
        for ($i = 1 ; $i <= $point ; $i++) {
            $this->firstPlayerPoint++;
        }
    }

    public function secondPlayerWinPoints($point = 1)
    {
        for ($i = 1 ; $i <= $point ; $i++) {
            $this->secondPlayerPoint++;
        }
    }
}