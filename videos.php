<?php

header('Content-Type: application/json');

$data = require_once "data/yt.php";

echo json_encode($data);