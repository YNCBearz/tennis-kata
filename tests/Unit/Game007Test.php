<?php
namespace Tests\Unit;

use App\TennisGame\Game007;
use PHPUnit\Framework\TestCase;

class Game007Test extends TestCase
{
    protected $game;

    protected function setUp(): void
    {
        parent::setUp();
        $this->game = new Game007();
    }

    public function testLoveAll()
    {
        $expected = 'Love-All';

        $actual = $this->game->score();
        $this->assertEquals($expected, $actual);
    }

    public function testFifteenLove()
    {
        $expected = 'Fifteen-Love';

        $this->game->firstPlayerWinPoints();
        $actual = $this->game->score();

        $this->assertEquals($expected, $actual);
    }


}
