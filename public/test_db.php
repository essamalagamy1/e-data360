<?php

$t0 = microtime(true);
header('Content-Type: text/plain');

echo "=== E-DATA360 Server Probe ===\n";
echo "PHP SAPI: " . PHP_SAPI . "\n";
echo "PHP Version: " . PHP_VERSION . "\n";
echo "Server Software: " . ($_SERVER['SERVER_SOFTWARE'] ?? 'CLI') . "\n";
echo "Remote Addr: " . ($_SERVER['REMOTE_ADDR'] ?? 'CLI') . "\n\n";

// 1. Check if .env is readable
$envPath = dirname(__DIR__) . '/.env';
if (!file_exists($envPath)) {
    echo "ERROR: .env not found at $envPath\n";
    exit;
}

$env = parse_ini_file($envPath);
$dbHost = $env['DB_HOST'] ?? '127.0.0.1';
$dbName = $env['DB_DATABASE'] ?? '';
$dbUser = $env['DB_USERNAME'] ?? '';
$dbPass = $env['DB_PASSWORD'] ?? '';
$sessionDriver = $env['SESSION_DRIVER'] ?? '';
$cacheStore = $env['CACHE_STORE'] ?? '';

echo "Config in .env:\n";
echo "  DB_HOST: $dbHost\n";
echo "  DB_DATABASE: $dbName\n";
echo "  DB_USERNAME: $dbUser\n";
echo "  SESSION_DRIVER: $sessionDriver\n";
echo "  CACHE_STORE: $cacheStore\n\n";

// 2. Test Direct PDO MySQL Connection
$tDb0 = microtime(true);
echo "Testing MySQL connection to $dbHost ($dbName)...\n";
try {
    $pdo = new PDO("mysql:host=$dbHost;dbname=$dbName;charset=utf8mb4", $dbUser, $dbPass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ]);
    $tDb1 = microtime(true);
    echo "  -> SUCCESS in " . round(($tDb1 - $tDb0) * 1000, 2) . " ms\n";
} catch (Exception $e) {
    $tDb1 = microtime(true);
    echo "  -> FAILED after " . round(($tDb1 - $tDb0) * 1000, 2) . " ms: " . $e->getMessage() . "\n";
}

// 3. Test Laravel Bootstrapping
echo "\nTesting Laravel Full Bootstrapping...\n";
$tL0 = microtime(true);
require dirname(__DIR__) . '/vendor/autoload.php';
$app = require_once dirname(__DIR__) . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$tL1 = microtime(true);
echo "  -> Bootstrap loaded in " . round(($tL1 - $tL0) * 1000, 2) . " ms\n";

// 4. Test Web Route Request through Laravel
$tR0 = microtime(true);
$request = Illuminate\Http\Request::create('/', 'GET');
$response = $kernel->handle($request);
$tR1 = microtime(true);
echo "  -> Full Route '/' handled in " . round(($tR1 - $tR0) * 1000, 2) . " ms\n";
echo "  -> Response Status: " . $response->getStatusCode() . "\n";

$tTotal = microtime(true) - $t0;
echo "\n==============================\n";
echo "Total Script Time: " . round($tTotal * 1000, 2) . " ms (" . round($tTotal, 2) . "s)\n";
