<?php

namespace Daw;

class Users {

    public $sql;

    public function __construct($user, $pass, $db, $host){
        

        $dsn = "mysql:dbname={$db};host={$host}";
        try {
            $this->sql = new \PDO($dsn, $user, $pass);
        } catch (\PDOException $e) {
            die('Ha fallat la connexió: ' . $e->getMessage());
        }
    }

    public function getAll($userId){
        $stm = $this->sql->prepare("select id, nom, cognoms from users where id = :user_id;");
        $stm->execute([':user_id' => $userId]);
        
        $tasks = array();
        while ($task = $stm->fetch(\PDO::FETCH_ASSOC)) {
            $tasks[] = $task;
        }
        return $tasks; 
    }
    public function addUser($nom,$cognoms,$data_naix,$adreca) {
        $stm = $this->sql->prepare('insert into users (nom, cognoms, data_naix, adreca) values (:nom, :cognoms, :data_naix, :adreca);');
        $result = $stm->execute([':nom' => $nom, ':cognoms' => $cognoms,':data_naix' => $data_naix, ':adreca' => $adreca]);
    }
    public function getUserData($userId) {
        $stm = $this->sql->prepare("select id, nom, cognoms,data_naix, adreca from users where id = :user_id;");
        $stm->execute([':user_id' => $userId]);
        
        $tasks = $stm->fetch(\PDO::FETCH_ASSOC);
        return $tasks;

    }
    public function getUser(){
        $stm = $this->sql->prepare("select * from users;");
        $stm->execute();
        $tasks = array();

        while ($task = $stm->fetch(\PDO::FETCH_ASSOC)) {
            $tasks[] = $task;
        }
        return $tasks; 
    }
    public function mostrarLlistat($request) {
        if ($request->getMethod() === 'POST' && isset($_POST['password'])) {
            $password = $_POST['password'];

            if ($password === $this->config['LLISTAT_PASSWORD']) {
                include 'llistat.php';
                exit();
            } else {
                $error = 'Contraseña incorrecta.';
            }
        }

        include 'modal.php';
    }
}