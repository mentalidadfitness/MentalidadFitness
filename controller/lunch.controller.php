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
        public function validLunch(){
          $name = $_POST["nombreLun"];
          $result = $this->LunchM->readLunchByName($name);
          if (count($result[0])==1) {
            $return = array(false,"El almuerzo ya existe");
          }else{
            $return = array(true,"");
          }
          echo json_encode($return);
        }

        public function create(){
            $data[0] = $_POST["nombreLun"];
            $data[1] = $_POST["descripcionLun"];
            $data[2] = "LUN".randAlphanum('15');
            for($i=0; $i <count($data); $i++){
              if(strlen($data[$i])==0){
                $p=1;
                break;
              }else{
                $p=0;
              }
            }
            if ($p==1) {
              $return = array(false,"Campos Nulos");
            }else{
              $result = $this->LunchM->createLunch($data);
              $return = array(true,"Guardo con Exito");
            }
            echo json_encode($return);
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
