
function validatePhoneNumber(number) {

    // Remove spaces, dashes, dots, and parentheses
	number = number.replace(/[\s\-.\(\)]/g, '');

    // Regular expression patterns
	const patterns = [
        // Brazil: +55 or 0, followed by 10 or 11 digits
		/^(\+55)?0?\d{10,11}$/,

        // USA: +1 or just 10 digits
		/^(\+1)?\d{10}$/,

        // Other international formats: + followed by 6 to 15 digits
		/^\+\d{6,15}$/
	];

	return patterns.some((regex) => regex.test(number));
	
}