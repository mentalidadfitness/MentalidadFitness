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

        public function create(){
            $data = $_POST["data"];
            $data[12] = "PAG".randAlphanum('15').date();
            $result = $this->PageM->createPage($data);
            header("Location: index.php?c=page&msn=$result");
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
