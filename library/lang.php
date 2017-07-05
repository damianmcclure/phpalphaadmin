<?php
	$language = $_COOKIE['language'];
	if($language === NULL){
		setcookie('language', 'english');
	}
	include('library/lang/'.$language.'.php');
?>