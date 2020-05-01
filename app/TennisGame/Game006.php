<?php
namespace App\TennisGame;

class Game006
{
    /**
     * @var int $player1Point
     */
    protected $player1Point = 0;

    /**
     * @var int $player2Point
     */
    protected $player2Point = 0;


    protected $lookup = [
        0 => 'Love',
        1 => 'Fifteen',
        2 => 'Thirty',
        3 => 'Forty'
    ];

    public function score()
    {
        if ($this->isSameScore()) {
            return $this->sameScore();
        }

        if ($this->isOver4Point()) {
            return ($this->isGameSet())
                ? $this->winScore()
                : $this->advScore();
        }

        return $this->normalScore();
    }

    private function normalScore()
    {
        return $this->lookup[$this->player1Point] . '-' . $this->lookup[$this->player2Point];
    }

    private function isGameSet()
    {
        return (abs($this->player1Point - $this->player2Point) >= 2);
    }

    private function winScore()
    {
        $advantagePlayer = $this->getAdvantagePlayer();
        return $advantagePlayer . ' Win';
    }

    private function advScore()
    {
        $advantagePlayer = $this->getAdvantagePlayer();
        return $advantagePlayer . ' Adv';
    }

    private function isOver4Point()
    {
        return ($this->player1Point >= 4 || $this->player2Point >= 4);
    }

    private function getAdvantagePlayer()
    {
        return ($this->player1Point > $this->player2Point)
            ? 'Player1'
            : 'Player2';
    }

    private function isSameScore()
    {
        return ($this->player1Point == $this->player2Point);
    }

    private function sameScore()
    {
        return ($this->player1Point >= 3)
            ? $this->deuceScore()
            : $this->sameScoreUnder3Point();
    }

    private function deuceScore()
    {
        return 'Deuce';
    }

    private function sameScoreUnder3Point()
    {
        return $this->lookup[$this->player1Point] . '-All';
    }

    /**
     * @param int $point
     */
    public function player1WinPoint($point = 1)
    {
        for ($i = 1; $i <= $point; $i++) {
            $this->player1Point++;
        }
    }

    /**
     * @param int $point
     */
    public function player2WinPoint($point = 1)
    {
        for ($i = 1; $i <= $point; $i++) {
            $this->player2Point++;
        }
    }
}