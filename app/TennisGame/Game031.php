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
    private string $firstPlayer;
    private string $secondPlayer;

    public function __construct(string $firstPlayer, string $secondPlayer)
    {
        $this->firstPlayer = $firstPlayer;
        $this->secondPlayer = $secondPlayer;
    }

    public function score()
    {
        if ($this->isSamePoint()) {
            return $this->samePointScore();
        }

        if ($this->firstPlayerPoint >= 4) {
            if ($this->firstPlayerPoint - $this->secondPlayerPoint >= 2) {
                return $this->firstPlayer . ' Win';
            }

            return $this->firstPlayer . ' Adv';
        }
        if ($this->secondPlayerPoint >= 4) {
            if ($this->secondPlayerPoint - $this->firstPlayerPoint >= 2) {
                return $this->secondPlayer . ' Win';
            }

            return $this->secondPlayer . ' Adv';
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
            return 'Deuce';
        }

        return $this->lookup[$this->firstPlayerPoint] . '-All';
    }

    /**
     * @return string
     */
    public function normalScore(): string
    {
        return $this->lookup[$this->firstPlayerPoint] . '-' . $this->lookup[$this->secondPlayerPoint];
    }
}