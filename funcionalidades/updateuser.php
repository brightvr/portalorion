<?php

    class UpdateUser{

        public $conect;
        public $id;
        public $nombre;
        public $ciudad;
        public $barrio;
        public $direccion;
        public $telefono;



        public function __construct($conect,$id,$nombre,$ciudad,$barrio,$direccion,$telefono)
        {
            $this->conect=$conect;
            $this->id=$id;
            $this->nombre=$nombre;
            $this->ciudad=$ciudad;
            $this->barrio=$barrio;
            $this->direccion=$direccion;
            $this->telefono=$telefono;
        }


        public function Update()
        {
            $update="update usuarios set nombre='".$this->nombre."', ciudad='".$this->ciudad."', barrio_localidad='".$this->barrio."', direccion='".$this->direccion."', telefono='".$this->telefono."' where id_usuario='".$this->id."'";
            
            //var_dump($update);
            //die();

            if(mysqli_query($this->conect,$update)){


                $response=true;

            }else{

                $response=false;
            }

            
            return $response;
        }
    }


?>