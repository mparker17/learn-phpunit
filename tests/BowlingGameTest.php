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

    function testBowlAllOnes() {
        $game = new BowlingGame();

        // Roll a bunch of ones; two balls per frame.
        for ($i = 0; $i < 20; $i++) {
            $game->roll(1);
        }

        $this->assertSame(20, $game->score());
    }
}
