<?php

use \Mpd\BowlingKata\BowlingGame;

class BowlingGameTest extends PHPUnit_Framework_TestCase {
    function testBowlAllZeroes() {
        $game = new BowlingGame();

        // Roll a bunch of zeroes; two balls per frame.
        for ($i = 0; $i < 20; $i++) {
            $game->roll(0);
        }

        $this->assertSame(0, $game->score());
    }
}
