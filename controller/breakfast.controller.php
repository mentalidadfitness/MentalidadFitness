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
            $data[0] = $_POST["nameBre"];
            $data[1] = $_POST["descBre"];
            $data[2] = "BRE".randAlphanum('15');
            if(empty($data[0]) || empty($data[1])) {
              $return = array(false,"Campos nulos","");
            }else{
                $result = $this->BreakfastM->createBreakfast($data);
                $return = array(true,"Guardo con Exito","index.php?c=breakfast");
            }
            echo json_encode($return);
        }

        public function update(){
          /*if (!isset($_SESSION["usuario"])) {
            header("location:index.php?c=main");
        }*/
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

        public function validBreakfast(){
            $data = $_POST["nameBre"];
            $result = $this->BreakfastM->readBreakfastByName($data);
            if (count($result[0])==1) {
                $return = array(false,"El desayuno ya existe");
            }else{
                $return = array(true,"");
            }
            echo json_encode($return);
        }

    }

?>
