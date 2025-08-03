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

	function Name($name) {

   		// Trim leading and trailing whitespace
		$name = trim($name);

    	// Check if the name is empty
		if (empty($name)) {
			//return "Name cannot be empty.";
		}

    	// Check if the name contains only valid characters (letters, spaces, hyphens, apostrophes)
		if (!preg_match("/^[a-zA-ZÀ-ÿ\s'-]+$/u", $name)) {
			//return "Name contains invalid characters.";
		}

    	// Validation passed
		return true;

	}
	
	function Email($email) {

    	// Trim leading and trailing whitespace
		$email = trim($email);

    	// Check if the email is empty
		if (empty($email)) {
			//return "Email cannot be empty.";
		}

    	// Validate email format using PHP's built-in filter
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			//return "Invalid email format.";
		}

    	// Validation passed
		return true;

	}


}


?>