<?php

include('info.php');

	$dbh = new PDO('mysql:host='. $host .';dbname='. $dbname, $user, $pass);
	$dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);