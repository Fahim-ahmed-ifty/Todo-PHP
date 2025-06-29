<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Controllers\TaskController;

$controller = new TaskController();
$controller->index();
