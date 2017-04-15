<?php

    class SnackModel extends DataBase{
        private $pdo;
        function __CONSTRUCT(){
            try {
                $this->pdo = DataBase::connect();
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
        }

        public function createSnack($data){
            try {
                $sql = "INSERT INTO snack VALUES(?,?,?)";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($data[2],$data[0],$data[1]));

                $msn = "Snack guardado correctamente";
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
            return $msn;
        }

        public function readSnack(){
            try {
                $sql="SELECT * FROM snack ORDER BY nameSnack";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);

                return $result;
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
        }

        public function readSnackByCode($field){
            try {
                $sql="SELECT * FROM snack WHERE code_snack = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($field));
                $result = $query->fetch(PDO::FETCH_BOTH);
                return $result;
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }

        }

        public function updateSnack($data){
            try {
                $sql="UPDATE snack SET nameSnack = ?, descriptionSnack = ? WHERE code_snack = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($data[0],$data[1],$data[2]));

                $msn = "Snack Modifico con exito!";
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
            return $msn;
        }

        public function deleteSnack($field){
            try {
                $sql = "DELETE FROM snack WHERE code_snack = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($field));
                $msn = "Snack Eliminado correctamente!";
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
            return $msn;
        }
        public function readSnackByName($name){
            try {
                $sql="SELECT * FROM snack WHERE nameSnack = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($name));
                $result = $query->fetch(PDO::FETCH_BOTH);
                return $result;
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }

        }

        public function __DESTRUCT(){
            DataBase::disconnect();
        }
    }


?>
