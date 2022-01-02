<?php

namespace App\TennisGame;

class Game032
{

    protected $firstPlayerPoint = 0;
    protected $lookup = [
        0 => 'love',
        1 => 'fifteen',
        2 => 'thirty',
        3 => 'forty',
    ];
    protected $secondPlayerPoint = 0;
    private $firstPlayer;

    public function __construct($firstPlayer)
    {
        $this->firstPlayer = $firstPlayer;
    }

    public function score()
    {
        if ($this->isSamePoint()) {
            return $this->samePointScore();
        }

        if ($this->firstPlayerPoint >= 4) {
            return $this->firstPlayer . ' adv';
        }

        return $this->normalScore();
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

    /**
     * @return string
     */
    public function samePointScore(): string
    {
        if ($this->firstPlayerPoint >= 3) {
            return 'deuce';
        }

        return $this->lookup[$this->firstPlayerPoint] . ' all';
    }

    /**
     * @return string
     */
    public function normalScore(): string
    {
        return $this->lookup[$this->firstPlayerPoint] . ' ' . $this->lookup[$this->secondPlayerPoint];
    }
}