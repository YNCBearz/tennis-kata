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
        if ($this->firstPlayerPoint == 1 && $this->secondPlayerPoint == 1) {
            return 'FifteenAll';
        }

        if ($this->firstPlayerPoint == 2 && $this->secondPlayerPoint == 2) {
            return 'ThirtyAll';
        }

        if ($this->firstPlayerPoint > 0 || $this->secondPlayerPoint > 0) {
            return $this->normalScore();
        }

        return 'LoveAll';
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
