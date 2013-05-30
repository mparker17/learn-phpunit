<?php

namespace Mpd\BowlingKata;

class BowlingGame {

    private $score;

    public function score() {
        return $this->score;
    }

    public function roll($pins) {
        $this->score += $pins;
    }
}
