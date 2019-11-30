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
                 * * Método que valida que solo tenga letras y no num
                 * @param {string} - Texto a validar
                 * @return {boolean}
                 */
                function validar_requerido(string $texto): bool
                {
                    return !(trim($texto) == '' || filter_var($texto, FILTER_VALIDATE_INT) );
                }
                function validar_email(string $texto): bool
                {
                    return (filter_var($texto, FILTER_VALIDATE_EMAIL) === FALSE) ? False : True;
                }
                function validar_entero(string $numero): bool
                {
                    return (filter_var($numero, FILTER_VALIDATE_INT) === FALSE) ? False : True;
                }
               
                //-----------------------------------------------------
                // Variables
                //-----------------------------------------------------
                $errores = [];
                $name = isset($_POST['name']) ? $_POST['name'] : null;
                $apellido = isset($_POST['name2']) ? $_POST['name2'] : null;
                $telefono = isset($_POST['telefono']) ? $_POST['telefono'] : null;
                $email = isset($_POST['email']) ? $_POST['email'] : null;
                $mensage = isset($_POST['message']) ? $_POST['message'] : null;                
                

                //-----------------------------------------------------
                // Validaciones
                //-----------------------------------------------------
                // Nombr name
                if (!validar_requerido($name)) {
                    $errores[0] = 'Ingresar nombre(solo letras).';
                }
                //apellido
                if (!validar_requerido($apellido)) {
                    $errores[1] = 'Ingresar apeliido(solo letras).';
                }
                // numero
                if (!validar_entero($telefono)) {
                    $errores[2] = 'El campo de telefono debe ser un número.';
                }
                // Email
                if (!validar_email($email)) {
                    $errores[3] = 'El campo de Email tiene un formato no válido.';
                }
                //mensage
                if (!validar_requerido($mensage)) {
                    $errores[4] = 'Ingresar un mensage.';
                }
               
            
            }
?>
