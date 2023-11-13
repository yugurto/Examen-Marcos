<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE);

include "../src/config.php";
include "../src/controllers/index.php";
include "../src/Emeset/Request.php";
include "../src/Emeset/Response.php";
include "../src/Emeset/Container.php";
include "../src/middleware/example.php";
include "../src/middleware/isLogged.php";
include "../src/controllers/register.php";
include "../src/controllers/do_register.php";
include "../src/controllers/llistat.php";
include "../src/controllers/mostrarLlistat.php";
include "../src/controllers/login.php";
include "../src/controllers/do_login.php";

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
elseif($r == "register") {
$response = ctrlRegister($request, $response, $container);
$response->response();
}
elseif($r == "do_register") {
$response = ctrlDoRegister($request, $response, $container);
$response->response();
}
elseif($r == "llistat") {
$response = ctrlLlistat($request, $response, $container);
$response->response();
}
elseif($r == "mostrarLlistat") {
  $response = ctrlMostrarLlistat($request, $response, $container);
  $response->response();
  }
  elseif($r == "login") {
    $response = ctrlLogin($request, $response, $container);
    $response->response();
    }
    elseif($r == "do_login") {
      $response = ctrlDoLogin($request, $response, $container);
      $response->response();
      }
 else {
     $response = ctrlIndex($request, $response, $container);
       $response->response();

 } 

