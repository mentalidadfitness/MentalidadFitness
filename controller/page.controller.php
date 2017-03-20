<?php
    require_once "model/page.model.php";

    class PageController{
        private $PAmodel;

        public function __CONSTRUCT(){
          $this->PAmodel = new PageModel();
        }

        public function mainPage(){
            require_once 'views/include/header.php';
            require_once 'views/modules/mod_page/page.add.php';
            require_once 'views/include/footer.php';
        }

        public function create(){
            $data = $_POST["data"];
            $result = $this->Pmodel->createPage($data);
            header("Location: index.php?c=page&msn=$result");
        }

        public function update(){
          $field = $_GET["pacode"];
          require_once 'views/include/header.php';
          require_once 'views/modules/mod_page/page.update.php';
          require_once 'views/include/footer.php';
        }

        public function updateData(){
            $data = $_POST["data"];
            $result = $this->Pmodel->updatePage($data);
            header("Location: index.php?c=page&msn=$result");
        }

        public function delete(){
            $data = $_GET["pacode"];
            $result = $this->Pmodel->deletePage($data);
            header("Location: index.php?c=page&msn=$result");
        }

    }

?>
