<?php
    require_once "model/role.model.php";

    class RoleController{
        private $RoleM;

        public function __CONSTRUCT(){
          $this->RoleM = new RoleModel();
        }

        public function mainPage(){
            /*if (!isset($_SESSION["usuario"])) {
              header("location:index.php?c=main");
          }*/
            require_once 'views/include/header.php';
            require_once 'views/modules/security_mod/role_manage/add.role.php';
            require_once 'views/include/footer.php';
        }
        public function validRole(){
          $name = $_POST["nombre"];
          $result = $this->RoleM->readRoleByName($name);
          if (count($result[0])==1) {
            $return = array(false,"El rol ya existe");
          }else{
            $return = array(true,"");
          }
          echo json_encode($return);
        }
        public function create(){
            $data[0] = $_POST["nombre"];
            $data[1] = $_POST["estado"];
            $data[2] = "ROL".randAlphanum('15');
            if(empty($data[0]) || empty($data[1])) {
              $return = array(false,"Campos nulos");
            }else{
              $result = $this->RoleM->createRole($data);
              $return = array(true,"Guardo con Exito");
            }
            echo json_encode($return);
        }

        public function update(){
         /* if (!isset($_SESSION["usuario"])) {
            header("location:index.php?c=main");
        }*/
          $field = $_GET["rcode"];
          require_once 'views/include/header.php';
          require_once 'views/modules/security_mod/role_manage/update.role.php';
          require_once 'views/include/footer.php';
        }

        public function updateData(){
            $data = $_POST["data"];
            $result = $this->RoleM->updateRole($data);
            header("Location: index.php?c=role&msn=$result");
        }

        public function delete(){
            $data = $_GET["rcode"];
            $result = $this->RoleM->deleteRole($data);
            header("Location: index.php?c=role&msn=$result");
        }

    }

?>
