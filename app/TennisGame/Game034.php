<?php

namespace App\TennisGame;

class Game034
{

    protected $firstPlayerPoint = 0;
    protected $lookup = [
        0 => 'Love',
        1 => 'Fifteen',
        2 => 'Thirty',
        3 => 'Forty',
    ];
    protected $secondPlayerPoint = 0;
    private $firstPlayer;
    private string $secondPlayer;

    public function __construct($firstPlayer, string $secondPlayer)
    {
        $this->firstPlayer = $firstPlayer;
        $this->secondPlayer = $secondPlayer;
    }

    public function score()
    {
        if ($this->isSamePoint()) {
            return $this->samePointScore();
        }

        if ($this->isSomeoneWinMoreThanFourPoint()) {
            return $this->advPlayer() . ' Adv';
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
     * @return string
     */
    private function normalScore(): string
    {
        return $this->lookup[$this->firstPlayerPoint] . ' ' . $this->lookup[$this->secondPlayerPoint];
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
        $advPlayer = ($this->firstPlayerPoint > $this->secondPlayerPoint)
            ? $this->firstPlayer
            : $this->secondPlayer;

        return $advPlayer;
    }

    /**
     * @return bool
     */
    private function isSomeoneWinMoreThanFourPoint(): bool
    {
        return $this->firstPlayerPoint >= 4 || $this->secondPlayerPoint >= 4;
    }
}