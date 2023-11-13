<?php

session_start();
function ctrlIndex($request, $response, $container) {

    $taskModel = $container->Users();
    
    $user = $request->get("SESSION", "user");

    
    $tasks = $taskModel->getAll($user["id"]); 
    $response->setTemplate("index.php");
    

    return $response;
    
}   