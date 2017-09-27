<?php
	$language = $_COOKIE['language'];
	if(!isset($language)){
		setcookie('language', 'english');
	}
	include('library/lang/'.$language.'.php');
?>
