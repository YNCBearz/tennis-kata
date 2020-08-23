<?php

namespace App\TennisGame;

class Game020
{
    /**
     * @var int
     */
    protected $firstPlayerPoint = 0;

    /**
     * @var int
     */
    protected $secondPlayerPoint = 0;

    /**
     * @var array
     */
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

        if ($this->firstPlayerPoint > 0 || $this->secondPlayerPoint > 0) {
            return $this->normalScore();
        }
    }

    private function samePointScore()
    {
        return ($this->firstPlayerPoint >= 3)
            ? $this->deuceScore()
            : $this->samePointScoreUnder3Point();
    }

    private function deuceScore()
    {
        return 'Deuce';
    }
    private function samePointScoreUnder3Point()
    {
        return $this->lookup[$this->firstPlayerPoint] . 'All';
    }

    private function isSamePoint()
    {
        return ($this->firstPlayerPoint == $this->secondPlayerPoint);
    }

    private function normalScore()
    {
        return $this->lookup[$this->firstPlayerPoint] . $this->lookup[$this->secondPlayerPoint];
    }

    /**
     * @var int $point
     */
    public function secondPlayerWinPoint($point = 1)
    {
        for ($i = 0; $i < $point; $i++) {
            $this->secondPlayerPoint++;
        }
    }

    /**
     * @var int $point
     */
    public function firstPlayerWinPoint($point = 1)
    {
        for ($i = 0; $i < $point; $i++) {
            $this->firstPlayerPoint++;
        }
    }
}
