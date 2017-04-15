<?php

    class PageModel extends DataBase{
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
                $sql = "INSERT INTO page VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($data[12],$data[0],$data[1],$data[2],$data[3],$data[4],$data[5],$data[6],$data[7],$data[8],$data[9],$data[10],$data[11]));


            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }

        }

        public function readPage(){
            try {
                $sql="SELECT * FROM page ORDER BY namePage";
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
                $sql="SELECT * FROM page WHERE code_page = ?";
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
                $sql="UPDATE page SET namePage = ?, iconsPage = ?, menuPage = ?, colorsPage = ?, URLPage = ?,
                photoPage = ?, descriptionPage = ?, buttonsPage = ?, propertiesPage = ?, sectionsPage = ?, imagesPage = ?, statusPage = ? WHERE code_page = ?";
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
                $sql = "DELETE FROM page WHERE code_page = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($field));
                $msn = "Pagina Eliminada correctamente!";
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
            return $msn;
        }
        public function readPageByName($name){
            try {
                $sql="SELECT * FROM page WHERE namePage= ?";
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
