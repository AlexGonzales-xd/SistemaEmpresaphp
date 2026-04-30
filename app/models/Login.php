<?php
//Creamos una clase para el usuario - Login
class Login{
    // Variable para guardar la conexión a la base de datos
    private PDO $pdo;
    // Al crear el modelo, obtenemos la conexión automaticamente
    public function __construct() {
        $this->db = Database::getConnection();
    }
    // Buscamos un usuario por su nombre y verificamos su contraseña

    }

}