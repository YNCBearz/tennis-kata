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
    protected $firstPlayer;

    /**
     * Game028 constructor.
     * @param $firstPlayer
     */
    public function __construct($firstPlayer)
    {
        $this->firstPlayer = $firstPlayer;
    }

    public function score(): string
    {
        if ($this->isSamePoint()) {
            return $this->samePointScore();
        }

        if ($this->firstPlayerPoint == 4 && $this->secondPlayerPoint == 3) {
            return $this->firstPlayer.' Adv';
        }
        if ($this->firstPlayerPoint == 5 && $this->secondPlayerPoint == 4) {
            return $this->firstPlayer.' Adv';
        }

        return $this->normalScore();
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

    /**
     * @return string
     */
    protected function normalScore(): string
    {
        return $this->lookup[$this->firstPlayerPoint].'-'.$this->lookup[$this->secondPlayerPoint];
    }
}