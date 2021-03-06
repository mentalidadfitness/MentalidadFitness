<?php

    class DinnerModel extends DataBase{
        private $pdo;
        function __CONSTRUCT(){
            try {
                $this->pdo = DataBase::connect();
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
        }

        public function createDinner($data){
            try {
                $sql = "INSERT INTO dinner VALUES(?,?,?)";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($data[2],$data[0],$data[1]));

                $msn = "Comida guardada correctamente";
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
            return $msn;
        }

        public function readDinner(){
            try {
                $sql="SELECT * FROM dinner ORDER BY nameDinner";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);

                return $result;
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
        }

        public function readDinnerByCode($field){
            try {
                $sql="SELECT * FROM dinner WHERE code_dinner = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($field));
                $result = $query->fetch(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
            return $result;
        }

        public function readDinnerByName($data){
            try {
                $sql="SELECT nameDinner FROM dinner WHERE nameDinner = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($data));
                $result = $query->fetch(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
            return $result;
        }

        public function updateDinner($data){
            try {
                $sql="UPDATE dinner SET nameDinner = ?, descriptionDinner = ? WHERE code_dinner = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($data[0],$data[1],$data[2]));

                $msn = "Comida Modificada con exito!";
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
            return $msn;
        }

        public function deleteDinner($field){
            try {
                $sql = "DELETE FROM dinner WHERE code_dinner = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($field));
                $msn = "Comida Eliminada correctamente!";
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
