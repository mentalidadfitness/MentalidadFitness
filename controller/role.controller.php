<?php
    require_once "model/role.model.php";

    class RoleController{
        private $ROmodel;

        public function __CONSTRUCT(){
          $this->ROmodel = new RoleModel();
        }

        public function mainPage(){
            require_once 'views/include/header.php';
            require_once 'views/modules/mod_role/role.add.php';
            require_once 'views/include/footer.php';
        }

        public function create(){
            $data = $_POST["data"];
            $result = $this->ROmodel->createRole($data);
            header("Location: index.php?c=role&msn=$result");
        }

        public function update(){
            $field = $_GET["rocode"];
            require_once 'views/include/header.php';
            require_once 'views/modules/mod_role/role.update.php';
            require_once 'views/include/footer.php';
        }

        public function updateData(){
            $data = $_POST["data"];
            $result = $this->ROmodel->updateRole($data);
            header("Location: index.php?c=role&msn=$result");
        }

        public function delete(){
            $data = $_GET["rocode"];
            $result = $this->ROmodel->deleteRole($data);
            header("Location: index.php?c=role&msn=$result");
        }

    }

?>
