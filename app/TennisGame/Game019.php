<?php

namespace App\TennisGame;

use App\TennisGame\Player019;

class Game019
{
    /**
     * @var Player019
     */
    protected $firstPlayer;

    /**
     * @var Player019
     */
    protected $secondPlayer;

    /**
     * @var array
     */
    protected $lookup = [
        0 => 'Love',
        1 => 'Fifteen',
        2 => 'Thirty',
        3 => 'Forty'
    ];

    /**
     * @param Player019 $firstPlayer
     * @param Player019 $secondPlayer
     */
    public function __construct(Player019 $firstPlayer, Player019 $secondPlayer)
    {
        $this->firstPlayer = $firstPlayer;
        $this->secondPlayer = $secondPlayer;
    }

    /**
     * @return string
     */
    public function score()
    {
        if ($this->isSamePoint()) {
            return $this->samePointScore();
        }

        if ($this->isGameSet()) {
            return $this->advScore();
        }

        return $this->normalScore();
    }

    private function isGameSet()
    {
        return ($this->getFirstPlayerPoint() >= 4 || $this->getSecondPlayerPoint() >= 4);
    }

    private function advScore()
    {
        if ($this->getFirstPlayerPoint() - $this->getSecondPlayerPoint() >= 2) {
            return $this->winScore();
        }

        return $this->advPlayer() . ' Adv';
    }

    private function winScore()
    {
        return $this->advPlayer() . ' Win';
    }

    private function advPlayer()
    {
        if ($this->getFirstPlayerPoint() > $this->getSecondPlayerPoint()) {
            return $this->getFirstPlayerName();
        }

        return $this->getSecondPlayerName();
    }

    private function getFirstPlayerName()
    {
        return $this->firstPlayer->getName();
    }

    private function getSecondPlayerName()
    {
        return $this->secondPlayer->getName();
    }

    private function isSamePoint()
    {
        return ($this->getFirstPlayerPoint() == $this->getSecondPlayerPoint());
    }

    /**
     * @return string
     */
    private function samePointScore()
    {
        return ($this->getFirstPlayerPoint() >= 3)
            ? $this->deuceScore()
            : $this->lookup[$this->getFirstPlayerPoint()] . 'All';
    }

    /**
     * @return string
     */
    private function deuceScore()
    {
        return 'Deuce';
    }

    /**
     * @return string
     */
    private function normalScore()
    {
        return $this->lookup[$this->getFirstPlayerPoint()] . $this->lookup[$this->getSecondPlayerPoint()];
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
        for ($i = 0; $i < $point; $i++) {
            $this->secondPlayer->winPoint();
        }
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
