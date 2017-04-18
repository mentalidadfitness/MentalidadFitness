<?php
    require_once "model/user.model.php";
    require_once 'views/assets/others/libraries/PHPMailer/PHPMailerAutoload.php';
    require_once 'views/assets/others/archives/constants.php';
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

        public function recoverPassword(){
            $field = $_GET["token"];
            require_once 'views/include/header.php';
            require_once 'views/modules/security_mod/user_manage/main/recoverPassword.php';
            require_once 'views/include/footer.php';
        }

        public function resetPassword(){
            $data = $_POST["data"];
            $data[0] = password_hash($data[0],PASSWORD_DEFAULT);
            $result = $this->UserM->updatePassword($data);
            header("Location: index.php?c=views&msn=$result");
        }

        public function create(){
          $data = $_POST["data"];
          if (isset($data[4])) {
            $url="user";
          }else{
            $url="views&a=signUp";
          }
          if(empty($data[0]) || empty($data[1]) || empty($data[2])) {
            $msn="Campos Nulos";
            header("Location: index.php?c=$url&msn=$msn");
          }
          elseif(strlen($data[2])<=8){
            $msn="La contraseña debe tener mas de 8 caracteres";
            header("Location: index.php?c=$url&msn=$msn");
          }
          elseif(!preg_match('`[a-z]`',$data[2])) {
            $msn="La contraseña debe tener minimo una miniscula";
            header("Location: index.php?c=$url&msn=$msn");
          }
          elseif(!preg_match('`[0-9]`',$data[2])) {
            $msn="La contraseña debe tener minimo un numero";
            header("Location: index.php?c=$url&msn=$msn");
          }/*elseif(!preg_match('`[/\*+-%&@¡!|]`',$data[2])) {
                      $msn="La contraseña debe tener minimo un simbolo";
                      header("Location: index.php?c=$url&msn=$msn");
          }*/
          elseif($data[2]!==$data[3]){
            $msn="La contraseñas no coinciden";
            header("Location: index.php?c=$url&msn=$msn");
          }else{
            $data[5]=randAlphanum('30');
            $data[6]="USU".randAlphanum('30');
            $data[7]=3;
            $data[2] = password_hash($data[2],PASSWORD_DEFAULT);
            $result = $this->UserM->createUser($data);
            $user = $this->UserM->readUserByEmail($data[1]);
            $user = $this->UserM->sendEmailActiveAccount($data);
            header("Location: index.php?c=$url&msn=$result");
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

        public function validEmail(){
            $data = $_POST["email"];
            $response = $this->UserM->readUserByEmail($data);

            if (count($response[0]) <= 0) {
                $return = array("El correo no existe", false);
            } else {
                $return = array("", true);
            }
            echo json_encode($return);
        }


        public function sendEmailForgetPass(){
            $user = $this->UserM->readUserByEmail($_POST["email"]);
            $data[0] = $_POST["email"];
            $data[1] = $user["nameUser"];
            $data[2] = $user["token"];
            $user = $this->UserM->sendEmailForgetPass($data);
        }

    }

?>
