<?php
    require_once "model/snack.model.php";

    class SnackController{
        private $SnackM;

        public function __CONSTRUCT(){
          $this->SnackM = new SnackModel();
        }

        public function mainPage(){
            if (!isset($_SESSION["usuario"])) {
              header("location:index.php?c=main");
            }
            require_once 'views/include/header.php';
            require_once 'views/modules/mod_snack/add.snack.php';
            require_once 'views/include/footer.php';
        }

        public function create(){
            $data = $_POST["data"];
            if(empty($data[0]) || empty($data[1])) {
              $msn="Campos Nulos";
              header("Location: index.php?c=snack&msn=$msn");
            }else{
              $result = $this->SnackM->createSnack($data);
              header("Location: index.php?c=snack&msn=$result");
            }
        }

        public function update(){
          if (!isset($_SESSION["usuario"])) {
            header("location:index.php?c=main");
          }
          $field = $_GET["scode"];
          require_once 'views/include/header.php';
          require_once 'views/modules/mod_snack/update.snack.php';
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
