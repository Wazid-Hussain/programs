<?php

	/*============================================================
	PHP script to generate simple random password
	=============================================================*/


	echo "<b><u>Q : Write a PHP script to generate simple random password ?</b></u> <br>";

	echo "<hr>";
	
	$str = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz!@#$%^&*()_+';

	$str_sfl = str_shuffle($str);

	$pass = substr($str_sfl, 0, 8);

	echo "$pass";
?>