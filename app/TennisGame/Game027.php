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
     * @var string
     */
    private $secondPlayer;

    /**
     * Game027 constructor.
     * @param string $firstPlayer
     * @param string $secondPlayer
     */
    public function __construct(string $firstPlayer, string $secondPlayer)
    {
        $this->firstPlayer = $firstPlayer;
        $this->secondPlayer = $secondPlayer;
    }

    public function score(): string
    {
        if ($this->firstPlayerPoint == $this->secondPlayerPoint) {
            return $this->samePointScore();
        }

        if ($this->firstPlayerPoint >= 4 || $this->secondPlayerPoint >= 4) {
            if (abs($this->firstPlayerPoint - $this->secondPlayerPoint) >= 2) {
                return $this->advPlayer().' Win';
            }

            return $this->advPlayer().' Adv';
        }

        return $this->lookup[$this->firstPlayerPoint].'-'.$this->lookup[$this->secondPlayerPoint];
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

    private function advPlayer(): string
    {
        return ($this->firstPlayerPoint > $this->secondPlayerPoint)
            ? $this->firstPlayer
            : $this->secondPlayer;
    }
}