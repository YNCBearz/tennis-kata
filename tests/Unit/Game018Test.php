<?php

namespace Tests\Unit;

use App\TennisGame\Game018;
use PHPUnit\Framework\TestCase;

class Game018Test extends TestCase
{
    private $game;

    protected function setUp(): void
    {
        parent::setUp();
        $this->game = new Game018();
    }
}
