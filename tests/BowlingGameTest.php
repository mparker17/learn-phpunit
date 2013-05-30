<?php

use \Mpd\BowlingKata\BowlingGame;

class BowlingGameTest extends PHPUnit_Framework_TestCase {

	function testBowlAllZeroes() {
		$game = new BowlingGame();
		$this->assertSame(0, $game->score());
	}
}
