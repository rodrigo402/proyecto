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

                //-----------------------------------------------------
                // Variables
                //-----------------------------------------------------
                $errores = [];
                $username = isset($_POST['username']) ? $_POST['username'] : null;
                $password = isset($_POST['password']) ? $_POST['password'] : null;
                

                //-----------------------------------------------------
                // Validaciones
                //-----------------------------------------------------
                // Nombr username
                if (!validar_requerido($username)) {
                    $errores[0] = 'Ingresar Username.';
                }
                // Edad
                if (!validar_requerido($password)) {
                    $errores[1] = 'Ingresar Password.';
                }
            
            }
        ?>
    