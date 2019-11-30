<?php
            //======================================================================
            // PROCESAR FORMULARIO 
            //======================================================================
            // Comprobamos si nos llega los datos por POST
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                //-----------------------------------------------------
                // Funciones Para Validar
                //-----------------------------------------------------

                /**
                 * Método que valida si un texto no esta vacío
                 * @param {string} - Texto a validar
                 * @return {boolean}
                 */
                function validar_requerido(string $texto): bool
                {
                    return !(trim($texto) == '');
                }
                function validar_email(string $texto): bool
                {
                    return (filter_var($texto, FILTER_VALIDATE_EMAIL) === FALSE) ? False : True;
                }
                function comprobarClave(){
                   $password = $_POST['password'];
                   $re_password = $_POST['re_password'];
                }

                //-----------------------------------------------------
                // Variables
                //-----------------------------------------------------
                $errores = [];
                $username = isset($_POST['username']) ? $_POST['username'] : null;
                $password = isset($_POST['password']) ? $_POST['password'] : null;
                $re_password = isset($_POST['re_password']) ? $_POST['re_password'] : null;
                $email = isset($_POST['email']) ? $_POST['email'] : null;
                

                //-----------------------------------------------------
                // Validaciones
                //-----------------------------------------------------
                // Nombr username
                if (!validar_requerido($username)) {
                    $errores[0] = 'Ingresar Username.';
                }
                // Password
                if (!validar_requerido($password)) {
                    $errores[1] = 'Ingresar Password.';
                }
                // Email
                if (!validar_email($email)) {
                    $errores[2] = 'El Email tiene un formato no válido.';
                }
                if (!comprobarClave($password,$re_password)) {
                    if ($password == $re_password){
                        $errores[3] = 'Las dos claves son iguales...';
                    }else{
                        $errores[4] = 'Las dos claves son distintas...';

                    }
                    
                }
            
            }
        ?>
    