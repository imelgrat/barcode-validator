<?php
	/**
	 * @author Ivan Melgrati
	 * @copyright 2018
	 */
	require_once ('../src/CodeValidator.php');

	$code = '490154203237518';
	echo CodeValidator::IsValidIMEI($code) ? 'true' : 'false'. '<br>';
?>