<?php
// Hay que eliminar el main, arrancar el user.controlle.php
// Para poner la conexion protected y el login ponerlo en el user.controller.php
// Los archivos read va la tabla con los iconos de delete y update
require_once 'model/signin.model.php';
class MainController{

  private $Lmodel;

      public function __CONSTRUCT(){
            $this->Lmodel  = new LoginModel();
        }
        public function mainPage(){
          if (isset($_SESSION["usuario"])) {
            header("location:index.php?c=main&a=dashboard");
          }
            require_once 'views/include/header.php';
            require_once 'views/pages/login.php';
            require_once 'views/include/footer.php';
        }
        public function dashboard(){
          if (!isset($_SESSION["usuario"])) {
          	header("location:index.php?c=main");
          }
      		require_once 'views/include/header.php';
      		require_once 'views/pages/dashboard.php';
      		require_once 'views/include/footer.php';
      	}
        public function login(){
          $data = $_POST["data"];
          $result = $this->Lmodel->compruebaLogin($data);
          if($result==true){
            header("Location: index.php?c=main&a=dashboard");
          }else {
            $msn = "Correo o Contraseña invalida";
            header("Location: index.php?c=main&msn=$msn");
          }
        }
        public function close(){
          session_destroy();
      		header("Location: index.php?c=main");
        }
   }


?>
