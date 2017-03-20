<?php

    class PageModel{
        private $pdo;
        function __CONSTRUCT(){
            try {
                $this->pdo = DataBase::connect();
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
        }

        public function createPage($data){
            try {
                $sql = "INSERT INTO pagina VALUES('',?,?,?,?,?,?,?,?,?,?,?,?)";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($data[0],$data[1],$data[2],$data[3],$data[4],$data[5],$data[6],$data[7],$data[8],$data[9],$data[10],$data[11]));

                $msn = "Pagina guardada correctamente";
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
            return $msn;
        }

        public function readPage(){
            try {
                $sql="SELECT * FROM pagina ORDER BY nombre";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);

                return $result;
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
        }

        public function readPageByCode($field){
            try {
                $sql="SELECT * FROM pagina WHERE cod_pagina = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($field));
                $result = $query->fetch(PDO::FETCH_BOTH);
                return $result;
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }

        }

        public function updatePage($data){
            try {
                $sql="UPDATE pagina SET nombre = ?, iconos = ?, menu = ?, colores = ?, URL = ?, foto = ?, descripcion = ?, botones = ?, propiedades = ?, secciones = ?, imagenes = ?, estado = ? WHERE cod_pagina = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($data[0],$data[1],$data[2],$data[3],$data[4],$data[5],$data[6],$data[7],$data[8],$data[9],$data[10],$data[11],$data[12]));

                $msn = "Pagina Modificada con exito!";
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
            return $msn;
        }

        public function deletePage($field){
            try {
                $sql = "DELETE FROM pagina WHERE cod_pagina = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($field));
                $msn = "Pagina Eliminada correctamente!";
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
            return $msn;
        }

        public function __DESTRUCT(){
            DataBase::disconnect();
        }
    }


?>
