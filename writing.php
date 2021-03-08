<?php

header('Content-Type: application/json');

$data = require_once "data/writing.php";

echo json_encode($data);