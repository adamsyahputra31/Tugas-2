<?php
    namespace App;
    use PDO;

    class DB{
        protected object $db;

        public function __construct(){
            try{
                $this->db = new PDO("mysql:host=localhost;dbname=task_adam", "root", "");
            } catch(\Exception $e){
                die("Error : " . $e->getMassage());
            }
        }
    }