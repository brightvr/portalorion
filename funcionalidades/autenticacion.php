<?php

    class Autenticacion{

        public $conexion;
        public $contraseña;
        public $email_user;




        public function __construct($conexion,$contraseña,$email_user)
        {

            $this->conect=$conexion;
            $this->pass=$contraseña;
            $this->email=$email_user;

        }



        public function GetHash()
        {   
            $res=null;

            $select="select contraseña from usuarios where correo='".$this->email."'";

            $query=mysqli_query($this->conect,$select);


            while($res=mysqli_fetch_assoc($query)){

                $response=$res;

            }

            return $response;

        }



        public function VerifyPassword($hash)
        {

            if(password_verify($this->pass,$hash)){

                $response = true;//sesion start
            }
            else{

                $response = false;//wrong
            }

        
            return $response;

        }


    }

?>