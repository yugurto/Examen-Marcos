<?php

session_start();

function ctrlDoRegister($request, $response, $container){

    $taskModel = $container->users();
    $nom = $request->get(INPUT_POST, "nom");
    $cognoms = $request->get(INPUT_POST, "cognoms");
    $data_naix = $request->get(INPUT_POST, "data_naix");
    $adreca = $request->get(INPUT_POST, "adreca");

    

    $taskModel->addUser($nom,$cognoms,$data_naix,$adreca);


    $response->redirect("location: index.php?r=index");
    return $response;
}