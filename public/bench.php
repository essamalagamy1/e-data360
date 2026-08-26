<?php

$t0 = microtime(true);

// 1. Raw PHP
$t1 = microtime(true);
$bench['01_raw_php_ms'] = round(($t1 - $t0) * 1000, 2);

// 2. Autoload
require __DIR__.'/../vendor/autoload.php';
$t2 = microtime(true);
$bench['02_composer_autoload_ms'] = round(($t2 - $t1) * 1000, 2);

// 3. Bootstrap Laravel App
/** @var \Illuminate\Foundation\Application $app */
$app = require_once __DIR__.'/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

// Boot app by capturing fake request
$request = Illuminate\Http\Request::create('/up', 'GET');
$response = $kernel->handle($request);

$t3 = microtime(true);
$bench['03_laravel_bootstrap_and_up_ms'] = round(($t3 - $t2) * 1000, 2);

// 4. Test Database Connection
try {
    $dbT0 = microtime(true);
    $pdo = \Illuminate\Support\Facades\DB::connection()->getPdo();
    $dbT1 = microtime(true);
    $bench['04_database_connection_ms'] = round(($dbT1 - $dbT0) * 1000, 2);
    
    // Quick query
    $qT0 = microtime(true);
    $res = \Illuminate\Support\Facades\DB::select('SELECT 1 as test');
    $qT1 = microtime(true);
    $bench['05_database_query_ms'] = round(($qT1 - $qT0) * 1000, 2);
} catch (\Throwable $e) {
    $bench['04_database_error'] = $e->getMessage();
}

// 5. Test Full Home Request Handling
$reqT0 = microtime(true);
$homeReq = Illuminate\Http\Request::create('/', 'GET');
$homeRes = $kernel->handle($homeReq);
$reqT1 = microtime(true);
$bench['06_full_home_request_ms'] = round(($reqT1 - $reqT0) * 1000, 2);

$bench['07_total_execution_ms'] = round((microtime(true) - $t0) * 1000, 2);

header('Content-Type: application/json');
echo json_encode($bench, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
