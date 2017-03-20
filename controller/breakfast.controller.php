<?php

    require_once "model/breakfast.model.php";

    class BreakfastController{
        private $BRmodel;

        public function __CONSTRUCT(){
          $this->BRmodel = new BreakfastModel();
        }

        public function mainPage(){
            require_once 'views/include/header.php';
            require_once 'views/modules/mod_breakfast/breakfast.add.php';
            require_once 'views/include/footer.php';
        }

        public function create(){
            $data = $_POST["data"];
            $result = $this->BRmodel->createBreakfast($data);
            header("Location: index.php?c=breakfast&msn=$result");
        }

        public function update(){
          $field = $_GET["brcode"];
          require_once 'views/include/header.php';
          require_once 'views/modules/mod_breakfast/breakfast.update.php';
          require_once 'views/include/footer.php';
        }

        public function updateData(){
            $data = $_POST["data"];
            $result = $this->BRmodel->updateBreakfast($data);
            header("Location: index.php?c=breakfast&msn=$result");
        }

        public function delete(){
            $data = $_GET["brcode"];
            $result = $this->BRmodel->deleteBreakfast($data);
            header("Location: index.php?c=breakfast&msn=$result");
        }

    }

?>
