<?php

namespace App;

class Frame
{
    public $gameId;
    public $firstRoll;
    public $secondRoll;

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

}