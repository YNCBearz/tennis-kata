<?php

namespace App\TennisGame;

class Game029
{

    protected int $firstPlayerPoint = 0;

    protected int $secondPlayerPoint = 0;

    protected array $lookup = [
        0 => 'Love',
        1 => 'Fifteen',
        2 => 'Thirty',
        3 => 'Forty',
    ];

    protected string $firstPlayer;

    protected string $secondPlayer;

    public function __construct(
        string $firstPlayer,
        string $secondPlayer
    ) {
        $this->firstPlayer = $firstPlayer;
        $this->secondPlayer = $secondPlayer;
    }

    public function score(): string
    {
        if ($this->isSamePoint()) {
            return $this->samePointScore();
        }

        if (($this->firstPlayerPoint >= 4 || $this->secondPlayerPoint >= 4)) {
            $advPlayer = $this->advPlayer();

            return $advPlayer.' Adv';
        }

        return $this->normalScore();
    }

    public function firstPlayerWinPoint(int $times = 1)
    {
        for ($i = 0; $i < $times; $i++) {
            $this->firstPlayerPoint++;
        }
    }

    public function secondPlayerWinPoint(int $times = 1)
    {
        for ($i = 0; $i < $times; $i++) {
            $this->secondPlayerPoint++;
        }
    }

    /**
     * @return string
     */
    public function samePointScore(): string
    {
        if ($this->firstPlayerPoint >= 3) {
            return 'Deuce';
        }

        return $this->lookup[$this->firstPlayerPoint].'-All';
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
    public function advPlayer(): string
    {
        $advPlayer = ($this->firstPlayerPoint > $this->secondPlayerPoint)
            ? $this->firstPlayer
            : $this->secondPlayer;

        return $advPlayer;
    }

    /**
     * @return string
     */
    public function normalScore(): string
    {
        return $this->lookup[$this->firstPlayerPoint].'-'.$this->lookup[$this->secondPlayerPoint];
    }
}