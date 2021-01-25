<?php

class Olvidar{


    public $email;
    public $metodo;
    public $conexion;


    public function __construct($email,$metodo,$conexion)
    {
        $this->mail=$email;
        $this->metodo=$metodo;
        $this->conect=$conexion;
    }


    public function CompararDB()
    {
        $consulta="select correo from usuarios where correo ='".$this->mail."'";

        $query =mysqli_query($this->conect,$consulta);

        while($response=mysqli_fetch_assoc($query)){

            $correo=$response;
        }
        


        return $correo;

    }


    public function SaveForget()
    {
        $insert="insert into forget_password values(null,'".$this->mail."','".$this->metodo."');";

        //var_dump($insert);
        //die();

        if(mysqli_query($this->conect,$insert)){

            $response=true;

        }else{

            $response=false;

        }

        return $response;
    }
}

?>