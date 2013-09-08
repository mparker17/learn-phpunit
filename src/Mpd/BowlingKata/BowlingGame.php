<?php

namespace Mpd\BowlingKata;

class BowlingGame {
    private $rolls = array();

    public function score() {
        $answer = 0;

        foreach ($this->rolls as $roll) {
            $answer += $roll;
        }

        return $answer;
    }

    public function roll($pins) {
        array_push($this->rolls, $pins);
    }
}
