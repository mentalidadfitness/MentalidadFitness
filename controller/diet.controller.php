<?php
    require_once "model/diet.model.php";

    class DietController{
        private $DietM;

        public function __CONSTRUCT(){
          $this->DietM = new DietModel();
        }

        public function mainPage(){
            /*if (!isset($_SESSION["usuario"])) {
              header("location:index.php?c=main");
          }*/
            require_once 'views/include/header.php';
            require_once 'views/modules/food_mod/diet_manage/add.diet.php';
            require_once 'views/include/footer.php';
        }

        public function create(){
            $data = $_POST["data"];
            $data[7] = "DIE".randAlphanum('15');
            for($i=0; $i <count($data); $i++){
              if(strlen($data[$i])==0){
                $p=1;
                break;
              }else{
                $p=0;
              }
            }
            if ($p==1) {
              $msn="Campos Nulos";
              header("Location: index.php?c=diet&msn=$msn");
            }else{
              $result = $this->DietM->createDiet($data);
              header("Location: index.php?c=diet&msn=$result");
            }

        }

        public function update(){
          /*if (!isset($_SESSION["usuario"])) {
            header("location:index.php?c=main");
        }*/
          $field = $_GET["dicode"];
          require_once 'views/include/header.php';
          require_once 'views/modules/food_mod/diet_manage/update.diet.php';
          require_once 'views/include/footer.php';
        }

        public function updateData(){
            $data = $_POST["data"];
            $result = $this->DietM->updateDiet($data);
            header("Location: index.php?c=diet&msn=$result");
        }

        public function delete(){
            $data = $_GET["dicode"];
            $result = $this->DietM->deleteDiet($data);
            header("Location: index.php?c=diet&msn=$result");
        }

    }

?>
