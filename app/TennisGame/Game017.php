<?php

namespace App\TennisGame;

class Game017
{
    private $firstPlayerPoint = 0;

    private $secondPlayerPoint = 0;

    private $lookup = [
        0 => 'Love',
        1 => 'Fifteen',
        2 => 'Thirty',
        3 => 'Forty'
    ];
    public function score()
    {
        if ($this->secondPlayerPoint == 1) {
            return $this->lookup[$this->firstPlayerPoint] . '-' . $this->lookup[$this->secondPlayerPoint];
        }

        if ($this->firstPlayerPoint > 0) {
            return $this->lookup[$this->firstPlayerPoint] . '-Love';
        }

        return 'Love-All';
    }

    public function secondPlayerWinPoint($point = 1)
    {
        // for ($i = 0; $i < $point; $i++) {
        $this->secondPlayerPoint++;
        // }
    }

    public function firstPlayerWinPoint($point = 1)
    {
        for ($i = 0; $i < $point; $i++) {
            $this->firstPlayerPoint++;
        }
    }
}
