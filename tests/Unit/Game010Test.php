<?php
namespace Tests\Unit;

use App\TennisGame\Game010;
use PHPUnit\Framework\TestCase;

class Game010Test extends TestCase
{
    private $game;

    protected function setUp(): void
    {
        parent::setUp();
        $this->game = new Game010();
    }

}