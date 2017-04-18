<?php

    require_once "model/page.model.php";

    class PageController{
        private $PageM;

        public function __CONSTRUCT(){
          $this->PageM = new PageModel();
        }

        public function mainPage(){
            /*if (!isset($_SESSION["usuario"])) {
              header("location:index.php?c=main");
          }*/
            require_once 'views/include/header.php';
            require_once 'views/modules/security_mod/page_manage/add.page.php';
            require_once 'views/include/footer.php';
        }
        public function validPage(){
          $name = $_POST["nombre"];
          $result = $this->PageM->readPageByName($name);
          if (count($result[0])==1) {
            $return = array(false,"La pagina ya existe");
          }else{
            $return = array(true,"");
          }
          echo json_encode($return);
        }

        public function create(){
            $data[0] = $_POST["nombre"];
            $data[1] = $_POST["icono"];
            $data[2] = $_POST["menu"];
            $data[3] = $_POST["colores"];
            $data[4] = $_POST["url"];
            $data[5] = $_POST["foto"];
            $data[6] = $_POST["descripcion"];
            $data[7] = $_POST["boton"];
            $data[8] = $_POST["propiedad"];
            $data[9] = $_POST["seccion"];
            $data[10] = $_POST["imagenes"];
            $data[11] = $_POST["estado"];
            $data[12] = "PAG".randAlphanum('15');
            for($i=0; $i <count($data); $i++){
              if(strlen($data[$i])==0){
                $p=1;
                break;
              }else{
                $p=0;
              }
            }
            if ($p==1) {
              $return = array(false,"Campos Nulos");
            }else{
              $result = $this->PageM->createPage($data);
              $return = array(true,"Guardo con Exito");
            }
            echo json_encode($return);
        }

        public function update(){
          /*if (!isset($_SESSION["usuario"])) {
            header("location:index.php?c=main");
        }*/
          $field = $_GET["pcode"];
          require_once 'views/include/header.php';
          require_once 'views/modules/security_mod/page_manage/update.page.php';
          require_once 'views/include/footer.php';
        }

        public function updateData(){
            $data = $_POST["data"];
            $result = $this->PageM->updatePage($data);
            header("Location: index.php?c=page&msn=$result");
        }

        public function delete(){
            $data = $_GET["pcode"];
            $result = $this->PageM->deletePage($data);
            header("Location: index.php?c=page&msn=$result");
        }

    }

?>
