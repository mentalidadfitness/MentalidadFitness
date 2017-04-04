<?php

    class UserModel extends DataBase{
        private $pdo;
        function __CONSTRUCT(){
            try {
                $this->pdo = DataBase::connect();
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
        }

        public function createUser($userId,$data,$tokken,$n){
            try {
                $sql = "INSERT INTO user VALUES(?,?,?,?)";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($userId,$data[0],$data[3],$data[4]));
                $sql2 = "INSERT INTO access VALUES(?,?,?,?,?,?)";
                $query2 = $this->pdo->prepare($sql2);
                $query2->execute(array($tokken,$data[2],$data[1],$n,$data[0],$userId));
                $msn = "Usuario guardado correctamente";
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
            return $msn;
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

        public function readCity(){
            try {
                $sql="SELECT * FROM city ORDER BY nameCity";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);

                return $result;
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
        }

        public function readUser(){
            try {
                $sql="SELECT * FROM user INNER JOIN access ON(user.code_user=access.code_user)";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);

                return $result;
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
        }

        public function readUserByCode($field){
            try {
                $sql="SELECT * FROM user INNER JOIN access ON(user.code_user=access.code_user) WHERE user.code_user = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($field));
                $result = $query->fetch(PDO::FETCH_BOTH);
                return $result;
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }

        }

        public function updateUser($data){
            try {
                $sql="UPDATE user SET nameUser = ? WHERE code_user = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($data[0],$data[3]));
                $sql2="UPDATE access SET  emailAcc = ?, passwordAcc = ? WHERE code_user = ?";
                $query2 = $this->pdo->prepare($sql2);
                $query2->execute(array($data[1],$data[2],$data[3]));
                $msn = "Usuario Modifico con exito!";
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
            return $msn;
        }

        public function deleteUser($field){
            try {
                $sql = "DELETE FROM user WHERE code_user = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($field));
                $sql2 = "DELETE FROM access WHERE code_user = ?";
                $query2 = $this->pdo->prepare($sql2);
                $query2->execute(array($field));
                $msn = "Usuario Eliminado correctamente!";
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
