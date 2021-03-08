<?php

$check = [];
$check[0] = require_once "data/donating.php";
$check[1] = require_once "data/writing.php";
$check[2] = require_once "data/yt.php";

if (gettype($check[0]) == 'array' && gettype($check[1]) == 'array' && gettype($check[2]) == 'array') {
	echo "OK";
} else {
	echo "ERROR";
}
