<?php
//Creamos una clase para el usuario - login
Class Login{
    //Variable para guardar la conexion
    private PDO $pdo;
    //Al crear el modelo, obtenemos la conexion automaticamente.
    public function __construct(){
      $this->db = Database::getConnection();
    }
    //Buscamos un usuario por su nombre y verificamos su contraseña.
    //devuelvo los datos del usuario si es correcto

}