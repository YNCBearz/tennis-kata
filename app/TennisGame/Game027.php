<?php

namespace App\TennisGame;

class Game027
{
    private $lookup = [
        0 => 'Love',
        1 => 'Fifteen',
        2 => 'Thirty',
        3 => 'Forty',
    ];
    private $firstPlayerPoint = 0;
    private $secondPlayerPoint = 0;
    /**
     * @var string
     */
    private $firstPlayer;

    /**
     * Game027 constructor.
     * @param string $firstPlayer
     */
    public function __construct(string $firstPlayer)
    {
        $this->firstPlayer = $firstPlayer;
    }

    public function score()
    {
        if ($this->firstPlayerPoint == $this->secondPlayerPoint) {
            return $this->samePointScore();
        }

        if ($this->firstPlayerPoint == 4) {
            return $this->firstPlayer.' Adv';
        }

        if ($this->firstPlayerPoint > 0 || $this->secondPlayerPoint > 0) {
            return $this->lookup[$this->firstPlayerPoint].'-'.$this->lookup[$this->secondPlayerPoint];
        }
    }

    public function firstPlayerWinPoint($times = 1)
    {
        for ($i = 0; $i < $times; $i++) {
            $this->firstPlayerPoint++;
        }
    }

    public function secondPlayerWinPoint($times = 1)
    {
        for ($i = 0; $i < $times; $i++) {
            $this->secondPlayerPoint++;
        }
    }

    /**
     * @return string
     */
    private function samePointScore(): string
    {
        if ($this->firstPlayerPoint >= 3) {
            return 'Deuce';
        }

        return $this->lookup[$this->firstPlayerPoint].'-All';
    }
}