<?php
    require_once "model/dinner.model.php";

    class DinnerController{
        private $DinnerM;

        public function __CONSTRUCT(){
          $this->DinnerM = new ComidaModel();
        }

        public function mainPage(){
            /*if (!isset($_SESSION["usuario"])) {
              header("location:index.php?c=main");
          }*/
            require_once 'views/include/header.php';
            require_once 'views/modules/food_mod/dinner_manage/add.dinner.php';
            require_once 'views/include/footer.php';
        }

        public function create(){
            $data = $_POST["data"];
            $result = $this->DinnerM->createDinner($data);
            header("Location: index.php?c=dinner&msn=$result");
        }

        public function update(){
          /*if (!isset($_SESSION["usuario"])) {
            header("location:index.php?c=main");
        }*/
          $field = $_GET["cocode"];
          require_once 'views/include/header.php';
          require_once 'views/modules/food_mod/dinner_manage/update.dinner.php';
          require_once 'views/include/footer.php';
        }

        public function updateData(){
            $data = $_POST["data"];
            $result = $this->DinnerM->updateDinner($data);
            header("Location: index.php?c=dinner&msn=$result");
        }

        public function delete(){
            $data = $_GET["cocode"];
            $result = $this->DinnerM->deleteDinner($data);
            header("Location: index.php?c=dinner&msn=$result");
        }

    }

?>
