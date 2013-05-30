<?php

use \Mpd\BowlingKata\BowlingGame;

class BowlingGameTest extends PHPUnit_Framework_TestCase {
    private $game;

    function setUp() {
        $this->game = new BowlingGame();
    }

    function testBowlAllZeroes() {
        $this->rollMany(0);

        $this->assertSame(0, $this->game->score());
    }

    function testBowlAllOnes() {
        $this->rollMany(1);

        $this->assertSame(20, $this->game->score());
    }

    private function rollMany($n) {
        // Roll two balls per frame.
        for ($i = 0; $i < 20; $i++) {
            $this->game->roll($n);
        }
    }
}
