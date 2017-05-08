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
          $data = $_POST["datauser"];
          if (isset($data[4])) {
            $url="index.php?c=user";
          }else{
            $url="index.php";
            $data[4]="ROL3XIn4mITezUlwc1";
          }
          for ($i=0; $i <count($data) ; $i++) {
            if(empty($data[$i])) {
              $c=1;
              break;
            }else{
              $c=2;
          }
          }
          if(strlen($data[2])<=8){
            $return= array(false,"La contraseña debe tener mas de 8 caracteres","");
          }
          elseif(!preg_match('`[a-z]`',$data[2])) {
            $return= array(false,"La contraseña debe tener minimo una miniscula","");
          }
          elseif(!preg_match('`[0-9]`',$data[2])) {
            $return= array(false,"La contraseña debe tener minimo un numero","");
          }/*elseif(!preg_match('`[/\*+-%&@¡!|]`',$data[2])) {
                      $msn="La contraseña debe tener minimo un simbolo";
                      header("Location: index.php?c=$url&msn=$msn");
          }*/
          elseif($data[2]!==$data[3]){
            $return = array(false,"Las contraseñas no coinciden","");
          }elseif($c==1){
            $return = array(false,"Campos Nulos","");
          }else{
            $data[5]=randAlphanum('30');
            $data[6]="USU".randAlphanum('30');
            $data[7]=4;
            $data[8]="Inactivo";
            $data[2] = password_hash($data[2],PASSWORD_DEFAULT);
            $result = $this->UserM->createUser($data);
            $user = $this->UserM->readUserByEmail($data[1]);
            $user = $this->UserM->sendEmailActiveAccount($data);
            $return = array(true,$user,$url);
            }
          echo json_encode($return);
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

        public function updateStatus(){
            $status = $_GET["status"];
            if ($status == true) {
                $token = $_GET["token"];
                $result = $this->UserM->updateStatusByToken($token);
                $user = $this->UserM->readUserByToken($token);
                $_SESSION["user"]["token"] = $user["token"];
                $_SESSION["user"]["code"] = $user["code_user"];
                $_SESSION["user"]["name"] = $user["nameUser"];
                $_SESSION["user"]["email"] = $user["emailAcc"];
                $msn = "Soy el puto amo";
                header("Location: index.php?c=views&a=completeProfile&msn=$msn");
            }
        }

        public function prueba(){
            require_once 'views/include/header.php';
            require_once 'views/modules/pag_prueba.php';
            require_once 'views/include/footer.php';
        }
        public function paginacion(){
          $pagina = $_GET["pag"];
          switch ($pagina) {
            case 1:
              $de=0;
              break;
            case 2:
              $de=5;
              break;
            case 3:
              $de=10;
              break;
            case 4:
              $de=15;
              break;
          }
          $this->UserM->readUser($de);
          header("location:index.php?c=user&pag=$pagina&de=$de");
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
            $result = $this->UserM->readUserByEmail($data);
            if (count($result[0]) <= 0) {
                $return = array("", false);
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
