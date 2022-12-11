<?php
session_start();
function redirigir($locacion)
{
    header('Location: ' . URLROOT . $locacion);
}
function estaLogueado(){
    return (isset($_SESSION['id_usuario'])&& !empty($_SESSION['id_usuario']))? true :false;
}
