<?php


function shapeSpace_truncate_text($text, $max = 50, $append = '&hellip;') {
	if (strlen($text) <= $max) return $text;
	$return = substr($text, 0, $max);
	if (strpos($text, ' ') === false) return $return . $append;
	return preg_replace('/\w+$/', '', $return) . $append;
}
//$text – The text string that you want to shorten
//$max – The maximum number of characters allowed (default = 50)
//$append – The appended text (default = ellipses)

//echo shapeSpace_truncate_text($text, 40, ' ..continued..');
?>

