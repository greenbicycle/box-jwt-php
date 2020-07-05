<?php

/**
 * Import autoloader.
 */
require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = new Dotenv\Dotenv(__DIR__ . '/../');
$dotenv->load();

/**
 * Import helpers.
 */
require_once __DIR__ . '/../helpers/helpers.php';