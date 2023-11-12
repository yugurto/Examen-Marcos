<?php

session_start();

$config = [
    "db" => [
        "user" => "root",
        "pass" => "1234",
        "db" => "examen1",
        "host" => "localhost"
    ],
];

include "../src/models/Users.php";
include "../src/models/Db.php";
include "../src/models/session.php";
