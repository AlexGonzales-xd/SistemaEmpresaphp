<?php
//Llamamos a los datos extra de los archivos
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../models/Login.php';

class LoginController{
    public function login():void{
        //Variable para guardar el mensaje de error
        $error = null;
        //datos del formulario del login
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $Usuario = trim($_POST['user'] ?? '');
            $clave = trim($_POST['pass'] ?? '');
            //Creamos una instancia del modelo de login
            $loginModel = new Login();
            //Intentamos iniciar sesión con los datos proporcionados
            $usuario = $loginModel->login($Usuario, $clave);
            if($usuario){
                //Si el login es exitoso, guardamos los datos del usuario en la sesión
                $_SESSION['user_id'] = $usuario['id'];
                $_SESSION['nombre_usuario'] = $usuario['nombre_usuario'];
                //Redirigimos al usuario a la página de inicio o dashboard
                header('Location: index.php');
                exit();
            } else {
                //Si el login falla, mostramos un mensaje de error
                $error = 'Nombre de usuario o contraseña incorrectos.';
            }
        } 
    }
    }
}