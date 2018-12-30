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

            if ($firstRoll === 10) {
                $points += $frames[$i+1]->getFirstRoll();
                $points += $frames[$i+1]->getSecondRoll();
            } elseif ($firstRoll + $secondRoll === 10) {
                $points += $frames[$i+1]->getFirstRoll();
            }

        }
        return $points;
    }
}