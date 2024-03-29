<?php

namespace App\TennisGame;

class Game037
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

        if ($this->isAnyPlayerWinMoreThan3Point()) {
            return $this->advScore();
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
    private function isSamePoint(): bool
    {
        return $this->firstPlayerPoint == $this->secondPlayerPoint;
    }

    /**
     * @return string
     */
    private function normalScore(): string
    {
        return $this->lookup[$this->firstPlayerPoint] . ' ' . $this->lookup[$this->secondPlayerPoint];
    }

    /**
     * @return string
     */
    private function samePointScore(): string
    {
        if ($this->firstPlayerPoint >= 3) {
            return 'Deuce';
        }

        return $this->lookup[$this->firstPlayerPoint] . ' All';
    }

    /**
     * @return string
     */
    private function advPlayer(): string
    {
        return ($this->firstPlayerPoint > $this->secondPlayerPoint)
            ? $this->firstPlayer
            : $this->secondPlayer;
    }

    /**
     * @return bool
     */
    private function isAnyPlayerWinMoreThan3Point(): bool
    {
        return $this->firstPlayerPoint > 3 || $this->secondPlayerPoint > 3;
    }

    /**
     * @return string
     */
    private function advScore(): string
    {
        $pointDiff = abs($this->firstPlayerPoint - $this->secondPlayerPoint);
        if ($pointDiff > 1) {
            return $this->advPlayer() . ' Win';
        }

        return $this->advPlayer() . ' Adv';
    }

}