<?php

namespace App\TennisGame;

class Game028
{
    protected $firstPlayerPoint = 0;
    protected $lookup = [
        0 => 'Love',
        1 => 'Fifteen',
        2 => 'Thirty',
        3 => 'Forty',
    ];
    protected $secondPlayerPoint = 0;

    /**
     * Game028 constructor.
     */
    public function __construct()
    {
    }

    public function score(): string
    {
        if ($this->secondPlayerPoint == 1 && $this->firstPlayerPoint == 0) {
            return 'Love-'.$this->lookup[$this->secondPlayerPoint];
        }
        if ($this->secondPlayerPoint == 2 && $this->firstPlayerPoint == 0) {
            return 'Love-'.$this->lookup[$this->secondPlayerPoint];
        }
        if ($this->secondPlayerPoint == 3 && $this->firstPlayerPoint == 0) {
            return 'Love-'.$this->lookup[$this->secondPlayerPoint];
        }

        if ($this->isSamePoint()) {
            return $this->samePointScore();
        }

        if ($this->firstPlayerPoint > 0) {
            return $this->lookup[$this->firstPlayerPoint].'-Love';
        }
    }

    public function firstPlayerWinPoint(int $times)
    {
        for ($i = 0; $i < $times; $i++) {
            $this->firstPlayerPoint++;
        }
    }

    public function secondPlayerWinPoint(int $times)
    {
        for ($i = 0; $i < $times; $i++) {
            $this->secondPlayerPoint++;
        }
    }

    /**
     * @return bool
     */
    protected function isSamePoint(): bool
    {
        return $this->firstPlayerPoint == $this->secondPlayerPoint;
    }

    /**
     * @return string
     */
    protected function samePointScore(): string
    {
        if ($this->secondPlayerPoint == 3) {
            return 'Deuce';
        }

        return $this->lookup[$this->secondPlayerPoint].'-All';
    }
}