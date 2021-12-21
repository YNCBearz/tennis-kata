<?php

namespace App\TennisGame;

class Game030
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
            if ($this->firstPlayerPoint >= 3) {
                return $this->deuceScore();
            }

            return $this->lookup[$this->firstPlayerPoint] . '-All';
        }

        if ($this->firstPlayerPoint >= 4) {
            return $this->firstPlayer . ' Adv';
        }
        if ($this->secondPlayerPoint >= 4) {
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
    public function normalScore(): string
    {
        return $this->lookup[$this->firstPlayerPoint] . '-' . $this->lookup[$this->secondPlayerPoint];
    }

    /**
     * @return string
     */
    public function deuceScore(): string
    {
        return 'Deuce';
    }
}