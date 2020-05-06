<?php
namespace App\TennisGame;

class Game011
{
    private $p1Point = 0;

    private $p2Point = 0;

    private $lookup = [
        0 => 'Love',
        1 => 'Fifteen',
        2 => 'Thirty',
        3 => 'Forty'
    ];

    public function score()
    {
        if ($this->p1Point > 0 || $this->p2Point > 0) {
            return $this->player1Score() . '-' . $this->player2Score();
        }

        return 'Love-All';
    }

    private function player1Score()
    {
        return $this->lookup[$this->p1Point];
    }

    private function player2Score()
    {
        return $this->lookup[$this->p2Point];
    }

    public function player1WinPoint($point = 1)
    {
        for ($i = 1 ; $i <= $point ; $i++) {
            $this->p1Point++;
        }
    }

    public function player2WinPoint()
    {
        $this->p2Point++;
    }

}