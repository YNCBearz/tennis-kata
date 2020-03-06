<?php
namespace App\TennisGame;

class Game003
{
    private $p1_name;
    private $p2_name;
    private $p1_score = 0;
    private $p2_score = 0;

    private $lookup = [
        0 => 'Love',
        1 => 'Fifteen',
        2 => 'Thirty',
        3 => 'Forty'
    ];

    public function __construct($p1_name, $p2_name)
    {
        $this->p1_name = $p1_name;
        $this->p2_name = $p2_name;
    }

    public function getScore()
    {
        if ($this->isScoreEqual()) {
            return $this->getEqualScore();
        }

        if ($this->isScoreOverFour()) {
            $advantage_player = $this->getAdvantagePlayer();

            if ($this->isScoreDiffOverTwo()) {
                return $this->getWinScore();
            }

            return 'advantage ' . $advantage_player;
        }

        return $this->getNormalScore();
    }

    private function getWinScore()
    {
        $advantage_player = $this->getAdvantagePlayer();
        return $advantage_player . ' wins';
    }

    private function isScoreDiffOverTwo()
    {
        $score_diff = abs($this->p1_score - $this->p2_score);
        return ($score_diff >= 2);
    }

    private function getAdvantagePlayer()
    {
        if ($this->p1_score > $this->p2_score) {
            return $this->p1_name;
        }

        return $this->p2_name;
    }


    private function isScoreOverFour()
    {
        return ($this->p1_score >= 4 || $this->p2_score >= 4);
    }

    private function getEqualScore()
    {
        return $this->isScoreOverThree()
            ? $this->getDeuceScore()
            : $this->getEqualScoreUnderThree();
    }

    private function getEqualScoreUnderThree()
    {
        $p1_score = $this->p1_score;
        return $this->lookup[$p1_score] . '-All';
    }

    private function getNormalScore()
    {
        $p1_score = $this->p1_score;
        $p2_score = $this->p2_score;
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
