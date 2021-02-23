<?php

namespace App\TennisGame;

class Game025
{
    /**
     * @var integer
     */
    protected $firstPlayerPoint = 0;

    /**
     * @var integer
     */
    protected $secondPlayerPoint = 0;

    /**
     * @var string
     */
    protected $firstPlayer;

    /**
     * @var string
     */
    protected $secondPlayer;

    protected $lookup = [
        0 => 'Love',
        1 => 'Fifteen',
        2 => 'Thirty',
        3 => 'Forty'
    ];

    public function __construct($firstPlayer, $secondPlayer)
    {
        $this->firstPlayer = $firstPlayer;
        $this->secondPlayer = $secondPlayer;
    }

    public function score()
    {
        if ($this->firstPlayerPoint != $this->secondPlayerPoint) {
            if ($this->isAnyPlayerGet4Point()) {
                if ($this->isDiffMoreThan1Point()) {
                    return $this->gameSetScore();
                }

                return $this->advScore();
            }

            return $this->normalScore();
        }

        return ($this->firstPlayerPoint >= 3)
            ? $this->deuceScore()
            : $this->samePointScore();
    }

    private function gameSetScore()
    {
        return $this->advPlayer() . ' Win';
    }

    private function isDiffMoreThan1Point()
    {
        return abs($this->firstPlayerPoint - $this->secondPlayerPoint) > 1;
    }

    private function advScore()
    {
        return $this->advPlayer() . ' Adv';
    }

    private function isAnyPlayerGet4Point()
    {
        return ($this->firstPlayerPoint >= 4 || $this->secondPlayerPoint >= 4);
    }

    private function advPlayer()
    {
        return ($this->firstPlayerPoint > $this->secondPlayerPoint)
            ? $this->firstPlayer
            : $this->secondPlayer;
    }

    private function deuceScore()
    {
        return 'Deuce';
    }

    private function samePointScore()
    {
        return $this->lookup[$this->firstPlayerPoint] . '-All';
    }

    private function normalScore()
    {
        return $this->lookup[$this->firstPlayerPoint] . '-' . $this->lookup[$this->secondPlayerPoint];
    }

    /**
     * @param integer $point
     */
    public function firstPlayerWinPoint($point = 1)
    {
        for ($i = 0; $i < $point; $i++) {
            $this->firstPlayerPoint++;
        }
    }

    /**
     * @param integer $point
     */
    public function secondPlayerWinPoint($point = 1)
    {
        for ($i = 0; $i < $point; $i++) {
            $this->secondPlayerPoint++;
        }
    }
}
