<?php

class SongModel{

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=tpe1;charset=utf8', 'root', '');
    }

    public function getAllSong() {
        // 1. abro conexión a la DB
        // ya esta abierta por el constructor de la clase

        // 2. ejecuto la sentencia (2 subpasos)
        $query = $this->db->prepare("SELECT * FROM songs");
        $query->execute();

        // 3. obtengo los resultados
        $songs = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $songs;
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

    public function filterSinger($singer){
        // 1. abro conexión a la DB
        // ya esta abierta por el constructor de la clase

        // 2. ejecuto la sentencia (2 subpasos)
        $query = $this->db->prepare("SELECT * FROM songs WHERE singer = ?");
        $query->execute([$singer]);
        $songs = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $songs;
    }

}