<?php

// api/index.php (Vercel entry point for Laravel)

// Change working directory to project root
chdir(dirname(__DIR__));

// Autoload dependencies
require 'vendor/autoload.php';

// Load Laravel app
$app = require_once 'bootstrap/app.php';

// Handle the request
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);
$response->send();
$kernel->terminate($request, $response);
