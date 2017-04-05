<?php
    require_once "model/user.model.php";

    class UserController{
        private $UserM;

        public function __CONSTRUCT(){
          $this->UserM = new UserModel();
        }

        public function mainPage(){
            /*if (!isset($_SESSION["user"])) {
              header("location:index.php?c=main");
          }*/
            require_once 'views/include/header.php';
            require_once 'views/modules/security_mod/user_manage/add.user.php';
            require_once 'views/include/footer.php';
        }

        public function create(){
            $tokken=randAlphanum('30');
            $userId="USU".randAlphanum('30');
            $n=3;
            $data = $_POST["data"];
            if(empty($data[0]) || empty($data[1]) || empty($data[2]) || empty($data[3]) || empty($data[5])) {
              $msn="Campos Nulos";
              header("Location: index.php?c=user&msn=$msn");
            }
            elseif(strlen($data[2])<=8){
              $msn="La contraseña debe tener mas de 8 caracteres";
              header("Location: index.php?c=user&msn=$msn");
            }
            elseif(!preg_match('`[a-z]`',$data[2])) {
              $msn="La contraseña debe tener minimo una miniscula";
              header("Location: index.php?c=user&msn=$msn");
            }
            elseif(!preg_match('`[0-9]`',$data[2])) {
              $msn="La contraseña debe tener minimo un numero";
              header("Location: index.php?c=user&msn=$msn");
            }
            /*elseif(!preg_match('`[/\*+-%&@¡!|]`',$data[2])) {
              $msn="La contraseña debe tener minimo un simbolo";
              header("Location: index.php?c=user&msn=$msn");
            }*/elseif($data[2]!==$data[5]){
              $msn="La contraseñas no coinciden";
              header("Location: index.php?c=user&msn=$msn");
            }
            else{
              $data[2] = password_hash($data[2],PASSWORD_DEFAULT);
              $result = $this->UserM->createUser($userId,$data,$tokken,$n);
              header("Location: index.php?c=user&msn=$result");
            }
        }

        public function update(){
          /*if (!isset($_SESSION["user"])) {
            header("location:index.php?c=main");
        }*/
          $field = $_GET["uscode"];
          require_once 'views/include/header.php';
          require_once 'views/modules/security_mod/user_manage/update.user.php';
          require_once 'views/include/footer.php';
        }

        public function updateData(){
            $data = $_POST["data"];
            $data[2] = password_hash($data[2],PASSWORD_DEFAULT);
            $result = $this->UserM->updateUser($data);
            header("Location: index.php?c=user&msn=$result");
        }

        public function delete(){
            $data = $_GET["uscode"];
            $result = $this->UserM->deleteUser($data);
            header("Location: index.php?c=user&msn=$result");
        }

    }

?>
