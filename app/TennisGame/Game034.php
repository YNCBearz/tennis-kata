<?php

namespace App\TennisGame;

class Game034
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
            if ($this->firstPlayerPoint >= 3) {
                return 'Deuce';
            }

            return $this->lookup[$this->firstPlayerPoint] . ' All';
        }

        if ($this->firstPlayerPoint > 0 || $this->secondPlayerPoint > 0) {
            return $this->normalScore();
        }
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
    private function normalScore(): string
    {
        return $this->lookup[$this->firstPlayerPoint] . ' ' . $this->lookup[$this->secondPlayerPoint];
    }

    /**
     * @return bool
     */
    private function isSamePoint(): bool
    {
        return $this->firstPlayerPoint == $this->secondPlayerPoint;
    }
}