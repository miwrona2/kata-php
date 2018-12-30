<?php

class SumGame
{
    public function sum(array $frames): int
    {
        $points = 0;
        for ($i = 0; $i <= count($frames) - 1; $i++) {
            /** @var Frame[] $frames */
            $frame = $frames[$i];
            $firstRoll = $frame->getFirstRoll();
            $secondRoll = $frame->getSecondRoll();
            $framePoints = $firstRoll + $secondRoll;
            $points += $framePoints;
            
        }
        return $points;
    }
}


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

        $frame1 = new \FitCompany\Models\Entities\Kudos\Frame();
        $frame1->setGameId($firstGameId);
        $frame1->setFirstRoll(4);
        $frame1->setSecondRoll(5);

        $frame2 = new \FitCompany\Models\Entities\Kudos\Frame();
        $frame2->setGameId($firstGameId);
        $frame2->setFirstRoll(0);
        $frame2->setSecondRoll(0);

        $frame3 = new \FitCompany\Models\Entities\Kudos\Frame();
        $frame3->setGameId($firstGameId);
        $frame3->setFirstRoll(0);
        $frame3->setSecondRoll(0);

        $frame4 = new \FitCompany\Models\Entities\Kudos\Frame();
        $frame4->setGameId($firstGameId);
        $frame4->setFirstRoll(0);
        $frame4->setSecondRoll(0);

        $frame5 = new \FitCompany\Models\Entities\Kudos\Frame();
        $frame5->setGameId($firstGameId);
        $frame5->setFirstRoll(0);
        $frame5->setSecondRoll(0);

        $frame6 = new \FitCompany\Models\Entities\Kudos\Frame();
        $frame6->setGameId($firstGameId);
        $frame6->setFirstRoll(0);
        $frame6->setSecondRoll(0);

        $frame7 = new \FitCompany\Models\Entities\Kudos\Frame();
        $frame7->setGameId($firstGameId);
        $frame7->setFirstRoll(0);
        $frame7->setSecondRoll(0);

        $frame8 = new \FitCompany\Models\Entities\Kudos\Frame();
        $frame8->setGameId($firstGameId);
        $frame8->setFirstRoll(0);
        $frame8->setSecondRoll(0);

        $frame9 = new \FitCompany\Models\Entities\Kudos\Frame();
        $frame9->setGameId($firstGameId);
        $frame9->setFirstRoll(0);
        $frame9->setSecondRoll(0);

        $frame10 = new \FitCompany\Models\Entities\Kudos\Frame();
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

        $this->assertEquals(9, $sum);
    }


class Frame
{
    public $gameId;
    public $firstRoll;
    public $secondRoll;

    /**
     * @return mixed
     */
    public function getFirstRoll()
    {
        return $this->firstRoll;
    }


    public function setFirstRoll($firstRoll): Frame
    {
        $this->firstRoll = $firstRoll;
        return $this;
    }

    public function getGameId()
    {
        return $this->gameId;
    }

    public function setGameId($gameId): Frame
    {
        $this->gameId = $gameId;
        return $this;
    }

    public function getSecondRoll()
    {
        return $this->secondRoll;
    }

    public function setSecondRoll($secondRoll): Frame
    {
        $this->secondRoll = $secondRoll;
        return $this;
    }


?>