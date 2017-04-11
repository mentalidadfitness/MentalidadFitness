<?php
// Hay que eliminar el main, arrancar el user.controlle.php
// Para poner la conexion protected y el login ponerlo en el user.controller.php
// Los archivos read va la tabla con los iconos de delete y update
require_once 'model/signin.model.php';
class AccessController{

  private $AccessM;

      public function __CONSTRUCT(){
            $this->AccessM  = new AccessModel();
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

        public function dashboard(){
          /*if (!isset($_SESSION["usuario"])) {
          	header("location:index.php?c=access");
        }*/
      		require_once 'views/include/header.php';
      		require_once 'views/include/footer.php';
      	}

        public function signIn(){
          $data = $_POST["data"];
          $result = $this->AccessM->checkLogin($data);
          if($result==true){
            header("Location: index.php?c=access&a=dashboard");
          }else {
            $msn = "Correo o Contraseña invalida";
            header("Location: index.php?c=access&msn=$msn");
          }
        }
        public function close(){
          session_destroy();
      		header("Location: index.php?c=access");
        }
   }


?>
