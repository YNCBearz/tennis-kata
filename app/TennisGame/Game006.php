<?php
namespace App\TennisGame;

class Game006
{
    /**
     * @var int $player1Point
     */
    protected $player1Point = 0;


    protected $lookup = [
        0 => 'Love',
        1 => 'Fifteen',
        2 => 'Thirty',
        3 => 'Forty'
    ];

    public function score()
    {
        if ($this->player1Point > 0) {
            return $this->lookup[$this->player1Point] . '-Love';
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