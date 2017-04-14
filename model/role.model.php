<?php

    class RoleModel extends DataBase{
        private $pdo;
        function __CONSTRUCT(){
            try {
                $this->pdo = DataBase::connect();
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
        }

        public function createRole($data){
            try {
                $sql = "INSERT INTO role VALUES(?,?,?)";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($data[2],$data[0],$data[1]));

            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
        }

        public function readRole(){
            try {
                $sql="SELECT * FROM role ORDER BY nameRole";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);

                return $result;
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
        }

        public function readRoleByCode($field){
            try {
                $sql="SELECT * FROM role WHERE code_role = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($field));
                $result = $query->fetch(PDO::FETCH_BOTH);
                return $result;
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }

        }

        public function updateRole($data){
            try {
                $sql="UPDATE role SET nameRole = ?, statusRole = ? WHERE code_role = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($data[0],$data[1],$data[2]));

                $msn = "Rol Modifico con exito!";
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
            return $msn;
        }

        public function deleteRole($field){
            try {
                $sql = "DELETE FROM role WHERE code_role = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($field));
                $msn = "Rol Eliminado correctamente!";
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
            return $msn;
        }
        public function readRoleByName($name){
            try {
                $sql="SELECT nameRole FROM role WHERE nameRole = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($name));
                $result = $query->fetch(PDO::FETCH_BOTH);

            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
              return $result;
        }

        public function __DESTRUCT(){
            DataBase::disconnect();
        }
    }


?>
