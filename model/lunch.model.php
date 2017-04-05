<?php

    class LunchModel extends DataBase{
        private $pdo;
        function __CONSTRUCT(){
            try {
                $this->pdo = DataBase::connect();
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
        }

        public function createLunch($data){
            try {
                $sql = "INSERT INTO lunch VALUES(?,?,?)";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($data[2],$data[0],$data[1]));

                $msn = "lunch guardado correctamente";
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
            return $msn;
        }

        public function readLunch(){
            try {
                $sql="SELECT * FROM lunch ORDER BY nameLunch";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);

                return $result;
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
        }

        public function readLunchByCode($field){
            try {
                $sql="SELECT * FROM lunch WHERE code_lunch = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($field));
                $result = $query->fetch(PDO::FETCH_BOTH);
                return $result;
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }

        }

        public function updateLunch($data){
            try {
                $sql="UPDATE lunch SET nameLunch = ?, descriptionLunch = ? WHERE code_lunch = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($data[0],$data[1],$data[2]));

                $msn = "lunch Modificado con exito!";
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
            return $msn;
        }

        public function deleteLunch($field){
            try {
                $sql = "DELETE FROM lunch WHERE code_lunch = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($field));
                $msn = "lunch Eliminado correctamente!";
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
