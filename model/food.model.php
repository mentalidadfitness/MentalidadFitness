<?php

    class FoodModel extends DataBase{
        private $pdo;
        function __CONSTRUCT(){
            try {
                $this->pdo = DataBase::connect();
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
        }

        public function createFood($data){
            try {
                $sql = "INSERT INTO food VALUES(?,?,?,?,?,?,?,?)";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($data[7],$data[0],$data[1],$data[2],$data[3],$data[4],$data[5],$data[6]));

                $msn = "food guardado correctamente";
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
            return $msn;
        }

        public function readFood(){
            try {
                $sql="SELECT * FROM food ORDER BY nameFood";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);

                return $result;
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
        }

        public function readFoodByCode($field){
            try {
                $sql="SELECT * FROM food WHERE code_food = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($field));
                $result = $query->fetch(PDO::FETCH_BOTH);
                return $result;
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }

        }

        public function readFoodByName($data){
            try {
                $sql="SELECT nameFood FROM food WHERE nameFood = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($data));
                $result = $query->fetch(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
            return $result;
        }


        public function updateFood($data){
            try {
                $sql="UPDATE food SET nameFood = ?, proteinsFood = ?, caloriesFood = ?, sugarsFood = ?, carbohydratesFood	 = ?, fibersFood = ?, 	vitaminsFood = ? WHERE code_food = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($data[0],$data[1],$data[2],$data[3],$data[4],$data[5],$data[6],$data[7]));

                $msn = "food Modificado con exito!";
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
            return $msn;
        }

        public function deleteFood($field){
            try {
                $sql = "DELETE FROM food WHERE code_food = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($field));
                $msn = "food Eliminado correctamente!";
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
