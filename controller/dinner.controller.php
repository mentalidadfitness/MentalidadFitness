<?php
    require_once "model/dinner.model.php";

    class DinnerController{
        private $DinnerM;

        public function __CONSTRUCT(){
          $this->DinnerM = new DinnerModel();
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
            $data[0] = $_POST["nameDin"];
            $data[1] = $_POST["descDin"];
            $data[2] = "DIN".randAlphanum('15');
            if(empty($data[0]) || empty($data[1])) {
              $return = array(false,"Campos nulos","");
            }else{
                $result = $this->DinnerM->createDinner($data);
                $return = array(true,"Guardo con Exito","index.php?c=dinner");
            }
            echo json_encode($return);
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

        public function validDinner(){
            $data = $_POST["nameDin"];
            $result = $this->DinnerM->readDinnerByName($data);
            if (count($result[0])==1) {
                $return = array(false,"La cena ya existe");
            }else{
                $return = array(true,"");
            }
            echo json_encode($return);
        }

    }

?>
