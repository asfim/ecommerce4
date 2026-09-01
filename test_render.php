<?php
require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();
$c = app()->make(\App\Http\Controllers\Frontend\HomeController::class);
echo $c->index()->render();
