<?php

namespace App;

class Frame
{
    public $gameId;
    public $firstRoll;
    public $secondRoll;
    public $thirdRoll;

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

    public function getThirdRoll()
    {
        return $this->thirdRoll ?: null;
    }

    public function setThirdRoll($thirdRoll): Frame
    {
        $this->thirdRoll = $thirdRoll;
        return $this;
    }

}