<?php
namespace App\TennisGame;

class Game006
{
    /**
     * @var int $player1Point
     */
    protected $player1Point = 0;

    public function score()
    {
        if ($this->player1Point == 2) {
            return 'Thirty-Love';
        }

        if ($this->player1Point == 1) {
            return 'Fifteen-Love';
        }

        return 'Love-All';
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
}