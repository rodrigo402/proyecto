<?php
$usuario = [
    "usuario" => "",
    "nombre" => "",
    "apellido" => "",
    "password" => "",
    "email" => "",
    "imagen" => ""
];

$errorRegistro = [];
$valido = true;
$db = json_decode(file_get_contents('usuarios.json')); //Guarda en una variable el string de usuarios.jason pasado a un objeto

if ($_POST) {
    if (strlen($_POST['usuario']) == 0) {    
        $errorRegistro[0] = "No lleno el nombre del usuario <br>";
        $valido = false;
    }    
    if (strlen($_POST['usuario']) < 8) {
        $errorRegistro[1] = "El nombre de usuario es menor a 8 caracteres <br>";
        $valido = false;
    }
    if (empty($errorRegistro[0]) && empty($errorRegistro[1])) {$usuario['usuario'] = $_POST['usuario'];}

    if (strlen($_POST['nombre']) == 0) {
        $errorRegistro[2] = "El nombre esta vacio <br>";
        $valido = false;
    }    
    if (strlen($_POST['nombre']) < 3) {
        $errorRegistro[3] = "El nombre es muy corto <br>";
        $valido = false;
    }
    if (empty($errorRegistro[2]) && empty($errorRegistro[3])) {$usuario['nombre'] = $_POST['nombre'];}

    if (strlen($_POST['apellido']) == 0) {
        $errorRegistro[4] = "El apellido esta vacio <br>";
        $valido = false;
    }    
    if (strlen($_POST['apellido']) < 3) {
        $errorRegistro[5] = "El apellido es muy corto <br>";
        $valido = false;
    }
    if (empty($errorRegistro[4]) && empty($errorRegistro[5])) {$usuario['apellido'] = $_POST['apellido'];}

    if (strlen($_POST['password']) == 0) {
        $errorRegistro[6] = "El password esta vacio <br>";
        $valido = false;
    }
    if (strlen($_POST['password']) < 8) {
        $errorRegistro[7] = "El password es muy corto <br>";
        $valido = false;
    }
    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) == false) {
        $errorRegistro[8] = "El mail no tiene el formato correcto <br>";
        $valido = false;
    }
    if (empty($errorRegistro[8])) {$usuario['email'] = $_POST['email'];}

if ($_FILES) {
    if ($_FILES['imagen']['error'] != 0) {
        $errorRegistro[11] = "Hubo un error al cargar la imagen";
    }
    else {
        $ext = pathinfo($_FILES['imagen']['name'], PATHINFO_EXTENSION);
        if ($ext != "jpg" && $ext != "jpeg" && $ext != "png" && $ext != "bmp"){
            $errorRegistro[12] = "La extensión no es válida";
        }
    }
    $nombreImg = $_FILES['imagen']['name'];
    if (empty($errorRegistro)) {
        move_uploaded_file($_FILES['imagen']['tmp_name'], "archivos/" . $nombreImg);
    }
    if (empty($errorRegistro[11]) && empty($errorRegistro[12])) {$usuario['imagen'] = $nombreImg;}
}






    if ($valido) {
        $pass = password_hash($_POST['password'], PASSWORD_DEFAULT); //$pass es el hash
        $usuario['password'] = $pass; //guardo el hash en el arreglo        
        array_push($db,$usuario); //agrega a db el arreglo de usuarios
        $db = json_encode($db); //Transforma el array a json

        file_put_contents("usuarios.json", $db); //Guarda el json en un archivo .json
        header("Location:login.php");
        exit;
    }
}


?>