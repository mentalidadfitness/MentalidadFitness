<?php
    require_once "model/lunch.model.php";

    class LunchController{
        private $LunchM;

        public function __CONSTRUCT(){
          $this->LunchM = new LunchModel();
        }

        public function mainPage(){
            /*if (!isset($_SESSION["usuario"])) {
            header("location:index.php?c=main");
        }*/
            require_once 'views/include/header.php';
            require_once 'views/modules/food_mod/lunch_manage/add.lunch.php';
            require_once 'views/include/footer.php';
        }

        public function create(){
            $data = $_POST["data"];
            $result = $this->LunchM->createLunch($data);
            header("Location: index.php?c=lunch&msn=$result");
        }

        public function update(){
          /*if (!isset($_SESSION["usuario"])) {
            header("location:index.php?c=main");
        }*/
          $field = $_GET["alcode"];
          require_once 'views/include/header.php';
          require_once 'views/modules/food_mod/lunch_manage/update.lunch.php';
          require_once 'views/include/footer.php';
        }

        public function updateData(){
            $data = $_POST["data"];
            $result = $this->LunchM->updateLunch($data);
            header("Location: index.php?c=lunch&msn=$result");
        }

        public function delete(){
            $data = $_GET["alcode"];
            $result = $this->LunchM->deleteLunch($data);
            header("Location: index.php?c=lunch&msn=$result");
        }

    }

?>
