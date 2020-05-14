<?php

namespace App\TennisGame;

class Game017
{
    private $firstPlayerPoint = 0;

    private $lookup = [
        1 => 'Fifteen',
        2 => 'Thirty'
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
        for ($i = 0; $i < $point; $i++) {
            $this->firstPlayerPoint++;
        }
    }
}
