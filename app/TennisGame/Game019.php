<?php

namespace App\TennisGame;

use App\TennisGame\Player;

class Game019
{
    /**
     * @var Player
     */
    protected $firstPlayer;

    /**
     * @var Player
     */
    protected $secondPlayer;

    /**
     * @var array
     */
    protected $lookup = [
        1 => 'Fifteen',
        2 => 'Thirty',
        3 => 'Forty'
    ];

    /**
     * @param Player $firstPlayer
     * @param Player $secondPlayer
     */
    public function __construct(Player $firstPlayer, Player $secondPlayer)
    {
        $this->firstPlayer = $firstPlayer;
        $this->secondPlayer = $secondPlayer;
    }

    /**
     * @return string
     */
    public function score()
    {
        if ($this->getFirstPlayerPoint() > 0) {
            return $this->normalScore();
        }

        if ($this->getSecondPlayerPoint() > 0) {
            return 'LoveFifteeen';
        }

        return 'LoveAll';
    }

    /**
     * @return string
     */
    private function normalScore()
    {
        return $this->lookup[$this->getFirstPlayerPoint()] . 'Love';
    }

    private function getSecondPlayerPoint()
    {
        return $this->secondPlayer->getPoint();
    }

    private function getFirstPlayerPoint()
    {
        return $this->firstPlayer->getPoint();
    }

    /**
     * @param int $point
     */
    public function secondPlayerWinPoint(int $point = 1)
    {
        // for ($i = 0; $i < $point; $i++) {
        $this->secondPlayer->winPoint();
        // }
    }

    /**
     * @param int $point
     */
    public function firstPlayerWinPoint(int $point = 1)
    {
        for ($i = 0; $i < $point; $i++) {
            $this->firstPlayer->winPoint();
        }
    }
}
