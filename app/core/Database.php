<?php

// Clase para conectarse con la base de datos utilizando PDO.
class Database {

    // Guardamos la conexion con el modificador de acceso STATIC para que sea accesible sin necesidad de instanciar la clase.
    // El ? significa que la variable puede ser de tipo PDO o null, lo que permite manejar la conexión de manera segura y eficiente.
    private static ?PDO $connection = null;
    
    // Este método devuelve la conexión a la base de datos, si no existe, la crea.
    public static function getConnection(): PDO {
        // Si en caso no encuentra la conexion.
         if(self::$connection === null) {
             // Armamos la conecion con los datos de .ENV
             $dns= "mysql:host=" . DB_HOST . ";port=" . DB_PORT . ";dbname=" . DB_NAME";charset=utf8mb4";
         }
         //Creamos un retorno de valores
         return self::$connection;     
    }           
}