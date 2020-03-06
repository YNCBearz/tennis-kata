<?php
namespace App\TennisGame;

class Game003
{
    private $p1_score = 0;
    private $p2_score = 0;

    private $lookup = [
        0 => 'Love',
        1 => 'Fifteen',
        2 => 'Thirty',
        3 => 'Forty'
    ];

    public function getScore()
    {
        $p1_score = $this->p1_score;
        $p2_score = $this->p2_score;

        if ($this->isScoreEqual()) {

            if ($this->isScoreOverThree()) {
                return $this->getDeuceScore();
            }

            return $this->lookup[$p1_score] . '-All';
        }

        return $this->lookup[$p1_score] . '-' . $this->lookup[$p2_score];
    }

    private function getDeuceScore()
    {
        return 'Deuce';
    }

    private function isScoreOverThree()
    {
        $p1_score = $this->p1_score;
        return ($p1_score >= 3);
    }

    private function isScoreEqual()
    {
        $p1_score = $this->p1_score;
        $p2_score = $this->p2_score;
        return ($p1_score == $p2_score);
    }

    public function setPlayer1Score($score)
    {
        $this->p1_score = $score;
    }

    public function setPlayer2Score($score)
    {
        $this->p2_score = $score;
    }
}
