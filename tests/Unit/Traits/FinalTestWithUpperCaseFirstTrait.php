<?php

namespace Tests\Unit\Traits;

trait FinalTestWithUpperCaseFirstTrait
{
    /**
     * @return mixed[][]
     */
    public function data(): array
    {
        return [
            '0-0' => [0, 0, "Love All"],
            '1-1' => [1, 1, "Fifteen All"],
            '2-2' => [2, 2, "Thirty All"],
            '3-3' => [3, 3, "Deuce"],
            '4-4' => [4, 4, "Deuce"],
            '1-0' => [1, 0, "Fifteen Love"],
            '0-1' => [0, 1, "Love Fifteen"],
            '2-0' => [2, 0, "Thirty Love"],
            '0-2' => [0, 2, "Love Thirty"],
            '3-0' => [3, 0, "Forty Love"],
            '0-3' => [0, 3, "Love Forty"],
            '4-0' => [4, 0, "Bear Win"],
            '0-4' => [0, 4, "Lin Win"],
            '2-1' => [2, 1, "Thirty Fifteen"],
            '1-2' => [1, 2, "Fifteen Thirty"],
            '3-1' => [3, 1, "Forty Fifteen"],
            '1-3' => [1, 3, "Fifteen Forty"],
            '4-1' => [4, 1, "Bear Win"],
            '1-4' => [1, 4, "Lin Win"],
            '3-2' => [3, 2, "Forty Thirty"],
            '2-3' => [2, 3, "Thirty Forty"],
            '4-2' => [4, 2, "Bear Win"],
            '2-4' => [2, 4, "Lin Win"],
            '4-3' => [4, 3, "Bear Adv"],
            '3-4' => [3, 4, "Lin Adv"],
            '5-4' => [5, 4, "Bear Adv"],
            '4-5' => [4, 5, "Lin Adv"],
            '15-14' => [15, 14, "Bear Adv"],
            '14-15' => [14, 15, "Lin Adv"],
            '6-4' => [6, 4, "Bear Win"],
            '4-6' => [4, 6, "Lin Win"],
            '16-14' => [16, 14, "Bear Win"],
            '14-16' => [14, 16, "Lin Win"],
        ];
    }

    /**
     * @param int $firstPlayerPoint
     * @param int $secondPlayerPoint
     * @param string $expected
     * @dataProvider data
     */
    public function testScore(int $firstPlayerPoint, int $secondPlayerPoint, string $expected)
    {
        if ($firstPlayerPoint > 0) {
            for ($i = 0; $i < $firstPlayerPoint; $i++) {
                $this->sut->firstPlayerWinPoint();
            }
        }

        if ($secondPlayerPoint > 0) {
            for ($i = 0; $i < $secondPlayerPoint; $i++) {
                $this->sut->secondPlayerWinPoint();
            }
        }

        $actual = $this->sut->score();
        $this->assertEquals($expected, $actual);
    }
}