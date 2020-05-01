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
        if ($this->player1Point == 1) {
            return 'Fifteen-Love';
        }

        return 'Love-All';
    }

    public function player1WinPoint()
    {
        $this->player1Point++;
    }
}