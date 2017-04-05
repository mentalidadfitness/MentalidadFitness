<?php
    require_once "model/food.model.php";

    class FoodController{
        private $FoodM;

        public function __CONSTRUCT(){
          $this->FoodM = new FoodModel();
        }

        public function mainPage(){
          /*if (!isset($_SESSION["usuario"])) {
            header("location:index.php?c=main");
        }*/
            require_once 'views/include/header.php';
            require_once 'views/modules/food_mod/food_manage/add.food.php';
            require_once 'views/include/footer.php';
        }

        public function create(){
            $data = $_POST["data"];
            $data[7] = "FOO".randAlphanum('15').date();
            if(empty($data[0]) || empty($data[1]) || empty($data[2]) || empty($data[3]) || empty($data[4]) || empty($data[5]) || empty($data[6])) {
              $msn="Campos Nulos";
              header("Location: index.php?c=food&msn=$msn");
            }else{
              $result = $this->FoodM->createFood($data);
              header("Location: index.php?c=food&msn=$result");
            }
        }

        public function update(){
         /* if (!isset($_SESSION["usuario"])) {
            header("location:index.php?c=main");
        }*/
          $field = $_GET["alicode"];
          require_once 'views/include/header.php';
          require_once 'views/modules/food_mod/food_manage/update.food.php';
          require_once 'views/include/footer.php';
        }

        public function updateData(){
            $data = $_POST["data"];
            $result = $this->FoodM->updateFood($data);
            header("Location: index.php?c=food&msn=$result");
        }

        public function delete(){
            $data = $_GET["alicode"];
            $result = $this->FoodM->deleteFood($data);
            header("Location: index.php?c=food&msn=$result");
        }

    }

?>
