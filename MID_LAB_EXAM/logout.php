<?php

	session_start();
	unset($_SESSION['flag']);
	header('singin.html');

?>