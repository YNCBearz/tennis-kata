<?php

namespace App\TennisGame;

class Game025
{
    /**
     * @var integer
     */
    protected $firstPlayerPoint = 0;

    protected $lookup = [
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

    /**
     * @param integer $point
     */
    public function firstPlayerWinPoint($point = 1)
    {
        for ($i = 0; $i < $point; $i++) {
            $this->firstPlayerPoint++;
        }
    }
}
