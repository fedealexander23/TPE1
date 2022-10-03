<?php

class SingerModel{

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=tpe1;charset=utf8', 'root', '');
    }

    public function getAllSinger() {
        // 1. abro conexión a la DB
        // ya esta abierta por el constructor de la clase

        // 2. ejecuto la sentencia (2 subpasos)
        $query = $this->db->prepare("SELECT * FROM singers");
        $query->execute();

        // 3. obtengo los resultados
        $singer = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $singer;
    }

   public function getSongID($id){
        // 1. abro conexión a la DB
        // ya esta abierta por el constructor de la clase

        // 2. ejecuto la sentencia (2 subpasos)
        $query = $this->db->prepare("SELECT * FROM songs where id = ?");
        $query->execute([$id]);
        $songs = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $songs;
    }

}