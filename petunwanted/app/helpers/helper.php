<?php
session_start();
function redirigir($locacion){
    header('Location:'.URLROOT.$locacion);
}

