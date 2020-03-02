<?php
namespace App\TennisGame;

class Game002
{
    private $p1_score = 0;
    private $p2_score = 0;

    private $lookup = [
        0 => 'Love',
        1 => 'Fifteen',
        2 => 'Thirty',
        3 => 'Forty',
    ];

    public function getScore()
    {
        return $this->isScoreEqual()
            ? $this->getEqualScore()
            : $this->getNormalScore();
    }

    private function getEqualScore()
    {
        return $this->isScoreOverThree()
            ? $this->getDeuceScore()
            : $this->getEqualScoreUnderTwo();
    }

    private function getDeuceScore()
    {
        return 'Deuce';
    }

    private function getNormalScore()
    {
        $p1_score = $this->p1_score;
        $p2_score = $this->p2_score;

        if ($this->isScoreOverFour()) {
            $advantage_player = $this->getAdvantagePlayer();

            if ($this->isScoreDiffOne()) {
                return $advantage_player .' advantage';
            }

            return $advantage_player . ' wins';
        }

        return $this->lookup[$p1_score] . '-' . $this->lookup[$p2_score];
    }

    private function getAdvantagePlayer()
    {
        if ($this->p1_score > $this->p2_score) {
            return 'player1';
        }

        return 'player2';
    }

    private function isScoreDiffOne()
    {
        return ($this->getScoreDiff() == 1);
    }

    private function getScoreDiff()
    {
        $p1_score = $this->p1_score;
        $p2_score = $this->p2_score;
        return abs($p1_score - $p2_score);
    }

    private function getEqualScoreUnderTwo()
    {
        $p1_score = $this->p1_score;
        return $this->lookup[$p1_score] . '-All';
    }

    private function isScoreOverThree()
    {
        return ($this->p1_score >= 3 || $this->p2_score >= 3);
    }

    private function isScoreOverFour()
    {
        return ($this->p1_score >= 4 || $this->p2_score >= 4);
    }

    public function player1Tally()
    {
        $this->p1_score++;
    }

    public function player2Tally()
    {
        $this->p2_score++;
    }

    private function isScoreEqual()
    {
        return ($this->p1_score == $this->p2_score);
    }
}