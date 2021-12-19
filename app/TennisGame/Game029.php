<?php

namespace App\TennisGame;

class Game029
{

    protected int $firstPlayerPoint = 0;

    protected int $secondPlayerPoint = 0;

    protected array $lookup = [
        0 => 'Love',
        1 => 'Fifteen',
        2 => 'Thirty',
        3 => 'Forty',
    ];

    protected string $firstPlayer;

    /**
     * @param string $firstPlayer
     */
    public function __construct(string $firstPlayer)
    {
        $this->firstPlayer = $firstPlayer;
    }

    public function score(): string
    {
        if ($this->isSamePoint()) {
            return $this->samePointScore();
        }

        if ($this->firstPlayerPoint == 4) {
            return $this->firstPlayer.' Adv';
        }

        if ($this->firstPlayerPoint > 0) {
            return $this->lookup[$this->firstPlayerPoint].'-Love';
        }

        if ($this->secondPlayerPoint > 0) {
            return 'Love-'.$this->lookup[$this->secondPlayerPoint];
        }
    }

    public function firstPlayerWinPoint(int $times = 1)
    {
        for ($i = 0; $i < $times; $i++) {
            $this->firstPlayerPoint++;
        }
    }

    public function secondPlayerWinPoint(int $times = 1)
    {
        for ($i = 0; $i < $times; $i++) {
            $this->secondPlayerPoint++;
        }
    }

    /**
     * @return string
     */
    public function samePointScore(): string
    {
        if ($this->firstPlayerPoint >= 3) {
            return 'Deuce';
        }

        return $this->lookup[$this->firstPlayerPoint].'-All';
    }

    /**
     * @return bool
     */
    public function isSamePoint(): bool
    {
        return $this->firstPlayerPoint == $this->secondPlayerPoint;
    }
}