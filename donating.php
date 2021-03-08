<?php

header('Content-Type: application/json');

$data = require_once "data/donating.php";

echo json_encode($data);