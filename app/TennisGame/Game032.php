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
    private $secondPlayer;

    public function __construct($firstPlayer, $secondPlayer)
    {
        $this->firstPlayer = $firstPlayer;
        $this->secondPlayer = $secondPlayer;
    }

    public function score()
    {
        if ($this->isSamePoint()) {
            return $this->samePointScore();
        }

        if ($this->firstPlayerPoint >= 4 || $this->secondPlayerPoint >= 4) {
            $advPlayer = ($this->firstPlayerPoint > $this->secondPlayerPoint)
                ? $this->firstPlayer
                : $this->secondPlayer;

            return $advPlayer . ' adv';
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