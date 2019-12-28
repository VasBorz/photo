<?php
    //Connection to DB
    class ConnDb{
        private static $instance = null;

        private $db = 'geekbrains';
        private $user = 'root';
        private $pwd = 'root';
        private $host = 'localhost';
        private $charset = 'utf8mb4';
        private $conn;

        public function __construct(){
            if(!$this->conn){
                try {
                    $this->conn = new PDO("mysql:host={$this->host};
                dbname={$this->db};
                charset={$this->charset}",
                        $this->user,
                        $this->pwd);
                }
                catch (PDOException $e){
                    echo 'Connection failed:' . $e->getMessage();
                }
            }
        }

        public static function getInstance(){
            if (!self::$instance){
                self::$instance = new ConnDb;
            }
            return self::$instance;
        }

        protected function getConn(){
            return $this->conn;
        }

    }
