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
     * @param Player $firstPlayer
     * @param Player $secondPlayer
     */
    public function __construct(Player $firstPlayer, Player $secondPlayer)
    {
        $this->firstPlayer = $firstPlayer;
        $this->secondPlayer = $secondPlayer;
    }

    public function score()
    {
        if ($this->getFirstPlayerPoint() == 1) {
            return 'FifteenLove';
        }
        return 'LoveAll';
    }

    private function getFirstPlayerPoint()
    {
        return $this->firstPlayer->getPoint();
    }

    public function firstPlayerWinPoint()
    {
        $this->firstPlayer->winPoint();
    }
}
