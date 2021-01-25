<?php

class Comprar{

    public $conexion;
    public $data_user;
    public $data_venta;
    public $destinatario;


    public function __construct($conexion,$data_user,$data_venta,$destinatario)
    {
        $this->conect=$conexion;
        $this->user=$data_user;
        $this->venta=$data_venta;
        $this->destino=$destinatario;
    }



    public function IdPedido()
    {
        $longitud=9;
        $idPedido=substr(md5(microtime()),1,$longitud);
    
        return $idPedido;
    }



    public function Clave()
    {

        $longitud=50;
        $clave=substr(md5(microtime()),1,$longitud);

        //guardando clave
        $this->venta['clave']=$clave;

        return $clave;

    }



    public function InsertVenta($id_pedido,$clave)
    {
        //var_dump($this->destino);
    
        $insert="insert into ventas
         values(
         null,
         '".$this->destino['nombre-cliente']."',
         '".$this->destino['ciudad']."',
         '".$this->destino['barrio-localidad']."',
         '".$this->destino['direccion']."',
         '".$this->destino['celular-cliente']."',
         '".$this->venta['subtotal']."',
         '".$this->venta['envio']."',
         '".$this->destino['metodo-pago']."',
         'Alistando pedido',
         '".$clave."',
         '".$id_pedido."',
         '".$this->venta['producto']."',
         '".$this->venta['cantidad']."')";


        
        if(mysqli_query($this->conect,$insert)){


            $response=true;

        }else{

            $response=false;
        }



        return $response;


    }


    public function GetIdVenta(){


        $select="select id_venta, id_pedido from ventas where clave = '".$this->venta['clave']."'";

        //var_dump($select);


        $query=mysqli_query($this->conect,$select);

        while($res=mysqli_fetch_assoc($query)){


            $response[]=$res;
        }

        session_start();
        $_SESSION['id_pedido']=$response[0]['id_pedido'];

        return $response;
    }




    public function InsertRelacion($tabla,$id_venta,$id_variable){

        $insert="insert into ".$tabla." values(null,'".$id_venta."','".$id_variable."')";


        if(mysqli_query($this->conect,$insert)){

            
            $response=true;


        }else{


            $response=false;

        }


        return $response;


    }

    public function UpdateUsuer($id_usuario, $barrio, $direccion, $telefono){

        $update="update usuarios set barrio_localidad='".$barrio."', direccion='".$direccion."', telefono='".$telefono."' where id_usuario='".$id_usuario."' ";


        if(mysqli_query($this->conect,$update)){



            $response=true;

        }else{

            $response=false;
        }



        return $response;

    }

}

?>