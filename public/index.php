<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE);

include "../src/config.php";
include "../src/controllers/index.php";
include "../src/Emeset/Request.php";
include "../src/Emeset/Response.php";
include "../src/Emeset/Container.php";
include "../src/middleware/example.php";
include "../src/middleware/isLogged.php";

 $request = new \Emeset\Request();
 $response = new \Emeset\Response();
 $container = new \Emeset\Container($config);

$r = '';
 if(isset($_REQUEST["r"])){
    $r = $_REQUEST["r"];
 }

if($r == "") {
    $response = CtrlIndex($request, $response, $container);
  $response->response();

  }elseif($r == "index") {
  $response = CtrlIndex($request, $response, $container);
  $response->response();
    }
 else {
     $response = ctrlIndex($request, $response, $container);
       $response->response();

 } 
