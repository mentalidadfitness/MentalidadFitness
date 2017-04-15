<?php

    class ExerciseModel extends DataBase{
        private $pdo;
        function __CONSTRUCT(){
            try {
                $this->pdo = DataBase::connect();
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
        }

        public function createExercise($data){
            try {
                $sql = "INSERT INTO exercise VALUES(?,?,?,?)";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($data[3],$data[0],$data[1],$data[2]));

                $msn = "Ejercicio guardado correctamente";
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
            return $msn;
        }

        public function readExercise(){
            try {
                $sql="SELECT * FROM exercise ORDER BY nameExercise";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);

                return $result;
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
        }

        public function readExerciseByCode($field){
            try {
                $sql="SELECT * FROM exercise WHERE code_exercise = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($field));
                $result = $query->fetch(PDO::FETCH_BOTH);
                return $result;
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }

        }

        public function updateExercise($data){
            try {
                $sql="UPDATE exercise SET nameExercise = ?, dateExercise = ?, statusExercise = ?
                                        WHERE code_exercise = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($data[0],$data[1],$data[2],$data[3]));

                $msn = "Ejercicio Modifico con exito!";
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
            return $msn;
        }

        public function deleteExercise($field){
            try {
                $sql = "DELETE FROM exercise WHERE code_exercise = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($field));
                $msn = "Ejercicio Eliminado correctamente!";
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
            return $msn;
        }
        public function readExerciseByName($name){
            try {
                $sql="SELECT nameExercise FROM exercise WHERE nameExercise = ?";
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
