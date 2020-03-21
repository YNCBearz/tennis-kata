<?php
namespace App\TennisGame;

class Game005
{
    protected $p1_score = 0;
    protected $p2_score = 0;

    protected $p1_name;
    protected $p2_name;

    public function __construct($p1_name, $p2_name)
    {
        $this->p1_name = $p1_name;
        $this->p2_name = $p2_name;
    }

    private $lookup = [
        0 => 'Love',
        1 => 'Fifteen',
        2 => 'Thirty',
        3 => 'Forty'
    ];

    public function getScore()
    {
        if ($this->isScoreDiffent()) {

            if ($this->isAnyPlayerScoreOver5()) {
                $advantage_player = $this->getAdvantagePlayer();
                return $advantage_player . ' Adv';
            }

            return $this->lookup[$this->p1_score] . '-' . $this->lookup[$this->p2_score];
        }

        return $this->getEqualScore();
    }

    private function isAnyPlayerScoreOver5()
    {
        return ($this->p1_score >= 5 || $this->p2_score >= 5);
    }

    private function getAdvantagePlayer()
    {
        return ($this->p1_score > $this->p2_score)
            ? $this->p1_name
            : $this->p2_name;
    }

    private function getDeuceScore()
    {
        return 'Deuce';
    }

    private function getEqualScore()
    {
        return ($this->p1_score >= 4)
            ? $this->getDeuceScore()
            : $this->getAllScore();

    }

    private function getAllScore()
    {
        return $this->lookup[$this->p1_score] . '-All';
    }

    public function player1Tally()
    {
        $this->p1_score++;
    }

    public function setPlayer1Score($score)
    {
        $this->p1_score = $score;
    }

    public function setPlayer2Score($score)
    {
        $this->p2_score = $score;
    }

    private function isScoreDiffent()
    {
        return ($this->p1_score !== $this->p2_score);
    }
}