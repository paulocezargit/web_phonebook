<?php

class Validate{

	function PhoneNumber($number) {

		// Remove spaces, dashes, dots, and parentheses
		$number = preg_replace('/[\s\-\.\(\)]/', '', $number);

		// Regular expression patterns
		$patterns = [
			// Brazil: +55 or 0, followed by 10 or 11 digits
			'/^(\+55)?(0)?(\d{10,11})$/',

			// USA: +1 or 10-digit numbers
			'/^(\+1)?\d{10}$/',

			// Generic international format: + followed by 6 to 15 digits
			'/^\+\d{6,15}$/'
		];

		foreach ($patterns as $regex) {
			if (preg_match($regex, $number)) {
				return true;
			}
		}

		return false;

	}

}


?>