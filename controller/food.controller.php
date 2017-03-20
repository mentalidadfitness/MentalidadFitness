<?php
    require_once "model/food.model.php";

    class FoodController{
        private $ALImodel;

        public function __CONSTRUCT(){
          $this->ALImodel = new FoodModel();
        }

        public function mainPage(){
            require_once 'views/include/header.php';
            require_once 'views/modules/mod_food/food.add.php';
            require_once 'views/include/footer.php';
        }

        public function create(){
            $data = $_POST["data"];
            $result = $this->ALImodel->createFood($data);
            header("Location: index.php?c=food&msn=$result");
        }

        public function update(){
          $field = $_GET["focode"];
          require_once 'views/include/header.php';
          require_once 'views/modules/mod_food/food.update.php';
          require_once 'views/include/footer.php';
        }

        public function updateData(){
            $data = $_POST["data"];
            $result = $this->ALImodel->updateFood($data);
            header("Location: index.php?c=food&msn=$result");
        }

        public function delete(){
            $data = $_GET["focode"];
            $result = $this->ALImodel->deleteFood($data);
            header("Location: index.php?c=food&msn=$result");
        }

    }

?>
