<?php

require_once "/config.php";

class open_connection {

        private $connection;

        public function __construct(){
                $this->open();
        }

        private function open(){
                $this->connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);;
                        if(mysqli_connect_errno()){
                                    die("Connection Failed " .mysqli_connect_error());
                             }
                }

        public function query($sql){
               $get = mysqli_query($this->connection,$sql);
               if(!$get){
                       die("Query failed");
               }
               else{
                return $get;
               }
               
        }

        public function escape_string($string){
                $escape_string = mysqli_real_escape_string($this->connection,$string);
                return $escape_string;
        }

       public function affected_rows(){
        return mysqli_affected_rows($this->connection);
       }

       public function last_insertId(){
        return mysqli_insert_id($this->connection);
       }

}

?>