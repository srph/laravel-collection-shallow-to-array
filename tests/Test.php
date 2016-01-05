<?php

use Illuminate\Support\Collection;

class Test extends PHPUnit_Framework_TestCase {
	public function testShouldReturnAnArray() {
		$collection = new Collection();
		$result = collection_shallow_to_array($collection);
		$this->assertEquals($result, []);
	}

	public function testShouldHaveEqualValues() {
		$input = [1, 2, 3, 4, 5];
		$collection = new Collection($input);
		$result = collection_shallow_to_array($collection);
		$this->assertEquals($result, $input);
	}
}