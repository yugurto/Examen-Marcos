<?php

session_start();

function ctrlLlistat($request, $response, $container) {    
    $taskModel = $container->users();
    
    $user = $request->get("SESSION", "user");

    
    $tasks = $taskModel->getUser($user["id"]);
    
    $response->set("tasks", $tasks);
    
    $response->setTemplate("llistat.php");
    

    return $response;
}