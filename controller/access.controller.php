<?php
// Hay que eliminar el main, arrancar el user.controlle.php
// Para poner la conexion protected y el login ponerlo en el user.controller.php
// Los archivos read va la tabla con los iconos de delete y update
require_once 'model/signin.model.php';
require_once 'model/user.model.php';
class AccessController{

  private $AccessM;

      public function __CONSTRUCT(){
            $this->AccessM  = new AccessModel();
            $this->UserM  = new UserModel();
        }
        public function mainPage(){
          /*if (isset($_SESSION["usuario"])) {
            header("location:index.php?c=access&a=dashboard");
        }*/
            require_once 'views/include/header.php';
            require_once 'views/pages/signIn.php';
            require_once 'views/include/footer.php';
            //require_once 'views/include/footer.php';
        }

        public function signUp(){
            require_once 'views/include/header.php';
            require_once 'views/pages/signUp.php';
            require_once 'views/include/footer.php';
        }

        public function recoverAccount(){
            require_once 'views/include/header.php';
            require_once 'views/pages/recoverAccount.php';
            require_once 'views/include/footer.php';
        }

        public function signIn(){
            $data[0] = $_POST["email"];
            $data[1] = $_POST["pass"];

            $userData = $this->UserM->readUserByEmail($data[0]);
            if (password_verify($data[1],$userData["passwordAcc"])) {
                $return = array(true, "index.php?c=user&a=dashboard");

                $_SESSION["user"]["token"] = $userData["token"];
                $_SESSION["user"]["code"] = $userData["code_user"];
                $_SESSION["user"]["name"] = $userData["nameUser"];
                // $_SESSION["user"]["lastname"] = $userData["user_ape"];
                $_SESSION["user"]["email"] = $_POST["email"];
            } else {
                $return = array(false, "Contraseña incorrecta");
            }
            echo json_encode($return);
        }

        public function close(){
          session_destroy();
      		header("Location: index.php?c=views");
        }
   }


?>
