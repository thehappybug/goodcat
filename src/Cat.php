<?php 

namespace thehappybug\GoodCat;

/**
* Generate a good cat ASCII art
*/
class Cat
{
	public static function speak() {
		$cat = '' .
		" /\\___/\\\n" .
		"(  o o  )\n" .
		"/   *   \\\n" .
		"\\__\\_/__/ meow!\n" .
		"  /   \\\n" .
		" / ___ \\\n" .
		' \\/___\\/';
		
		return $cat;
	}
}