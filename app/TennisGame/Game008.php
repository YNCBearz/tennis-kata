<?php
namespace App\TennisGame;

class Game008
{
    private $firstPlayerPoint = 0;

    private $lookup = [
        0 => 'Love',
        1 => 'Fifteen',
        2 => 'Thirty',
        3 => 'Forty'
    ];

    public function score()
    {
        if ($this->firstPlayerPoint > 0) {
            return $this->lookup[$this->firstPlayerPoint] . '-Love';
        }

        return 'Love-All';
    }

    public function firstPlayerWinPoint($point = 1)
    {
        for ($i = 1; $i <= $point ; $i++) {
            $this->firstPlayerPoint++;
        }
    }
}