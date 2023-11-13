<?php

session_start();

function ctrlDoRegister($request, $response, $container){

    $taskModel = $container->users();
    $nom = $request->get(INPUT_POST, "nom");
    $cognoms = $request->get(INPUT_POST, "cognoms");
    $data_naix = $request->get(INPUT_POST, "data_naix");
    $adreca = $request->get(INPUT_POST, "adreca");

    

    $taskModel->addUser($nom,$cognoms,$data_naix,$adreca);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nom = $_POST["nom"];
        $cognoms = $_POST["cognoms"];
    
        if ($_FILES["foto"]["error"] === UPLOAD_ERR_OK) {
            $nomFoto = $nom . $cognoms . ".jpg";
            $rutaDesti = "images/" . $nombFoto;
    
            move_uploaded_file($_FILES["foto"]["tmp_name"], $rutaDesti);
                
        } 
        } 
    $response->redirect("location: index.php?r=index");
    return $response;
}