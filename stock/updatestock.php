<?php

class Stock{


    public $id_producto;
    public $conexion;
    public $vendidos;


    public function __construct($id_producto,$conexion, $vendidos)
    {

        $this->id=$id_producto;
        $this->conect=$conexion;
        $this->vendidos=$vendidos;
        
    }


    public function GetData()
    {

        $consulta="select * from productos where id_producto=".$this->id;

        $query=mysqli_query($this->conect,$consulta);


        $data=null;


        while($response=mysqli_fetch_assoc($query)){


            $data[]=$response;
        }


        //validacion data
        if($data===null){

            return "No se encontro ningun producto con este id: ".$this->id;

        }else{

            return $data;
        }


    }



    public function ChangeStock($data)
    {

       // var_dump($data[0]['stock']);
        //var_dump($this->vendidos);


        $newStock=intval($data[0]['stock']) - intval($this->vendidos);

        if($newStock===0){


            $cambios=[

                "stock"=>0,
                "disponibilidad"=>"No disponible"

            ];

        }else{


            $cambios=[

                "stock"=>$newStock,
                "disponibilidad"=>"Unidades disponibles"

            ];


        }


        $consulta2="update productos set stock='".$cambios['stock']."',disponibilidad='".$cambios['disponibilidad']."' where id_producto=".$this->id;

        if(mysqli_query($this->conect,$consulta2)){


            //var_dump("STOCK ACTUALIZADO CON EXITO");
       
        }else{

            //var_dump("ERROR AL ACTUALIZAR EL STOCK");
            header('Location:../index.php?response=Error al actualizar stock comunicate con soporte');

        }


    }
}

?>