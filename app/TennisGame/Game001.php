<?php

namespace App\TennisGame;

class Game001
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
        if ($this->isScoreEqual()) {
            return $this->getSameScore();
        }

        if ($this->isScoreOverThree()) {
            $advantage_player = $this->getAdvantagePlayer();

            if ($this->isScoreDiffOverOne()) {
                return $advantage_player . ' wins';
            }

            return $advantage_player . ' advantage';
        }

        return $this->getNormalScore();
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
        $p1_score = $this->p1_score;
        $p2_score = $this->p2_score;

        return ($p1_score == $p2_score);
    }

    private function isDeuce(): bool
    {
        $score = $this->p1_score;
        return ($score >= 4);
    }

    private function getSameScore()
    {
        $score = $this->p1_score;

        if ($this->isDeuce()) {
            return 'Deuce';
        }

        return $this->lookup[$score] . '-All';
    }

    private function getNormalScore()
    {
        $p1_score = $this->p1_score;
        $p2_score = $this->p2_score;

        return $this->lookup[$p1_score] . '-' . $this->lookup[$p2_score];
    }

    private function isScoreOverThree()
    {
        return ($this->p1_score > 3 || $this->p2_score > 3);
    }

    private function getAdvantagePlayer()
    {
        if ($this->p1_score > $this->p2_score) {
            return 'player1';
        }

        return 'player2';
    }

    private function isScoreDiffOverOne()
    {
        $score_diff = abs($this->p1_score - $this->p2_score);
        return ($score_diff > 1);
    }
}
