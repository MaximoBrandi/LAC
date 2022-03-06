<?php
    function checkSession($typeOP){
        if ($typeOP == 0) {
            session_start();
            if (!isset($_SESSION["Login"])) {
                header('Location: Iniciar-Sesion.php');
            }
        }
        if ($typeOP == 1) {
            session_start();
            if (isset($_SESSION["Login"])) {
                header('Location: Index.php');
            }
        }  
    }
?>