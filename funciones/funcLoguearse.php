<?php
$errorLogin = [];
$i=0;
session_start();
if (!empty($_POST['usuario'])){
$db = json_decode(file_get_contents("usuarios.json"),true); //Toma del archivo usuarios.json el string de json y guarda el array en una variable
// for ($i=0; $i < count($db) ; $i++) {
//         if ($db[$i]['usuario'] == $_POST['usuario'] && password_verify($_POST['password'], $db[$i]['password'])) { //verifica que el nombre y el password coincidan
//         $_SESSION['password'] = $_POST['password'];
//         $_SESSION['nombre'] = $db[$i]['nombre'];
//         $_SESSION['apellido'] = $db[$i]['apellido'];
//         $_SESSION['usuario'] = $db[$i]['usuario'];
//         $_SESSION['email'] = $db[$i]['email'];        
//         header("Location:index.php");
//         exit;
//     }
// }
    for ($i=0; $i < (count ($db) -1); $i++)  {
        if ($db[$i]['usuario'] == $_POST['usuario']) {
        break;
        }
    }
        

    if ($db[$i]['usuario'] != $_POST['usuario']) {$errorLogin[0] = "El usuario no existe";} 
    else {
    if (!password_verify($_POST['password'], $db[$i]['password'])) {$errorLogin[1]= "La contraseña no es válida";}
    if ($db[$i]['usuario'] == $_POST['usuario'] && password_verify($_POST['password'], $db[$i]['password'])) { //verifica que el nombre y el password coincidan
                $_SESSION['password'] = $_POST['password'];
                $_SESSION['nombre'] = $db[$i]['nombre'];
                $_SESSION['apellido'] = $db[$i]['apellido'];
                $_SESSION['usuario'] = $db[$i]['usuario'];
                $_SESSION['email'] = $db[$i]['email'];
                $_SESSION['imagen'] = $db[$i]['imagen'];           
                header("Location:index.php");
                exit;
            }}
}
?>      