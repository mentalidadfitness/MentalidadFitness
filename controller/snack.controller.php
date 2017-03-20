<?php
    require_once "model/snack.model.php";

    class SnackController{
        private $SNmodel;

        public function __CONSTRUCT(){
          $this->SNmodel = new SnackModel();
        }

        public function mainPage(){
            require_once 'views/include/header.php';
            require_once 'views/modules/mod_snack/snack.add.php';
            require_once 'views/include/footer.php';
        }

        public function create(){
            $data = $_POST["data"];
            $result = $this->SNmodel->createSnack($data);
            header("Location: index.php?c=snack&msn=$result");
        }

        public function update(){
          $field = $_GET["sncode"];
          require_once 'views/include/header.php';
          require_once 'views/modules/mod_snack/snack.update.php';
          require_once 'views/include/footer.php';
        }

        public function updateData(){
            $data = $_POST["data"];
            $result = $this->SNmodel->updateSnack($data);
            header("Location: index.php?c=snack&msn=$result");
        }

        public function delete(){
            $data = $_GET["sncode"];
            $result = $this->SNmodel->deleteSnack($data);
            header("Location: index.php?c=snack&msn=$result");
        }

    }

?>
