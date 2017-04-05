<?php
    require_once "model/breakfast.model.php";
    class BreakfastController{
        private $BreakfastM;

        public function __CONSTRUCT(){
          $this->BreakfastM = new BreakfastModel();
        }

        public function mainPage(){
            /*if (!isset($_SESSION["usuario"])) {
              header("location:index.php?c=main");
          }*/
            require_once 'views/include/header.php';
            require_once 'views/modules/food_mod/breakfast_manage/add.breakfast.php';
            require_once 'views/include/footer.php';
        }

        public function create(){
            $data = $_POST["data"];
            $result = $this->BreakfastM->createBreakfast($data);
            header("Location: index.php?c=breakfast&msn=$result");
        }

        public function update(){
          if (!isset($_SESSION["usuario"])) {
            header("location:index.php?c=main");
          }
          $field = $_GET["decode"];
          require_once 'views/include/header.php';
          require_once 'views/modules/food_mod/breakfast_manage/update.breakfast.php';
          require_once 'views/include/footer.php';
        }

        public function updateData(){
            $data = $_POST["data"];
            $result = $this->BreakfastM->updateBreakfast($data);
            header("Location: index.php?c=breakfast&msn=$result");
        }

        public function delete(){
            $data = $_GET["decode"];
            $result = $this->BreakfastM->deleteBreakfast($data);
            header("Location: index.php?c=breakfast&msn=$result");
        }

    }

?>
