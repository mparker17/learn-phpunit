<?php

use \Mpd\BowlingKata\BowlingGame;

class BowlingGameTest extends PHPUnit_Framework_TestCase {
    private $game;

    function setUp() {
        $this->game = new BowlingGame();
    }

    function testBowlAllZeroes() {
        $this->rollMany(20, 0);

        $this->assertSame(0, $this->game->score());
    }

    function testBowlAllOnes() {
        $this->rollMany(20, 1);

        $this->assertSame(20, $this->game->score());
    }

    function testSpare() {
        // First frame.
        $this->game->roll(5);
        $this->game->roll(5);

        // Second frame.
        $this->game->roll(6);
        $this->game->roll(0);

        // Remainder of the frames
        $this->rollMany(16, 0);

        $this->assertSame(22, $this->game->score());
    }

    private function rollMany($how_many, $pins) {
        for ($i = 0; $i < $how_many; $i++) {
            $this->game->roll($pins);
        }
    }
}
