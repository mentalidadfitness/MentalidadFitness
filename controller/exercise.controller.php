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

        public function create(){
            $data = $_POST["data"];
            
            $result = $this->ExerciseM->createExercise($data);
            header("Location: index.php?c=exercise&msn=$result");
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
