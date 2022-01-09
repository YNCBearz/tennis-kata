<?php

namespace App\TennisGame;

class Game033
{

    protected $firstPlayerPoint = 0;
    protected $lookup = [
        0 => 'Love',
        1 => 'Fifteen',
        2 => 'Thirty',
        3 => 'Forty',
    ];
    protected $secondPlayerPoint = 0;

    public function score()
    {
        if ($this->isSamePoint()) {
            return $this->lookup[$this->firstPlayerPoint] . ' All';
        }

        return $this->normalPointScore();
    }

    public function firstPlayerWinPoint()
    {
        $this->firstPlayerPoint++;
    }

    public function secondPlayerWinPoint()
    {
        $this->secondPlayerPoint++;
    }

    /**
     * @return string
     */
    public function normalPointScore(): string
    {
        return $this->lookup[$this->firstPlayerPoint] . ' ' . $this->lookup[$this->secondPlayerPoint];
    }

    /**
     * @return bool
     */
    public function isSamePoint(): bool
    {
        return $this->firstPlayerPoint == $this->secondPlayerPoint;
    }
}