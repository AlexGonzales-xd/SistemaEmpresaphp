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
            if(empty($Usuario) || empty($clave)){
                $error = 'Por favor, completa todos los campos.';
            }else{
                //Llamamos al objeto del modelo de login
                $LoginUsuario = (new Login())->login($Usuario, $clave);
            }
        } 
    }
    }
}