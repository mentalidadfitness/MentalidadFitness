<?php

    class UserModel extends DataBase{
        private $pdo;
        function __CONSTRUCT(){
            try {
                $this->pdo = DataBase::connect();
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
        }
        //FUNCION PARA CREAR UN USUARIO
        public function createUser($data){
            try {
                $sql = "INSERT INTO user VALUES(?,?,?)";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($data[6],$data[0],$data[4]));
                $sql = "INSERT INTO access VALUES(?,?,?,?,?,?,?)";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($data[5],$data[2],$data[1],$data[7],$data[0],$data[6],$data[8]));
                $msn = "Usuario guardado correctamente";
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
            return $msn;
        }

        public function readRole(){
            try {
                $sql="SELECT * FROM role ORDER BY nameRole";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);

                return $result;
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
        }

        public function readUser($de){
            try {
                $sql="SELECT * FROM user INNER JOIN access ON(user.code_user=access.code_user) LIMIT $de,5";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);
                return $result;
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
        }
        public function contarUser(){
          try {
            $sql="SELECT * FROM user";
            $query=$this->pdo->prepare($sql);
            $query->execute();
            $result=$query->fetchALL(PDO::FETCH_BOTH);
          } catch (PDOException $e) {
            die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
          }
          return $result;
        }

        public function readUserByCode($field){
            try {
                $sql="SELECT * FROM user INNER JOIN access ON(user.code_user=access.code_user) WHERE user.code_user = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($field));
                $result = $query->fetch(PDO::FETCH_BOTH);
                return $result;
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
        }

        public function readUserByToken($field){
            try {
                $sql="SELECT * FROM access INNER JOIN user ON(access.code_user = user.code_user)
                                WHERE token = ? ";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($field));
                $result = $query->fetch(PDO::FETCH_BOTH);
                return $result;
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
        }

        public function updateUser($data){
            try {
                $sql="UPDATE user SET nameUser = ? WHERE code_user = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($data[0],$data[3]));
                $sql="UPDATE access SET  emailAcc = ?, passwordAcc = ? WHERE code_user = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($data[1],$data[2],$data[3]));
                $msn = "Usuario Modifico con exito!";
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
            return $msn;
        }

        public function updateStatusByToken($data){
            try {
                $sql="UPDATE access SET statusAcc = 'Activo' WHERE token = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($data));
                $msn = "Estado modificado con exito!";
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
            return $msn;
        }
        public function updateStatusBlocking($data){
            try {
                $sql="UPDATE access SET statusAcc = 'Bloqueado' WHERE emailAcc = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($data));
                $msn = "Estado modificado con exito!";
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
            return $msn;
        }

        public function deleteUser($field){
            try {
                $sql = "DELETE FROM user WHERE code_user = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($field));
                $sql = "DELETE FROM access WHERE code_user = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($field));
                $msn = "Usuario Eliminado correctamente!";
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
            return $msn;
        }

        public function readUserByEmail($data){
            try {
                $sql = "SELECT emailAcc, passwordAcc, token, statusAcc, user.code_user, user.nameUser, user.code_role
                FROM access INNER JOIN user ON(access.code_user = user.code_user)
                                WHERE emailAcc = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($data));
                $result = $query->fetch(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
            return $result;
        }

        public function updatePassword($data){
            try {
                $sql = "UPDATE access SET passwordAcc = ? WHERE token = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($data[0],$data[2]));
                $msn = "Contaseña modificada con éxito";
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
            return $msn;
        }

        public function sendEmailForgetPass($data){
            $mail = new PHPMailer();
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = EMAIL_SET_FROM;
            $mail->Password = SECRET_PASSWORD;
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;
            $mail->setFrom(EMAIL_SET_FROM, 'Mentalidad Fitness');
            $mail->addAddress($data[0]);
            $mail->isHTML(true);
            $mail->Subject = '[MentalidadFitness] Por favor cambie su contraseña';
            $mail->Body = 'Cambio de contraseña';
            $mail->MsgHTML('<!DOCTYPE html>
            <html>
              <head>
                <meta charset="utf-8">
                <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
              </head>
              <body >
                <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse:collapse;line-height:24px;margin:0;padding:0;width:100%;font-size:17px;color:#373737;background:#f5f5f5 "><tbody><tr>  <td valign="top" style="font-family:"Helvetica Neue",Helvetica,Arial,sans-serif!important;border-collapse:collapse">
                    <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse:collapse"><tbody><tr><td valign="bottom" style="font-family:"Helvetica Neue",Helvetica,Arial,sans-serif!important;border-collapse:collapse;padding:20px 16px 12px;">
                </td>
                  </tr></tbody></table></td>
                    </tr><tr><td valign="top" style="font-family:"Helvetica Neue",Helvetica,Arial,sans-serif!important;border-collapse:collapse">
                    <table cellpadding="32" cellspacing="0" border="0" align="center" style="border-collapse:collapse;background:white;border-radius:0.5rem;margin-bottom:1rem;">
                      <tr>
                            </tr><tbody><tr><td width="546" valign="top" style="font-family:"Helvetica Neue",Helvetica,Arial,sans-serif!important;border-collapse:collapse">
                      <div style="max-width:600px;margin:0 auto">
                        <div style="text-align:center;">
                            <img src="http://fotos.subefotos.com/d290713089d677ae0b4cc33d4e96f337o.png" width="200" height="200" style="outline:none;text-decoration:none;border:none;" class="CToWUd"></a>
                          </div>
                        <div style="background:white;border-radius:0.5rem;margin-bottom:1rem">
                          <h2 style="color:#42a5f5;line-height:30px;margin-bottom:12px;margin:0 0 12px;text-align:center;">¿Olvidaste tu contraseña?</h2>
                          <p style="font-size:17px;line-height:24px;margin:0 0 16px;font-family: "Roboto", sans-serif;">
                            Hola <strong>'.$data[1].'</strong>,
                          </p>
                          <p style="font-size:17px;line-height:24px;margin:0 0 16px;font-family: "Roboto", sans-serif;">
                          Escuchamos que perdiste tu contraseña de MentalidadFitness. Lo siento por eso pero no te preocupes puedes utilizar el siguiente enlace para cambiar tu contraseña
                          </p>
                          <p style="font-size:17px;line-height:24px;margin:0 0 16px;font-family: "Roboto", sans-serif;">
                            Si tienes alguna pregunta, envianos un correo a <a href="mailto:mentalidadfitness@gmail.com" style="color:#439fe0;font-weight:bold;text-decoration:none;word-break:break-word" target="_blank">mentalidadfitness@<span class="il">gmail</span>.com</a> Nos encantaría ayudarte
                          </p>
                            <p style="font-size:17px;line-height:24px;margin:0 0 16px;font-family: "Roboto", sans-serif;">
                              Gracias,<br>
                              Tus amigos de <span style="color:#42a5f5;font-weight:bold;">Mentalidad Fitness.</span>
                            </p>
                            <a  href="http://localhost:80/MentalidadFitness/index.php?c=user&a=recoverPassword&token='.$data[2].'" style="display:block;text-decoration:none;color:black;border-radius:5px;margin-left:30%;border:2px solid #f8e71c;height:20;background-color:#f8e71c;width:42%;height:50px;font-size:20px;margin-top:5%;font-family:sans-serif;font-weight:semibold;cursor:pointer; text-align:center; line-height:2.5; color:#212121;">CAMBIAR</a>
                          </div>
                        </div>
                      </td>
                    </tr></tbody></table></td>
                  </tr></tbody></table>
              </body>
            </html>
    ');
            $mail->CharSet = 'UTF-8';
            if ($mail->send()) {
                $msn = "Envio correctamente";
                header("Location: index.php?c=views&a=forgetPass&msn=$msn");
            } else {
                $msn = "Correo invalido";
                header("Location: index.php?c=views&a=forgetPass&msn=$msn");
            }
        }

        public function sendEmailActiveAccount($data){
            $mail = new PHPMailer();
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = EMAIL_SET_FROM;
            $mail->Password = SECRET_PASSWORD;
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;
            $mail->setFrom(EMAIL_SET_FROM, 'Mentalidad Fitness');
            $mail->addAddress($data[1]);
            $mail->isHTML(true);
            $mail->Subject = '[MentalidadFitness] Por favor activa tu cuenta';
            $mail->Body = 'Cambio de contraseña';
            $mail->MsgHTML('<!DOCTYPE html>
            <html>
              <head>
                <meta charset="utf-8">
              </head>
              <body>
                <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse:collapse;line-height:24px;margin:0;padding:0;width:100%;font-size:17px;color:#373737;background:#f9f9f9"><tbody><tr><td valign="top" style="font-family:Helvetica,Arial,sans-serif!important;border-collapse:collapse">
                  <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse:collapse"><tbody><tr><td  style="font-family:Helvetica,Arial,sans-serif!important;border-collapse:collapse;">
                    </td>
                  </tr></tbody></table></td>
              		</tr><tr><td valign="top" style="font-family:Helvetica,Arial,sans-serif!important;border-collapse:collapse">
                    <table cellpadding="32" cellspacing="0" border="0" align="center" style="border-collapse:collapse;background:white;border-radius:0.5rem;margin-bottom:1rem"><tbody><tr><td width="546" valign="top" style="font-family:Helvetica,Arial,sans-serif!important;border-collapse:collapse">
                      <div style="text-align:center">
                          <img src="http://fotos.subefotos.com/d290713089d677ae0b4cc33d4e96f337o.png" width="250" height="250" style="outline:none;text-decoration:none;border:none;" class="CToWUd"></a>
                        </div>
                      <div style="max-width:600px;margin:0 auto">
                        <div style="background:white;border-radius:0.5rem;margin-bottom:1rem">
                          <h2 style="color:#FBC020;line-height:30px;margin-bottom:12px;margin:0 0 12px">Información <span class="il">de la cuenta.</span></h2>
                          <p style="font-size:17px;line-height:24px;margin:0 0 16px">
                            Hola '.$data[0].',
                          </p>
                          <p style="font-size:17px;line-height:24px;margin:0 0 16px">
                            <span class="il"><strong>BIENVENIDO,</strong></span> haz creado tu cuenta en <strong>Mentalidad Fitness</strong>. En caso de que sea útil, he aquí uno de los detalles de su cuenta:
                          </p>
                          <p style="font-size:17px;line-height:24px;margin:0 0 16px">
                            <strong>Nombre: </strong>'.$data[0].'<br><strong>Correo electronico: </strong> <a  target="_blank">'.$data[1].'</a><br></p>
                            <a href="http://localhost:80/MentalidadFitness/index.php?c=user&a=updateStatus&status=true&token='.$data[5].'" style="text-decoration:none;margin:0 0 16px;cursor: pointer;color:black;border-radius:8px;border:2px solid #f8e71c;height:20%;background-color:#f8e71c;width:42%;height:8vh;font-size:3vh;margin-top:1%;font-family:sans-serif; display:block; text-align:center;line-height:2.5">ACTIVAR</a>
                            <p style="font-size:17px;line-height:24px;margin:0 0 16px">
                              Si tienes alguna pregunta, envianos un correo a <a  style="color:#439fe0;font-weight:bold;text-decoration:none;word-break:break-word" target="_blank">mentalidadfitnessapp@<span class="il">gmail</span>.com</a>. Nos encantaría ayudarte
                            </p>
                            <p style="font-size:17px;line-height:24px;margin:0 0 16px">
                              Gracias,<br>
                              Tus amigos de <span style="color:#42a5f5;font-weight:bold;">Mentalidad Fitness.</span>
                            </p>
                          </div>
                        </div>
                      </td>
                    </tr></tbody></table></td>
                  </tr></tbody></table>
              </body>
            </html>
            ');
            $mail->CharSet = 'UTF-8';
            if ($mail->send()) {
                $msn="Usuario".$data[1]."Registrado";
            } else {
                $msn = "Correo invalido";
            }
            return $msn;
        }
        public function updateAccFail($data){
      		try{
        			$sql = "UPDATE access SET tryAcc = (tryAcc - 1) WHERE emailAcc = ?";
      				$query = $this->pdo->prepare($sql);
      				$query->execute(array($data));
        			$sql = "SELECT tryAcc FROM access WHERE emailAcc = ?";
      				$query = $this->pdo->prepare($sql);
      				$query->execute(array($data));
      				$result = $query->fetch(PDO::FETCH_BOTH);
      			}catch (PDOException $e) {
      			die($e->getMessage());
      		}
      		return $result;
      	}
        public function againAccFile($data){
          try{
              $sql = "UPDATE access SET tryAcc = 4 WHERE emailAcc = ?";
              $query = $this->pdo->prepare($sql);
              $query->execute(array($data));
            }catch (PDOException $e) {
            die($e->getMessage());
          }
        }

        public function __DESTRUCT(){
            DataBase::disconnect();
        }
    }


?>
