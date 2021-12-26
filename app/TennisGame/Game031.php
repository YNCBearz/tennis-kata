<?php

namespace App\TennisGame;

class Game031
{

    protected $firstPlayerPoint = 0;
    protected $lookup = [
        0 => 'Love',
        1 => 'Fifteen',
        2 => 'Thirty',
        3 => 'Forty',
    ];
    protected $secondPlayerPoint = 0;

    public function __construct()
    {
    }

    public function score()
    {
        if ($this->isSamePoint()) {
            if ($this->firstPlayerPoint >= 3) {
                return 'Deuce';
            }

            return $this->lookup[$this->firstPlayerPoint] . '-All';
        }

        if ($this->firstPlayerPoint > 0) {
            return $this->lookup[$this->firstPlayerPoint] . '-Love';
        }

        if ($this->secondPlayerPoint > 0) {
            return 'Love-' . $this->lookup[$this->secondPlayerPoint];
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
     * @return bool
     */
    public function isSamePoint(): bool
    {
        return $this->firstPlayerPoint == $this->secondPlayerPoint;
    }
}