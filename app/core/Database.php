<?php
class Database {// Clase para conectarse con la base de datos utilizando PDO.

    // Guardamos la conexion con el modificador de acceso STATIC para que sea accesible sin necesidad de instanciar la clase.
    // El ? significa que la variable puede ser de tipo PDO o null, lo que permite manejar la conexión de manera segura y eficiente.
    private static ?PDO $connection = null;
    
    // Este método devuelve la conexión a la base de datos, si no existe, la crea.
    public static function getConnection(): PDO {
        // Si en caso no encuentra la conexion.
         if(self::$connection === null) {
             // Armamos la conecion con los datos de .ENV
             $dns= "mysql:host=" . DB_HOST . ";port=" . DB_PORT . ";dbname=" . DB_NAME.";charset=utf8mb4";
             // Creamos la conexion de PDO
             self::$connection = new PDO($dns, DB_USER, DB_PASS,[
                // Si hay error, lanza una excepción en de fallar la conexión, lo que facilita la depuración y el manejo de errores.
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                //Los resultados de las consultas vienen como arrays asociativos, lo que facilita el acceso a los datos utilizando nombres de columnas en lugar de índices numéricos.
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
             ]);
              
         }
         //Creamos un retorno de valores
         return self::$connection;     
    }           
}
?>