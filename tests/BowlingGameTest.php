<?php

use \Mpd\BowlingKata\BowlingGame;

class BowlingGameTest extends PHPUnit_Framework_TestCase {
    function testBowlAllZeroes() {
        $game = new BowlingGame();

        // Roll a bunch of zeroes.
        $game->roll(0);
        $game->roll(0);
        $game->roll(0);
        $game->roll(0);
        $game->roll(0);
        $game->roll(0);
        $game->roll(0);
        $game->roll(0);
        $game->roll(0);
        $game->roll(0);

        $this->assertSame(0, $game->score());
    }
}
