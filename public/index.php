<?php

use Http\Request;

require __DIR__ . '/../vendor/autoload.php';

session_start();

$request = new Request();

$request->send();
