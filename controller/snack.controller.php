<?php
    require_once "model/snack.model.php";

    class SnackController{
        private $SnackM;

        public function __CONSTRUCT(){
          $this->SnackM = new SnackModel();
        }

        public function mainPage(){
            /*if (!isset($_SESSION["usuario"])) {
              header("location:index.php?c=main");
          }*/
            require_once 'views/include/header.php';
            require_once 'views/modules/food_mod/snack_manage/add.snack.php';
            require_once 'views/include/footer.php';
        }
        public function validSnack(){
          $name = $_POST["nombre"];
          $result = $this->SnackM->readSnackByName($name);
          if (count($result[0])==1) {
            $return = array(false,"El snack ya existe");
          }else{
            $return = array(true,"");
          }
          echo json_encode($return);
        }

        public function create(){
            $data[0] = $_POST["nombre"];
            $data[1] = $_POST["descripcion"];
            $data[2] = "SNA".randAlphanum('15');
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
              $result = $this->SnackM->createSnack($data);
              $return = array(true,"Guardo con Exito");
            }
            echo json_encode($return);
        }

        public function update(){
          /*if (!isset($_SESSION["usuario"])) {
            header("location:index.php?c=main");
        }*/
          $field = $_GET["scode"];
          require_once 'views/include/header.php';
          require_once 'views/modules/food_mod/snack_manage/update.snack.php';
          require_once 'views/include/footer.php';
        }

        public function updateData(){
            $data = $_POST["data"];
            $result = $this->SnackM->updateSnack($data);
            header("Location: index.php?c=snack&msn=$result");
        }

        public function delete(){
            $data = $_GET["scode"];
            $result = $this->SnackM->deleteSnack($data);
            header("Location: index.php?c=snack&msn=$result");
        }

    }

?>
