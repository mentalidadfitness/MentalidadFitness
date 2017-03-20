<?php
    require_once "model/dinner.model.php";

    class DinnerController{
        private $DImodel;

        public function __CONSTRUCT(){
          $this->DImodel = new DinnerModel();
        }

        public function mainPage(){
            require_once 'views/include/header.php';
            require_once 'views/modules/mod_dinner/dinner.add.php';
            require_once 'views/include/footer.php';
        }

        public function create(){
            $data = $_POST["data"];
            $result = $this->DImodel->createDinner($data);
            header("Location: index.php?c=dinner&msn=$result");
        }

        public function update(){
          $field = $_GET["DIcode"];
          require_once 'views/include/header.php';
          require_once 'views/modules/mod_dinner/dinner.update.php';
          require_once 'views/include/footer.php';
        }

        public function updateData(){
            $data = $_POST["data"];
            $result = $this->DImodel->updateDinner($data);
            header("Location: index.php?c=dinner&msn=$result");
        }

        public function delete(){
            $data = $_GET["dicode"];
            $result = $this->DImodel->deleteDinner($data);
            header("Location: index.php?c=dinner&msn=$result");
        }

    }

?>
