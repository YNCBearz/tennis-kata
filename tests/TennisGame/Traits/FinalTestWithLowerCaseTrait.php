<?php

namespace Tests\TennisGame\Traits;

trait FinalTestWithLowerCaseTrait
{
    /**
     * @return mixed[][]
     */
    public function data(): array
    {
        return [
            '0-0' => [0, 0, "love all"],
            '1-1' => [1, 1, "fifteen all"],
            '2-2' => [2, 2, "thirty all"],
            '3-3' => [3, 3, "deuce"],
            '4-4' => [4, 4, "deuce"],
            '1-0' => [1, 0, "fifteen love"],
            '0-1' => [0, 1, "love fifteen"],
            '2-0' => [2, 0, "thirty love"],
            '0-2' => [0, 2, "love thirty"],
            '3-0' => [3, 0, "forty love"],
            '0-3' => [0, 3, "love forty"],
            '4-0' => [4, 0, "bear win"],
            '0-4' => [0, 4, "lin win"],
            '2-1' => [2, 1, "thirty fifteen"],
            '1-2' => [1, 2, "fifteen thirty"],
            '3-1' => [3, 1, "forty fifteen"],
            '1-3' => [1, 3, "fifteen forty"],
            '4-1' => [4, 1, "bear win"],
            '1-4' => [1, 4, "lin win"],
            '3-2' => [3, 2, "forty thirty"],
            '2-3' => [2, 3, "thirty forty"],
            '4-2' => [4, 2, "bear win"],
            '2-4' => [2, 4, "lin win"],
            '4-3' => [4, 3, "bear adv"],
            '3-4' => [3, 4, "lin adv"],
            '5-4' => [5, 4, "bear adv"],
            '4-5' => [4, 5, "lin adv"],
            '15-14' => [15, 14, "bear adv"],
            '14-15' => [14, 15, "lin adv"],
            '6-4' => [6, 4, "bear win"],
            '4-6' => [4, 6, "lin win"],
            '16-14' => [16, 14, "bear win"],
            '14-16' => [14, 16, "lin win"],
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
