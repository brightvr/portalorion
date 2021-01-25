<?php

    //var_dump($_POST);

    class Registro{


        public $data;
        public $conexion;


        public function __construct($data,$conexion)
        {
            $this->data=$data;
            $this->conect=$conexion;
            
        }


        public function VerfyEmail()
        {

            $res=null;

            $select="select correo from usuarios where correo='".$this->data['correo-usuario']."'";
            $query=mysqli_query($this->conect,$select);

            while($response=mysqli_fetch_assoc($query)){

                $res[]=$response;
            }

            return $res;
        }


        public function EncriptPassword()// this function use the password and become the encript
        {

            $password=$this->data['contraseña-usuario'];

            $cifrado=password_hash($password,PASSWORD_BCRYPT,['cost'=>4]);


            return $cifrado;

        }

        
        public function GetNewUser(){//this function return an arrray with all data user 

            $select="select * from usuarios where correo ='".$this->data['correo-usuario']."'";

   
            $query=mysqli_query($this->conect,$select);

           
            while($response=mysqli_fetch_assoc($query)){


                $user[]=$response;
            }


            return $user;


        }



        public function NewUser($contraseña)//this function return a boolean ,it just insert query into usuario 
        {

            $nombre=$this->data['nombre-usuario'];
            $ciudad=$this->data['ciudad-usuario'];
            $correo=$this->data['correo-usuario'];



            $insert="insert into usuarios values(null,'".$nombre."','".$ciudad."','".$correo."','".$contraseña."','','','')";

            $query=mysqli_query($this->conect,$insert);


            if($query){

                $response = true;
              
            }else{

                $response = false;
            }


            return $response;


        }

    }

?>