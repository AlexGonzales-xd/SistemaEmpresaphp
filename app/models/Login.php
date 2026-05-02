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
    public function login(string $nombreUsuario, string $clave):array|false{
        // Statement-declaracion
        $sql1 = "SELECT * FROM usuarios WHERE nombre_usuario = :?";
        $stmt = $this->db->prepare($sql1);
        $stmt->execute([$nombreUsuario]);//Convertimos y ejecutamos en array todos los nombres de usuario que coincidan con el nombreUsuario ingresado
        $usuario = $stmt->fetch();//Obtenemos el resultado de la consulta
        //Verificamos si el usuario existe y si la contraseña es correcta
        if($usuario && password_verify($clave, $usuario['clave'])){ //Si hash de la contraseña ingresada coincide con el hash almacenado en la base de datos
            return $usuario; //Devolvemos los datos del usuario
        }
        return false; //Devuelve false si el usuario no existe o la contraseña es incorrecta
    }
    }


}