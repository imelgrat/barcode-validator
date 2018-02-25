<?php
	/**
	 * @author Ivan Melgrati
	 * @copyright 2018
	 */
	require_once ('../src/code-validator.php');

	$code = '490154203237518';
	echo 'Is IMEI code "'.$code.'" valid? '. (CodeValidator::IsValidIMEI($code) ? 'true' : 'false'). '<br>';
	
	$code = '9780596100674';
	echo 'Is ISBN "'.$code.'" valid? '. (CodeValidator::IsValidISBN($code, 13) ? 'true' : 'false'). '<br>';
?>