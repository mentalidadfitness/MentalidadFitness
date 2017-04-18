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
            $data = $_POST["dataF"];
            $data[7] = "FOO".randAlphanum('15');
            for($i=0; $i <count($data); $i++){
              if(strlen($data[$i])==0){
                $p=1;
                break;
              }else{
                $p=0;
              }
            }
            if ($p==1) {
                $return = array(false,"Campos nulos","");
            }else{
              $result = $this->FoodM->createFood($data);
              $return = array(true,"Guardo con Exito","index.php?c=food");
            }
            echo json_encode($return);
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

        public function validFood(){
            $data = $_POST["nameFoo"];
            $result = $this->FoodM->readFoodByName($data);
            if (count($result[0])==1) {
                $return = array(false,"El alimento ya existe");
            }else{
                $return = array(true,"");
            }
            echo json_encode($return);
        }

    }

?>
