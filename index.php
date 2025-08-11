<?php

/**
 * Punto de entrada principal para ISURGOB
 * Sistema de Administración Municipal modernizado
 * Compatible con EasyPanel y PHP 7.4+
 */

// Cargar variables de entorno si existe el archivo .env
if (file_exists(__DIR__ . '/.env')) {
    $lines = file(__DIR__ . '/.env', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos(trim($line), '#') === 0) {
            continue;
        }
        list($name, $value) = explode('=', $line, 2);
        $name = trim($name);
        $value = trim($value, '"\' ');
        if (!array_key_exists($name, $_SERVER) && !array_key_exists($name, $_ENV)) {
            putenv(sprintf('%s=%s', $name, $value));
            $_ENV[$name] = $value;
            $_SERVER[$name] = $value;
        }
    }
}

// Configuración del entorno
defined('YII_DEBUG') or define('YII_DEBUG', getenv('APP_DEBUG') === 'true' || getenv('APP_ENV') === 'development');
defined('YII_ENV') or define('YII_ENV', getenv('APP_ENV') ?: 'production');

// Configuración de errores para desarrollo
if (YII_ENV_DEV) {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
} else {
    error_reporting(0);
    ini_set('display_errors', 0);
}

// Configuración de zona horaria
date_default_timezone_set(getenv('APP_TIMEZONE') ?: 'America/Argentina/Buenos_Aires');

// Configuración de memoria y tiempo de ejecución
ini_set('memory_limit', '256M');
ini_set('max_execution_time', 300);

// Cargar autoloader de Composer y Yii
require __DIR__ . '/yii/autoload.php';
require __DIR__ . '/yii/yiisoft/yii2/Yii.php';

// Cargar configuración de la aplicación
$config = require __DIR__ . '/config/web.php';

// Verificar modo de mantenimiento
if (isset($config['params']['maintenance']['enabled']) && $config['params']['maintenance']['enabled']) {
    $allowedIPs = $config['params']['maintenance']['allowedIPs'] ?? [];
    $clientIP = $_SERVER['REMOTE_ADDR'] ?? '';
    
    if (!in_array($clientIP, $allowedIPs)) {
        http_response_code(503);
        $message = $config['params']['maintenance']['message'] ?? 'Sistema en mantenimiento';
        echo "<!DOCTYPE html><html><head><title>Mantenimiento</title></head><body><h1>{$message}</h1></body></html>";
        exit;
    }
}

// Crear y ejecutar la aplicación
try {
    $application = new yii\web\Application($config);
    $application->run();
} catch (Exception $e) {
    if (YII_ENV_DEV) {
        throw $e;
    } else {
        error_log('Application Error: ' . $e->getMessage());
        http_response_code(500);
        echo "<!DOCTYPE html><html><head><title>Error</title></head><body><h1>Error interno del servidor</h1></body></html>";
    }
}

