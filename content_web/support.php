<?php 
//--------------------------------------
// Support Functions
// Tyler J. Sawyer
// 12:35 on October 29, 2013 (Tuesday)
//--------------------------------------
/* ----------------------------------------------------------------------------------------------- */
/**
* stringSecure : This function verifies the tested input string is 'clean' for 
* submission into a database or use in later php functions. We remove any extra 
* 'white space' and 'slashes', and convert any characters to html entities if necessary.
*
* Last Updated: 12:17 on October 29, 2013 (Tuesday)
* 
* @version 0.1
* @author Tyler J. Sawyer
* @access private
* @param string String to test for any bad/extraneous characters.
* @return string Resulting 'clean' string. 
*/ 
function stringSecure ($string) {
	// Trim extra whitespace, newline or tab characters from the input.
	$string = trim($string);
	// Remove any extra slashes or backslashes
	$string = stripslashes($string);
	// Convert any characters to their html entity format 
	// Safety guard vs. injection
	$string = htmlspecialchars($string);
	// Return result
	return $string;
}
/* ----------------------------------------------------------------------------------------------- */
/**
* stringSanitize : This function verifies the tested input string is 'clean' by removing 
* unnecessary characters (or tags) and returns the resulting string.
*
* Last Updated: 12:45 on October 29, 2013 (Tuesday)
* 
* @version 0.1
* @author Tyler J. Sawyer
* @access private
* @param string String to test for any bad/extraneous characters.
* @return string Resulting 'sanitized' string. 
*/ 
function stringSanitize ($string) {
	// use the filter_var function (PHP 5.2 +) to determine if string is proper.
	// eg. $string = "<script>Dahaha</script>";
	// stringSanitize($string)
	// $string is now "Dahaha".
	return filter_var($string, FILTER_SANITIZE_STRING);
}
/* ----------------------------------------------------------------------------------------------- */
/**
* verifyAlphaNum : This function will return a boolean value (true/false) and determines 
* whether or not a test string contains alpha numeric characters exclusively. 
*
* Last Updated: 12:26 on October 29, 2013 (Tuesday)
* 
* @version 0.1
* @author Tyler J. Sawyer
* @access private
* @param string testString to test for any bad/extraneous characters.
* @return boolean True or False depending on the alpha numeric validity of testString. 
*/ 
function verifyAlphaNum ($testString) {
    // Check for letters, numbers and dash, period, space and single quote only. 
    return (preg_match ("/^([[:alnum:]]|-|\.| |')+$/", $testString));
}
/* ----------------------------------------------------------------------------------------------- */
/**
* verifyEmail : Function returns a boolean value (true/false) after determining 
* whether a test string has proper email formatting. 
*
* Last Updated: 12:30 on October 29, 2013 (Tuesday)
* 
* @version 0.1
* @author Tyler J. Sawyer
* @access private
* @param string testString to test for proper email string format.
* @return boolean True or False depending on the formatting of the testString. 
*/ 
function verifyEmail ($testString) {
    // Check for a valid email address 
    return (preg_match("/^([[:alnum:]]|_|\.|-)+@([[:alnum:]]|\.|-)+(\.)([a-z]{2,4})$/", $testString));
}
/* ----------------------------------------------------------------------------------------------- */
/**
* getIP : Function returns a string value containing the user's remote address seen by the server.
*
* Last Updated: 16:58 on October 29, 2013 (Tuesday)
* 
* @version 0.1
* @author Tyler J. Sawyer
* @access private
* @return string containing remote address (ip) of user.
*/ 
function getIP () {
    // Return SERVER REMOTE ADDR 
    return $_SERVER['REMOTE_ADDR'];
}
/* ----------------------------------------------------------------------------------------------- */
?>