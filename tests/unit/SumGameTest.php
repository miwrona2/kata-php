<?php
// require __DIR__.'/../../vendor/autoload.php';

use App\Frame;
use App\SumGame;
class SumGameTest extends \Codeception\TestCase\Test
{

    protected function _before()
    {

    }

    protected function _after()
    {
    }

    public function test1()
    {
        $firstGameId = 1;

        $frame1 = new Frame();
        $frame1->setGameId($firstGameId);
        $frame1->setFirstRoll(4);
        $frame1->setSecondRoll(5);

        $frame2 = new Frame();
        $frame2->setGameId($firstGameId);
        $frame2->setFirstRoll(5);
        $frame2->setSecondRoll(5);

        $frame3 = new Frame();
        $frame3->setGameId($firstGameId);
        $frame3->setFirstRoll(3);
        $frame3->setSecondRoll(1);

        $frame4 = new Frame();
        $frame4->setGameId($firstGameId);
        $frame4->setFirstRoll(0);
        $frame4->setSecondRoll(0);

        $frame5 = new Frame();
        $frame5->setGameId($firstGameId);
        $frame5->setFirstRoll(10);
        $frame5->setSecondRoll(0);

        $frame6 = new Frame();
        $frame6->setGameId($firstGameId);
        $frame6->setFirstRoll(1);
        $frame6->setSecondRoll(2);

        $frame7 = new Frame();
        $frame7->setGameId($firstGameId);
        $frame7->setFirstRoll(0);
        $frame7->setSecondRoll(0);

        $frame8 = new Frame();
        $frame8->setGameId($firstGameId);
        $frame8->setFirstRoll(0);
        $frame8->setSecondRoll(0);

        $frame9 = new Frame();
        $frame9->setGameId($firstGameId);
        $frame9->setFirstRoll(0);
        $frame9->setSecondRoll(0);

        $frame10 = new Frame();
        $frame10->setGameId($firstGameId);
        $frame10->setFirstRoll(0);
        $frame10->setSecondRoll(0);

        $frames = [
            $frame1,
            $frame2,
            $frame3,
            $frame4,
            $frame5,
            $frame6,
            $frame7,
            $frame8,
            $frame9,
            $frame10
        ];
        $sumGame = new SumGame();
        $sum = $sumGame->sum($frames);

        $this->assertEquals(42, $sum);
    }
}