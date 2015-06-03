<?php

    if(isset($_POST['funcion'])){
        switch ($_POST['funcion']){
            case 'Add':
                if(isset($_POST['nombre'])){
                    setcookie("nombre", $_POST['nombre'], time() + 60);
                }

                if(isset($_POST['descripcion'])){
                    setcookie("descripcion", $_POST['descripcion'], time() + 60);
                }
                break;
            case 'Delete':
                if (isset($_COOKIE['nombre'])) {
                    unset($_COOKIE['nombre']);
                    setcookie('nombre', '', time() - 3600); 
                }
                if (isset($_COOKIE['descripcion'])) {
                    unset($_COOKIE['descripcion']);
                    setcookie('descripcion', '', time() - 3600); 
                }
                break;
            }
    }
    /*
    if(isset($_POST['nombre'])){
        setcookie("nombre", $_POST['nombre'], time() + 60);
    }

    if(isset($_POST['descripcion'])){
        setcookie("descripcion", $_POST['descripcion'], time() + 60);
    }
    */
?>