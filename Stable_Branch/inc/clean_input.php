<?php
	// Pattern für preg_match()
	$patternInteger = '/^[0-9]+$/';
	$patternEmail = '/^.{2,}@.{2,}\..{2,}$/';
	
	// beseitigt Tags und escapet Quotes --> verhindert XSS und SQL-Injection
	function cleanInputString($verbindung, $value) {
		return mysqli_real_escape_string($verbindung, strip_tags($value));
	}

	// beseitigt Tags und prüft den String mittels des 	Patterns --> verhindert XSS und	SQL-Injection
	function cleanInputStringByPattern($verbindung, $value, $pattern) {
		$value = mysqli_real_escape_string($verbindung,	strip_tags($value));
		if (preg_match($pattern, $value)) {
			return $value;
		}
		else {
			return '';
		}
	}
?>