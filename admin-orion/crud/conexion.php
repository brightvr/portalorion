<?php

/*Para usar la conexion en otros archivos externos
solamente hay que incluir el archivo y usar la variable
$miconexion e instanciar el metodo asi: $miconexion->Conectando()*/

class ConexionDB{

    public $servidor;
    public $usuario;
    public $contraseña;
    public $nombre_bd;

    public function __construct($servidor,$usuario,$contraseña,$nombre_bd)
    {
        $this->servidor=$servidor;
        $this->usuario=$usuario;
        $this->contraseña=$contraseña;
        $this->nombre_bd=$nombre_bd;
        
    }

    public function Conectando(){

        $conexion_estblecida=mysqli_connect($this->servidor, $this->usuario, $this->contraseña, $this->nombre_bd);

        if(mysqli_connect_errno()){
            
            echo 'Conexion fallida error: '.mysqli_connect_error();//error en la conexion
        }else{

            mysqli_query($conexion_estblecida,"SET NAMES 'utf8");//consulta para codificar la codificacion de caracateres

            //var_dump('ok conexion');
            return $conexion_estblecida;
        }
    }



}

//credenciales produccion
//$miconexion= new ConexionDB('localhost','u418177199_adminorion','5719326David','u418177199_portalorion');

//credenciales desarrollo
//$miconexion= new ConexionDB('5.181.218.103','u418177199_adminorion','5719326David','u418177199_portalorion');

//var_dump('estoy incluido');

//USANDO LA VARIABLE $miconexion SE INSTANCIA EL METODO CONECTANDO 

