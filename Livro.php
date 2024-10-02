<?php

    class Livro {
        private $conexao;
        private $id;
        private $titulo;
        private $autor;
        private $genero;
        private $descricao;

        public function __construct($db) {
            $this->conexao = $db;
        }

        public function setId($id){
            $this->id = $id;
        }

        public function setTitulo($titulo){
            $this->titulo = $titulo;
        }

        public function setAutor($autor){
            $this->autor = $autor;
        }

        public function setGenero($genero){
            $this->genero = $genero;
        }

        public function setDescricao($descricao){
            $this->descricao = $descricao;
        }

        public function create() {
            $query = "INSERT INTO livro SET titulo=:titulo, autor=:autor, genero=:genero, descricao=:descricao";
            $stmt = $this->conexao->prepare($query);

            $stmt->bindParam(":titulo", $this->titulo);
            $stmt->bindParam(":autor", $this->autor);
            $stmt->bindParam(":genero", $this->genero);
            $stmt->bindParam(":descricao", $this->descricao);

            if ($stmt->execute()) {
                return true;
            }
            return false;
        }

        public function read() {
            $query = "SELECT * FROM livro";
            $stmt = $this->conexao->prepare($query);
            $stmt->execute();

            return $stmt;
        }

        public function delete() {
            $query = "DELETE FROM livro WHERE id=:id";
            $stmt = $this->conexao->prepare($query);

            $stmt->bindParam(":id", $this->id);

            if ($stmt->execute()) {
                return true;
            }
            return false;
        }

        public function update() {
            $query = "UPDATE livro SET titulo=:titulo, autor=:autor, genero=:genero, descricao=:descricao WHERE id=:id";
            $stmt = $this->conexao->prepare($query);

            $stmt->bindParam(":titulo", $this->titulo);
            $stmt->bindParam(":autor", $this->autor);
            $stmt->bindParam(":genero", $this->genero);
            $stmt->bindParam(":descricao", $this->descricao);
            $stmt->bindParam(":id", $this->id);

            if ($stmt->execute()) {
                return true;
            }
            return false;
        }

        public function consultar() {
            $query = "SELECT * FROM livro WHERE id = :id";
            $stmt = $this->conexao->prepare($query);
            $stmt->bindParam(":id", $this->id);
            $stmt->execute();
            
            return $stmt;
        }

    }    
?>

