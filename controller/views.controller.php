<?php
    /*
    Bueno muchachos acá les va como crear una vista para que todos trabajemos y que no dependan
    de Pablo y yo para hacer una, entonces les explicara de manera breve, a continuación tienen ejemplo de vistas, pero se los voy a explicar detalladamente
    views/include/header.php = al head del html con sus hojas de estilo, los meta y entre otros
    views/include/footer.php = al footer, donde van los scripts y el cierre de body y html
    Una vista se crea de la siguiente forma, lo que va dentro de llaves es lo que se puede editar así
    [editar], lo unico que tienen que hacer es crear una funcion, tiene que estar dentro de la clase, entonces sería de la siguiente forma
    public function [nombre_de_la_vista](){
        require_once 'views/include/header.php'; Esto se deja tal como está
        require_once 'views/[la_ruta_de_la_vista_a_partir_del_index]';
        require_once 'views/include/footer.php'; Esto se deja tal como está
    }
    Mi recomendación es que vean alguna vista para ver como está y ya empiecen a crear sus propias vista
    No tengan miedo que para eso les creamos esta vista
    */
    class ViewsController{

        public function mainPage(){
            require_once 'views/include/header.php';
            require_once 'views/modules/security_mod/user_manage/main/signIn.php';
            require_once 'views/include/footer.php';
        }

        public function signUp(){
            require_once 'views/include/header.php';
            require_once 'views/modules/security_mod/user_manage/main/signUp.php';
            require_once 'views/include/footer.php';
        }

        public function forgetPass(){
            require_once 'views/include/header.php';
            require_once 'views/modules/security_mod/user_manage/main/forgetPass.php';
            require_once 'views/include/footer.php';
        }

        public function dashboard(){
            if ($_SESSION["user"]["role"] == "ROLKK2MrmsRueKNRXF") {
                require_once 'views/include/header.php';
                require_once 'views/include/main.php';
                //require_once 'views/modules/chart_mod/Graphics/main.php';
                require_once 'views/include/footer.php';
            }
        }

        public function completeProfile(){
            require_once 'views/include/header.php';
            require_once 'views/modules/security_mod/user_manage/app/completeProfile.php';
            require_once 'views/include/footer.php';
        }
    }

?>
