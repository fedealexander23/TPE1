<?php

class SongModel{
    
    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_tasks;charset=utf8', 'root', '');
    }

}