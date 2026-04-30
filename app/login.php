<?php
// Lamamos a la configuracion (sesión + datos del .env)
require_once 'config/config.php';
// Cargamos el controller del login para manejar la lógica de autenticación.
require_once 'controllers/LoginController.php';