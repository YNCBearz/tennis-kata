<?php

namespace App\TennisGame;

class Game026
{
    private $firstPlayerPoint = 0;
    private $secondPlayerPoint = 0;
    private $lookup = [
        0 => 'Love',
        1 => 'Fifteen',
        2 => 'Thirty',
        3 => 'Forty',
    ];
    /**
     * @var string
     */
    private $firstPlayer;
    /**
     * @var string
     */
    private $secondPlayer;

    /**
     * Game026 constructor.
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
        if ($this->isGameSet()) {
            return $this->winScore();
        }

        if ($this->isAdvScore()) {
            return $this->advScore();
        }

        if ($this->isSamePoint()) {
            return $this->samePointScore();
        }

        return $this->normalScore();
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

    /**
     * @return string
     */
    private function normalScore(): string
    {
        return $this->lookup[$this->firstPlayerPoint].'-'.$this->lookup[$this->secondPlayerPoint];
    }

    /**
     * @return bool
     */
    private function isGameSet(): bool
    {
        return ($this->firstPlayerPoint >= 4 || $this->secondPlayerPoint >= 4)
            && abs($this->firstPlayerPoint - $this->secondPlayerPoint) >= 2;
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
    private function isSamePoint(): bool
    {
        return $this->firstPlayerPoint == $this->secondPlayerPoint;
    }

    /**
     * @return bool
     */
    private function isAdvScore(): bool
    {
        return ($this->firstPlayerPoint >= 4 || $this->secondPlayerPoint >= 4) && abs(
                $this->firstPlayerPoint - $this->secondPlayerPoint
            ) == 1;
    }

    /**
     * @return string
     */
    private function winScore(): string
    {
        return $this->advPlayer().' Win';
    }

    /**
     * @return string
     */
    private function advScore(): string
    {
        return $this->advPlayer().' Adv';
    }
}
