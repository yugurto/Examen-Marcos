<?php

session_start();

function ctrlmostrarLlistat($request, $response, $container){

    $response->setTemplate("mostrarLlistat.php");

    return $response;
}