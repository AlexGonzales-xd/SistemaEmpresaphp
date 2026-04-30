<?php
define("TITLE", "ASISTENSIA");

// Leemos el archivo .env que esta en el archivo.
$envFile = dirname(__DIR__) . '/.env';
# "Localhost/sistema-asistencia/.env"
if(file_exists($envFile)) {
    // Recorremos cada linea del archivo .env, omitiendo lineas vacias y comentarios.
    foreach(file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $line) {
        // Condicional -> Ignoramos lineas que comienzan con # (comentarios).
        if(strpos(trim($line), '#')) continue;
        // Separamos la linea en clave y valor (ejemplo: DB_HOST=localhost).
        [$key, $value] = explode('=', $line, 2);  
        $_ENV[trim($key)] = trim($value); // Guardamos la clave y valor en la variable de entorno $_ENV.  
    }   
}

// # PHP NO SE PUEDE LEER ARCHIVOS . ENV
define("DB_HOST", $_ENV['DB_HOST'] ?? 'localhost');
define("DB_PORT", $_ENV['DB_PORT'] ?? '3306');
define("DB_NAME", $_ENV['DB_DATABASE'] ?? '');
define("DB_USER", $_ENV['DB_USERNAME'] ?? 'root');
define("DB_PASS", $_ENV['DB_PASS'] ?? '');