<?php

namespace App\TennisGame;

class Game033
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

        if ($this->firstPlayerPoint >= 4 || $this->secondPlayerPoint >= 4) {
            return $this->advPlayer() . ' Adv';
        }

        return $this->normalPointScore();
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
     * @return string
     */
    public function normalPointScore(): string
    {
        return $this->lookup[$this->firstPlayerPoint] . ' ' . $this->lookup[$this->secondPlayerPoint];
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

        return $this->lookup[$this->firstPlayerPoint] . ' All';
    }

    /**
     * @return string
     */
    public function advPlayer(): string
    {
        $advPlayer = ($this->firstPlayerPoint > $this->secondPlayerPoint)
            ? $this->firstPlayer
            : $this->secondPlayer;

        return $advPlayer;
    }
}