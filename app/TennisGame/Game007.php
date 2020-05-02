<?php
namespace App\TennisGame;

class Game007
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
        if ($this->firstPlayerPoint == $this->secondPlayerPoint) {
            return $this->lookup[$this->firstPlayerPoint] . '-All';
        }

        if ($this->firstPlayerPoint > 0 || $this->secondPlayerPoint > 0) {
            return $this->lookup[$this->firstPlayerPoint] . '-' . $this->lookup[$this->secondPlayerPoint];
        }
    }

    public function firstPlayerWinPoints($point = 1)
    {
        for ($i = 1 ; $i <= $point ; $i++) {
            $this->firstPlayerPoint++;
        }
    }

    public function secondPlayerWinPoints($point = 1)
    {
        for ($i = 1 ; $i <= $point ; $i++) {
            $this->secondPlayerPoint++;
        }
    }
}