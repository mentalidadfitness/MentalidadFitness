<?php
    require_once "model/exercise.model.php";

    class ExerciseController{
        private $EXmodel;

        public function __CONSTRUCT(){
          $this->EXmodel = new ExerciseModel();
        }

        public function mainPage(){
            require_once 'views/include/header.php';
            require_once 'views/modules/mod_exercise/exercise.add.php';
            require_once 'views/include/footer.php';
        }

        public function create(){
            $data = $_POST["data"];
            $result = $this->EXmodel->createExercise($data);
            header("Location: index.php?c=exercise&msn=$result");
        }

        public function update(){
            $field = $_GET["excode"];
            require_once 'views/include/header.php';
            require_once 'views/modules/mod_exercise/exercise.update.php';
            require_once 'views/include/footer.php';
        }

        public function updateData(){
            $data = $_POST["data"];
            $result = $this->EXmodel->updateExercise($data);
            header("Location: index.php?c=exercise&msn=$result");
        }

        public function delete(){
            $data = $_GET["excode"];
            $result = $this->EXmodel->deleteExercise($data);
            header("Location: index.php?c=exercise&msn=$result");
        }

    }

?>
