<?php 
$errorImg = [];
if ($_FILES) {
    if ($_FILES['imagen']['error'] != 0) {
        $errorImg[0] = "Hubo un error al cargar la imagen";
    }
    else {
        $ext = pathinfo($_FILES['imagen']['name'], PATHINFO_EXTENSION);
        if ($ext != "jpg" && $ext != "jpeg" && $ext != "png" && $ext != "bmp"){
            $errorImg[1] = "La extensión no es válida";
        }
    }
    $nombreImg = $_FILES['imagen']['name'];
    if (empty($errorImg)) {
        move_uploaded_file($_FILES['imagen']['tmp_name'], "./archivos/" . $nombreImg);
    }
    
}


?>