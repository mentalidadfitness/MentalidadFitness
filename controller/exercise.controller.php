<?php
    require_once "model/exercise.model.php";

    class ExerciseController{
        private $ExerciseM;

        public function __CONSTRUCT(){
          $this->ExerciseM = new ExerciseModel();
        }

        public function mainPage(){
            /*if (!isset($_SESSION["usuario"])) {
              header("location:index.php?c=main");
          }*/
            require_once 'views/include/header.php';
            require_once 'views/modules/exercise_mod/exercise_manage/add.exercise.php';
            require_once 'views/include/footer.php';
        }
        public function validExercise(){
          $name = $_POST["nombre"];
          $result = $this->ExerciseM->readExerciseByName($name);
          if (count($result[0])==1) {
            $return = array(false,"El ejercicio ya existe");
          }else{
            $return = array(true,"");
          }
          echo json_encode($return);
        }

        public function create(){
            $data[0] = $_POST["nombre"];
            $data[1] = $_POST["fecha"];
            $data[2] = $_POST["estado"];
            $data[3]="DIE".randAlphanum('15');
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
              $result = $this->ExerciseM->createExercise($data);
              $return = array(true,"Guardo con Exito");
            }
            echo json_encode($return);
        }

        public function update(){
          /*if (!isset($_SESSION["usuario"])) {
            header("location:index.php?c=main");
        }*/
          $field = $_GET["ejcode"];
          require_once 'views/include/header.php';
          require_once 'views/modules/exercise_mod/exercise_manage/update.exercise.php';
          require_once 'views/include/footer.php';
        }

        public function updateData(){
            $data = $_POST["data"];
            $result = $this->ExerciseM->updateExercise($data);
            header("Location: index.php?c=exercise&msn=$result");
        }

        public function delete(){
            $data = $_GET["ejcode"];
            $result = $this->ExerciseM->deleteExercise($data);
            header("Location: index.php?c=exercise&msn=$result");
        }

    }

?>
