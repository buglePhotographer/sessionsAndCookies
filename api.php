<?php
    if(isset($_POST['nombre'])){
        setcookie("nombre", $_POST['nombre'], time() + 60);
    }

    if(isset($_POST['descripcion'])){
        setcookie("descripcion", $_POST['descripcion'], time() + 60);
    }
?>