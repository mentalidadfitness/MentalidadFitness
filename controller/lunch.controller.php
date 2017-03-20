<?php
    require_once "model/lunch.model.php";

    class LunchController{
        private $LUmodel;

        public function __CONSTRUCT(){
          $this->LUmodel = new LunchModel();
        }

        public function mainPage(){
            require_once 'views/include/header.php';
            require_once 'views/modules/mod_lunch/lunch.add.php';
            require_once 'views/include/footer.php';
        }

        public function create(){
            $data = $_POST["data"];
            $result = $this->LUmodel->createLunch($data);
            header("Location: index.php?c=lunch&msn=$result");
        }

        public function update(){
            $field = $_GET["lucode"];
            require_once 'views/include/header.php';
            require_once 'views/modules/mod_lunch/lunch.update.php';
            require_once 'views/include/footer.php';
        }

        public function updateData(){
            $data = $_POST["data"];
            $result = $this->LUmodel->updateLunch($data);
            header("Location: index.php?c=lunch&msn=$result");
        }

        public function delete(){
            $data = $_GET["lucode"];
            $result = $this->LUmodel->deleteLunch($data);
            header("Location: index.php?c=lunch&msn=$result");
        }

    }

?>
